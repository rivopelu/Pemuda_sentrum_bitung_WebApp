<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\User::factory(200)->create();
        DB::table('users')->insert([
            'name' => 'Praysingzky Richardo Rivo Pelu',
            'username' => 'Rivo Pelu',
            'slug' => 'Rivo-Pelu',
            'email' => 'rivopelu@gmail.com',
            'password' => Hash::make('rivopelu123'),
            'noTelp' => '081242144819',
            'alamat' => 'kakenturan satu, kec Maesa, Kota Bitung, Sulawesi Utara',
            'avatar' =>'https://e7.pngegg.com/pngimages/122/453/png-clipart-computer-icons-user-profile-avatar-female-profile-heroes-head.png',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        \App\Models\category::factory(10)->create();
        \App\Models\tag::factory(25)->create();
        \App\Models\info::factory(100)->create();
    }
}
