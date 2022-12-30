<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;
use App\Models\User;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;/*ini untuk import model kita*/
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        User::create([
            'name' => 'admin',
            'email' => 'admin@laracamp.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('password'),
            'is_admin' => true
        ]);
=======
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@laracamp.com',
                'email_verified_at' => date ('Y-m-d H:i:s', time()),
                /*Y = year, m = month, d = tanggal,H = hour, i= minutes, s = second*/
                'password' => \bcrypt('password'), /*ini untuk enkripsi*/
                'is_admin' => true,
            ]
        );
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    }
}
