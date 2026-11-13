<?php

namespace Database\Seeders;

use App\Models\GovernanceMember;
use Illuminate\Database\Seeder;

class GovernanceMemberSeeder extends Seeder
{
    public function run(): void
    {
        $bot = [
            ['name' => 'Professor (Mallam) Yusuf Olaolu Ali', 'role' => 'Chairman', 'initials' => 'YO', 'photo' => 'yusuf-olaolu.jpg'],
            ['name' => 'Alhaji Kabeer Alaraba', 'role' => 'Secretary', 'initials' => 'KA', 'photo' => 'kabeer-alaraba.jpg'],
            ['name' => 'Dr. Abdulwahab Akewusola (AWA) Ibraheem, PhD, FCA', 'role' => 'Member', 'initials' => 'AW', 'photo' => 'abdulwahab-ibraheem.jpg'],
            ['name' => 'Emeritus Professor Is-haq Olanrewaju Oloyede, CON, FNAL', 'role' => 'Member', 'initials' => 'IO', 'photo' => 'ishaq-oloyede.jpg'],
            ['name' => 'Alhaji Muritadha Adeniji', 'role' => 'Member', 'initials' => 'MA', 'photo' => 'muritadha-adeniji.jpg'],
            ['name' => 'Dr. Foluke Kafayat Abdulrazaq, OON', 'role' => 'Member', 'initials' => 'FK', 'photo' => 'foluke-abdulrazaq.jpg'],
            ['name' => 'Alhaji B. Tajudeen Salau', 'role' => 'Member', 'initials' => 'TS', 'photo' => 'tajudeen-salau.jpg'],
            ['name' => 'Professor Ganiyu Olatunji Olatunde', 'role' => 'Member', 'initials' => 'GO', 'photo' => 'ganiyu-olatunde.jpg'],
            ['name' => 'Alhaji AbdulRauf A. AbdulWaheed', 'role' => 'Member', 'initials' => 'AA', 'photo' => 'abdulrauf-abdulwaheed.jpg'],
            ['name' => 'Imam Moruf O. AbdulAzeez', 'role' => 'Member', 'initials' => 'MO', 'photo' => 'moruf-abdulazeez.jpg'],
            ['name' => 'Alhaji Olalekan Saliu', 'role' => 'Member', 'initials' => 'OS', 'photo' => 'olalekan-saliu.jpg'],
            ['name' => 'Vice-Admiral Jubrila Ayinla (Rtd), GCON', 'role' => 'Member', 'initials' => 'JA', 'photo' => 'jubrila-ayinla.jpg'],
            ['name' => 'Dr. Muiz Adeyemi Banire, SAN, PhD', 'role' => 'Member', 'initials' => 'MB', 'photo' => 'muiz-banire.jpg'],
        ];

        $council = [
            ['name' => 'Dr. AWA Ibraheem', 'role' => 'Pro-Chancellor & Chairman', 'initials' => 'AW'],
            ['name' => 'Prof. Olayinka R. Karim', 'role' => 'Vice-Chancellor/ Member', 'initials' => 'OK'],
            ['name' => 'Prof. Abdullateef Usman', 'role' => 'Deputy Vice-Chancellor/ Member', 'initials' => 'AU'],
            ['name' => 'Oloye Remi I. Babalola', 'role' => 'Member, Rep. of the Proprietor', 'initials' => 'RB'],
            ['name' => 'Alhaja Nuratallah Oluwatoyin Jolaoso', 'role' => 'Member, Rep. of the Proprietor', 'initials' => 'NJ'],
            ['name' => 'Engr. Tunji Adio', 'role' => 'Member, Rep. of the Proprietor', 'initials' => 'TA'],
            ['name' => 'Engr. Kamar Bolaji Olawuyi', 'role' => 'Member, Rep. of the Proprietor', 'initials' => 'KO'],
            ['name' => 'Prof. Nosirudeen Onibon', 'role' => 'Member, Rep. of the Proprietor', 'initials' => 'NO'],
            ['name' => 'Hadijah Saadat Modibo Kawu', 'role' => 'Member, Rep. of the Proprietor', 'initials' => 'HK'],
            ['name' => 'Alhaji Remi Bello', 'role' => 'Member, Rep. of Ext. Comm. Male', 'initials' => 'RB'],
            ['name' => 'Alhaja Bashirat Odunewu', 'role' => 'Member, Rep. of Ext. Comm. Female', 'initials' => 'BO'],
            ['name' => 'Aare Abdulganiyu Adekunle', 'role' => 'Member, Rep. of the Host Comm.', 'initials' => 'AA'],
            ['name' => 'Mr. Mubarak Olawale Qasim', 'role' => 'Rep. State Min. of Education', 'initials' => 'MQ'],
            ['name' => 'Prof. Serifat Labo Popoola', 'role' => 'Member, Rep. of Senate', 'initials' => 'SP'],
            ['name' => 'Prof. Kazeem A. Alabi', 'role' => 'Member, Rep. of Senate', 'initials' => 'KA'],
            ['name' => 'Prof. Kazeem Olajide Olaniyan', 'role' => 'Member, Rep. of Senate', 'initials' => 'KO'],
            ['name' => 'Dr. AbdulFattah Raji', 'role' => 'Member, Rep. of Senate', 'initials' => 'AR'],
            ['name' => 'Prof. Hakeem S. Bolarinwa', 'role' => 'Member, Rep. of Congregation', 'initials' => 'HB'],
            ['name' => 'Mr. Fasasi Semiu Alade', 'role' => 'Member, Rep. of Congregation', 'initials' => 'FA'],
            ['name' => 'Mr. Shetima A. Adekeye', 'role' => 'Member, Rep. of the Alumni', 'initials' => 'SA'],
            ['name' => 'Mr. Sheriff A. Adenekan', 'role' => 'Registrar & Secretary to the Council', 'initials' => 'SA'],
        ];

        foreach ($bot as $i => $m) {
            GovernanceMember::updateOrCreate(
                ['type' => 'bot', 'name' => $m['name']],
                ['role' => $m['role'], 'initials' => $m['initials'], 'photo' => $m['photo'], 'sort_order' => $i + 1, 'is_active' => true]
            );
        }

        foreach ($council as $i => $m) {
            GovernanceMember::updateOrCreate(
                ['type' => 'council', 'name' => $m['name']],
                ['role' => $m['role'], 'initials' => $m['initials'], 'sort_order' => $i + 1, 'is_active' => true]
            );
        }
    }
}
