<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NavigationItem;

class NavigationSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing items
        NavigationItem::truncate();

        // ── 1. The University ──
        $univ = NavigationItem::create(['label' => 'The University', 'sort_order' => 1, 'is_active' => true]);
        NavigationItem::create(['label' => 'About Fountain University', 'route_name' => 'about', 'parent_id' => $univ->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => 'Board of Trustees', 'route_name' => 'about-bot', 'parent_id' => $univ->id, 'sort_order' => 2]);
        NavigationItem::create(['label' => 'Governing Council', 'route_name' => 'about-governing-council', 'parent_id' => $univ->id, 'sort_order' => 3]);
        NavigationItem::create(['label' => 'The Senate', 'route_name' => 'the-senate', 'parent_id' => $univ->id, 'sort_order' => 4]);
        NavigationItem::create(['label' => 'Congregation', 'route_name' => 'congregation', 'parent_id' => $univ->id, 'sort_order' => 5]);

        $principals = NavigationItem::create(['label' => 'Principal Officers', 'parent_id' => $univ->id, 'sort_order' => 6]);
        NavigationItem::create(['label' => 'The Vice-Chancellor', 'route_name' => 'the-vice-chancellor', 'parent_id' => $principals->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => 'The Deputy Vice-Chancellor', 'route_name' => 'the-dvc', 'parent_id' => $principals->id, 'sort_order' => 2]);
        NavigationItem::create(['label' => 'The Registrar', 'route_name' => 'the-registrar', 'parent_id' => $principals->id, 'sort_order' => 3]);
        NavigationItem::create(['label' => 'The Bursar', 'route_name' => 'the-bursar', 'parent_id' => $principals->id, 'sort_order' => 4]);
        NavigationItem::create(['label' => 'The Librarian', 'route_name' => 'the-librarian', 'parent_id' => $principals->id, 'sort_order' => 5]);

        NavigationItem::create(['label' => 'Our Gallery', 'route_name' => 'our-gallery', 'parent_id' => $univ->id, 'sort_order' => 7]);

        $showcase = NavigationItem::create(['label' => 'Institutional Showcase', 'parent_id' => $univ->id, 'sort_order' => 8]);
        NavigationItem::create(['label' => 'Partnerships', 'route_name' => 'partnerships', 'parent_id' => $showcase->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => 'Donors', 'route_name' => 'donors', 'parent_id' => $showcase->id, 'sort_order' => 2]);
        NavigationItem::create(['label' => 'Scholarships', 'route_name' => 'scholarships', 'parent_id' => $showcase->id, 'sort_order' => 3]);
        NavigationItem::create(['label' => 'Dignitaries', 'route_name' => 'dignitaries', 'parent_id' => $showcase->id, 'sort_order' => 4]);
        NavigationItem::create(['label' => 'Honorary Doctorates', 'route_name' => 'honorary-doctorates', 'parent_id' => $showcase->id, 'sort_order' => 5]);
        NavigationItem::create(['label' => 'Convocation Lecturers', 'route_name' => 'convocation-lecturers', 'parent_id' => $showcase->id, 'sort_order' => 6]);

        $resources = NavigationItem::create(['label' => 'Resources', 'parent_id' => $univ->id, 'sort_order' => 9]);
        NavigationItem::create(['label' => 'General Downloads', 'route_name' => 'general-downloads', 'parent_id' => $resources->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => "Students' Downloads", 'route_name' => 'student-downloads', 'parent_id' => $resources->id, 'sort_order' => 2]);
        NavigationItem::create(['label' => 'Staff Downloads', 'route_name' => 'staff-downloads', 'parent_id' => $resources->id, 'sort_order' => 3]);

        // ── 2. Academics ──
        $acad = NavigationItem::create(['label' => 'Academics', 'sort_order' => 2, 'is_active' => true]);
        NavigationItem::create(['label' => 'Sub-Degree', 'route_name' => 'subdegree-programme', 'parent_id' => $acad->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => 'Undergraduate', 'route_name' => 'undergradute-programme', 'parent_id' => $acad->id, 'sort_order' => 2]);
        $postgrad = NavigationItem::create(['label' => 'Postgraduate', 'parent_id' => $acad->id, 'sort_order' => 3]);
        NavigationItem::create(['label' => 'Office of the Dean', 'route_name' => 'the-dean-of-spgs', 'parent_id' => $postgrad->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => 'Postgraduate Programmes', 'route_name' => 'postgraduate-programme', 'parent_id' => $postgrad->id, 'sort_order' => 2]);
        NavigationItem::create(['label' => 'Our Staff', 'route_name' => 'our-staff', 'parent_id' => $postgrad->id, 'sort_order' => 3]);
        NavigationItem::create(['label' => "Postgraduate Students' Downloads", 'route_name' => 'pg-download', 'parent_id' => $postgrad->id, 'sort_order' => 4]);
        NavigationItem::create(['label' => 'IPSS', 'url' => 'https://ipss.fuo.edu.ng', 'is_external' => true, 'target' => '_blank', 'parent_id' => $acad->id, 'sort_order' => 4]);

        // ── 3. Admissions ──
        $adm = NavigationItem::create(['label' => 'Admissions', 'sort_order' => 3, 'is_active' => true]);
        NavigationItem::create(['label' => 'Admission Requirements', 'route_name' => 'admission-requirement', 'parent_id' => $adm->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => 'Postgraduate Application', 'url' => 'https://eportal.fuo.edu.ng', 'is_external' => true, 'target' => '_blank', 'parent_id' => $adm->id, 'sort_order' => 2]);
        NavigationItem::create(['label' => 'Undergraduate Application', 'url' => 'https://eportal.fuo.edu.ng', 'is_external' => true, 'target' => '_blank', 'parent_id' => $adm->id, 'sort_order' => 3]);
        NavigationItem::create(['label' => 'Sandwich Application', 'url' => 'https://eportal.fuo.edu.ng', 'is_external' => true, 'target' => '_blank', 'parent_id' => $adm->id, 'sort_order' => 4]);

        // ── 4. Colleges & Institutes ──
        $colleges = NavigationItem::create(['label' => 'Colleges & Institutes', 'sort_order' => 4, 'is_active' => true]);
        NavigationItem::create(['label' => 'Colleges', 'route_name' => 'colleges', 'parent_id' => $colleges->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => 'Institutes (IPSS)', 'url' => 'https://ipss.fuo.edu.ng', 'is_external' => true, 'target' => '_blank', 'parent_id' => $colleges->id, 'sort_order' => 2]);

        // ── 5. Centres & Units ──
        $centresNav = NavigationItem::create(['label' => 'Centres & Units', 'sort_order' => 5, 'is_active' => true]);
        NavigationItem::create(['label' => 'Centres', 'route_name' => 'centres', 'parent_id' => $centresNav->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => 'Units', 'route_name' => 'units', 'parent_id' => $centresNav->id, 'sort_order' => 2]);

        // ── 6. Publications ──
        $pub = NavigationItem::create(['label' => 'Publications', 'sort_order' => 6, 'is_active' => true]);
        NavigationItem::create(['label' => 'Inaugural Lectures', 'route_name' => 'inaugural-lectures', 'parent_id' => $pub->id, 'sort_order' => 1]);
        NavigationItem::create(['label' => 'Annual Reports', 'route_name' => 'annual-report', 'parent_id' => $pub->id, 'sort_order' => 2]);
        NavigationItem::create(['label' => 'Fountain Chronicles', 'route_name' => 'fuo-chronicles', 'parent_id' => $pub->id, 'sort_order' => 3]);

        $this->command->info('Navigation seeded successfully.');
    }
}
