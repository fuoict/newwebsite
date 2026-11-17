<?php

namespace Database\Seeders;

use App\Models\Download;
use Illuminate\Database\Seeder;

class DownloadSeeder extends Seeder
{
    public function run(): void
    {
        // Move the two annual reports out of "general" into their own category (idempotent).
        Download::where('category', 'general')->where('title', 'LIKE', 'Annual Report%')->update(['category' => 'annual']);

        $rows = [
            // ── General ──
            ['category' => 'general', 'title' => 'FUO Grant Management Policy', 'file_path' => 'FUO-Grant-Management-Policy.pdf', 'external_url' => null],
            ['category' => 'general', 'title' => 'Appointment of Vice-Chancellor', 'file_path' => 'appointment-of-vc.pdf', 'external_url' => null],

            // ── Annual Reports ──
            ['category' => 'annual', 'title' => 'Fountain Annual Report 2024/2025', 'file_path' => null, 'external_url' => null],
            ['category' => 'annual', 'title' => 'Fountain Annual Report 2023/2024', 'file_path' => null, 'external_url' => null],
            ['category' => 'annual', 'title' => 'Fountain Annual Report 2022/2023', 'file_path' => null, 'external_url' => null],
            ['category' => 'annual', 'title' => 'Fountain Annual Report 2021/2022', 'file_path' => null, 'external_url' => null],
            ['category' => 'annual', 'title' => 'Fountain Annual Report 2020/2021', 'file_path' => null, 'external_url' => null],
            ['category' => 'annual', 'title' => 'Annual Report Fountain University (2019-2021)', 'file_path' => 'Annual-Report-Fountain-2019-2021.pdf', 'external_url' => null],
            ['category' => 'annual', 'title' => 'Annual Report Fountain University (2018-2019)', 'file_path' => '2018-2019-Annual-Report-FU-1-1.pdf', 'external_url' => null],

            // ── Fountain Chronicles ──
            ['category' => 'chronicles', 'title' => 'Fountain Chronicles Issue I', 'file_path' => null, 'external_url' => null],
            ['category' => 'chronicles', 'title' => 'Fountain Chronicles Issue II', 'file_path' => null, 'external_url' => null],
            ['category' => 'chronicles', 'title' => 'Fountain Chronicles Issue III', 'file_path' => null, 'external_url' => null],
            ['category' => 'chronicles', 'title' => 'Fountain Chronicles Issue IV', 'file_path' => null, 'external_url' => null],
            ['category' => 'chronicles', 'title' => 'Fountain Chronicles Special Edition', 'file_path' => null, 'external_url' => null],
            ['category' => 'chronicles', 'title' => 'Fountain Chronicles Special Edition II', 'file_path' => null, 'external_url' => null],

            // ── Students ──
            ['category' => 'students', 'title' => 'Student Handbook', 'file_path' => null, 'external_url' => 'https://shorturl.at/UjjdM'],
            ['category' => 'students', 'title' => 'University Accommodation Rules', 'file_path' => null, 'external_url' => 'https://shorturl.at/kw3Tl'],
            ['category' => 'students', 'title' => 'Approved Dress Code for Students', 'file_path' => null, 'external_url' => 'https://shorturl.at/lkOdB'],
            ['category' => 'students', 'title' => '2026/2027 Student Admittance Slip New', 'file_path' => null, 'external_url' => 'https://shorturl.at/rLHgr'],
            ['category' => 'students', 'title' => '2026/2027 Fresh Students Entrance Form', 'file_path' => null, 'external_url' => 'https://shorturl.at/4eHD2'],
            ['category' => 'students', 'title' => '2026/2027 Returning Students Entrance Form', 'file_path' => null, 'external_url' => 'https://shorturl.at/XoBoe'],
            ['category' => 'students', 'title' => '2026/2027 Extra Curricular Activities Clubs', 'file_path' => null, 'external_url' => 'https://shorturl.at/WIezK'],
            ['category' => 'students', 'title' => 'NERD Compliance Clearance for 2025 Batch "C" NYSC Mobilization', 'file_path' => null, 'external_url' => 'https://shorturl.at/NQE1O'],
            ['category' => 'students', 'title' => 'Inter-University Transfer Form', 'file_path' => null, 'external_url' => 'https://shorturl.at/r1EBb'],
            ['category' => 'students', 'title' => 'Change of Degree Programme Form', 'file_path' => 'Change-of-Course-form.pdf', 'external_url' => null],
            ['category' => 'students', 'title' => 'Offence and Punishment on Student Misconduct as Amended by Senate', 'file_path' => null, 'external_url' => 'https://shorturl.at/f8HIW'],
            ['category' => 'students', 'title' => 'Sanctions for Proven Cases of Examination Malpractice', 'file_path' => null, 'external_url' => 'https://shorturl.at/UKItm'],

            // ── Staff ──
            ['category' => 'staff', 'title' => 'Staff Personal Profile Data Form', 'file_path' => null, 'external_url' => 'https://shorturl.at/MiX8h'],
            ['category' => 'staff', 'title' => '2026 Promotion Circular', 'file_path' => null, 'external_url' => 'https://tinyurl.com/4rah3anw'],
            ['category' => 'staff', 'title' => '2026 FUO Approved CV Format', 'file_path' => null, 'external_url' => 'https://tinyurl.com/y4asz6vs'],
            ['category' => 'staff', 'title' => 'APER Form for Academic Staff', 'file_path' => null, 'external_url' => 'https://tinyurl.com/35tmu4z9'],
            ['category' => 'staff', 'title' => '2026 FUO Approved CV Document Format', 'file_path' => null, 'external_url' => 'https://tinyurl.com/2s393cse'],
        ];

        foreach ($rows as $i => $row) {
            Download::updateOrCreate(
                ['category' => $row['category'], 'title' => $row['title']],
                [
                    'file_path' => $row['file_path'],
                    'external_url' => $row['external_url'],
                    'sort_order' => $i + 1,
                    'is_active' => true,
                ]
            );
        }
    }
}
