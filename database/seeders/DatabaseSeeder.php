<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
use Illuminate\Database\Seeder;

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
<<<<<<< HEAD
        $this->call([
            CampTableSeeder::class,
            CampBenefitTableSeeder::class,
            AdminUserSeeder::class  
        ]);
=======
        $this->call
        ([
            CampTableSeeder::class,/*ini untuk memanggil data di camp table seeder dan memasukkannya ke tabel*/
            CampBenefitTableSeeder::class,/*ini untuk memanggil data di camp benefit table seeder dan memasukkannya ke tabel*/
            AdminUserSeeder::class,/*ini untuk memanggil data di admin user seeder dan memasukkannya ke tabel*/
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    }
}
