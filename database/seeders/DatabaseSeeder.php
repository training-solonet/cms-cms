<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\dataAdmin;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@test.test',
            'role' => 'admin',
            'password' => bcrypt('12341234'),
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@test.test',
            'role' => 'user',
            'password' => bcrypt('12341234'),
        ]);

        // dataAdmin::create([
        //     'training' => 'Laravel',
        //     'deskripsi' => 'Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep Model-View-Controller. Laravel berada dibawah lisensi MIT, dengan menggunakan GitHub sebagai tempat berbagi kode.',
        //     'mentor' => 'Edy',
        //     'waktu' => '2 jam',
        //     'harga' => '200.000'
        // ]);
    }
}
