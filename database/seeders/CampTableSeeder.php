<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;
use App\Models\Camp;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp; /*ini untuk import model kita*/


>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 200,
=======
        $camps = 
        [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
<<<<<<< HEAD
            ]
        ];

        // 1st method
        // foreach($camps as $camp) {
        //     Camp::create($camp);
        // }

        // 2nd method
        Camp::insert($camps);
=======
            ],
        ];
        // foreach ($camps as $key => $camp)
        // {
        //     Camp::create($camp);
        // }
        //atau
        Camp::insert($camps);/*ini untuk memasukkann data ke tabel camps*/
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    }
}
