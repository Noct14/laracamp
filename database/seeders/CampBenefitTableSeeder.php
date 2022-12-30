<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & Display'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate'
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportunity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Certificate'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos'
            ],
        ];

=======
        $campBenefits = 
        [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & Display',
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate',
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos',
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportunity',
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder',
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Certificate',
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos',
            ],
            [
                'camp_id' => 2,
                'name' => 'Future Job Opportunity',
            ],
        ];
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        CampBenefit::insert($campBenefits);
    }
}
