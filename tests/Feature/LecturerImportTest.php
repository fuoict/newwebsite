<?php

namespace Tests\Feature;

use App\Models\College;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class LecturerImportTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_import_lecturers_from_json(): void
    {
        $user = User::factory()->create();

        $college = College::create([
            'college_name' => 'College of Computing',
            'college_abbr' => 'COC',
            'dean_name' => 'Prof. Example',
        ]);

        $department = Department::create([
            'department_name' => 'Computer Science',
            'department_code' => 'CS',
            'college_id' => $college->id,
        ]);

        $file = UploadedFile::fake()->createWithContent(
            'lecturers.json',
            json_encode([
                [
                    'name' => 'Ada Lovelace',
                    'title' => 'Dr.',
                    'position' => 'Senior Lecturer',
                    'specialization' => 'Algorithms',
                    'department_name' => $department->department_name,
                    'college_name' => $college->college_name,
                    'email' => 'ada@example.com',
                    'phone' => '08012345678',
                    'is_hod' => 'yes',
                    'is_published' => 'false',
                ],
                [
                    'name' => 'Grace Hopper',
                    'department_name' => $department->department_name,
                    'college_name' => $college->college_name,
                ],
            ], JSON_PRETTY_PRINT)
        );

        $response = $this->actingAs($user)->post(route('admin.lecturers.import'), [
            'import_file' => $file,
            'format' => 'json',
        ]);

        $response->assertRedirect(route('admin.lecturers.index'));
        $response->assertSessionHas('success', 'Imported 2 lecturers successfully.');

        $this->assertDatabaseHas('lecturers', [
            'name' => 'Ada Lovelace',
            'department_id' => $department->id,
            'college_id' => $college->id,
            'email' => 'ada@example.com',
        ]);

        $this->assertDatabaseHas('lecturers', [
            'name' => 'Grace Hopper',
            'department_id' => $department->id,
            'college_id' => $college->id,
        ]);
    }

    public function test_imported_lecturers_are_not_marked_as_hod_by_default(): void
    {
        $user = User::factory()->create();

        $college = College::create([
            'college_name' => 'College of Computing',
            'college_abbr' => 'COC',
            'dean_name' => 'Prof. Example',
        ]);

        $department = Department::create([
            'department_name' => 'Computer Science',
            'department_code' => 'CS',
            'college_id' => $college->id,
        ]);

        $file = UploadedFile::fake()->createWithContent(
            'lecturers.json',
            json_encode([
                [
                    'name' => 'Grace Hopper',
                    'department_name' => $department->department_name,
                    'college_name' => $college->college_name,
                ],
            ], JSON_PRETTY_PRINT)
        );

        $response = $this->actingAs($user)->post(route('admin.lecturers.import'), [
            'import_file' => $file,
            'format' => 'json',
        ]);

        $response->assertRedirect(route('admin.lecturers.index'));
        $this->assertDatabaseHas('lecturers', [
            'name' => 'Grace Hopper',
            'is_hod' => false,
        ]);
    }

    public function test_admin_can_bulk_delete_selected_lecturers_from_the_form_payload(): void
    {
        $user = User::factory()->create();

        $lecturerOne = Lecturer::create([
            'name' => 'Ada Lovelace',
            'department_id' => null,
            'college_id' => null,
            'is_hod' => false,
            'is_published' => true,
        ]);

        $lecturerTwo = Lecturer::create([
            'name' => 'Grace Hopper',
            'department_id' => null,
            'college_id' => null,
            'is_hod' => false,
            'is_published' => true,
        ]);

        $response = $this->actingAs($user)->post(route('admin.lecturers.bulk-delete'), [
            'lecturer_ids' => "{$lecturerOne->id},{$lecturerTwo->id}",
        ]);

        $response->assertRedirect(route('admin.lecturers.index'));
        $this->assertDatabaseMissing('lecturers', ['id' => $lecturerOne->id]);
        $this->assertDatabaseMissing('lecturers', ['id' => $lecturerTwo->id]);
    }

    public function test_download_template_includes_academic_and_social_links_column(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('admin.lecturers.template'));

        $response->assertOk();
        $this->assertStringContainsString('text/csv', $response->headers->get('content-type'));
        $this->assertStringContainsString('google_scholar', $response->streamedContent());
        $this->assertStringContainsString('personal_website', $response->streamedContent());
    }

    public function test_admin_can_import_from_the_real_staff_profile_json_shape(): void
    {
        $user = User::factory()->create();

        $college = College::create([
            'college_name' => 'College of Computing',
            'college_abbr' => 'COC',
            'dean_name' => 'Prof. Example',
        ]);

        $department = Department::create([
            'department_name' => 'Computer Science',
            'department_code' => 'CS',
            'college_id' => $college->id,
        ]);

        $payload = [
            [
                'Timestamp' => '22/03/2024 18:52:49',
                '' => 'Ibrahim Olanrewaju, PhD',
                'Academic Qualification' => 'Ph.D. in Chemistry',
                'Present level/Position' => 'Lecturer I',
                'Area of Specialization' => 'Analytical Chemistry',
                'Research Interest' => '- Environmental analysis',
                'Brief Biography' => 'A researcher',
                'Institutional Email & Phone No
*
Email: i.olanrewaju@fou.edu.ng
Phone: +234-XXX-XXXXXXX
Academic & Social Links (Linktree):

Google Scholar: 
ResearchGate
LinkedIn
Twitter
Personal Website/Blog
And any other ones' => 'Email: i.olanrewaju@fou.edu.ng
Phone: +234-XXX-XXXXXXX
Academic & Social Links (Linktree):

Google Scholar
ResearchGate
LinkedIn
Twitter
Personal Website/Blog
And any other ones',
            ],
        ];

        $file = UploadedFile::fake()->createWithContent('staff-profile.json', json_encode($payload, JSON_PRETTY_PRINT));

        $response = $this->actingAs($user)->post(route('admin.lecturers.import'), [
            'import_file' => $file,
            'format' => 'json',
        ]);

        $response->assertRedirect(route('admin.lecturers.index'));
        $response->assertSessionHas('success', 'Imported 1 lecturers successfully.');
        $this->assertDatabaseHas('lecturers', [
            'name' => 'Ibrahim Olanrewaju, PhD',
            'position' => 'Lecturer I',
            'specialization' => 'Analytical Chemistry',
            'email' => 'i.olanrewaju@fou.edu.ng',
        ]);
    }
}
