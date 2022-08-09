<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Teacher;


class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Teacher::factory()->count(20)->create();

        // $data=[
        //     [
        //         'name'=> Str::random(10),
        //         'email'=> Srt::random(10).'@gmail.com',
        //         'address'=> Srt::random(30),
        //         //'password'=> bcrypt('paswword')(30)

        //     ],

        //     [
        //         'name' => Srt::random(10),
        //         'email' => Srt::random(10).'@gmail.com',
        //         'address' => Srt::random(30),
        //         //'password'=> bcrypt('paswword')(30)

        //     ],
        //     [
        //         'name'=> Srt::random(10),
        //         'email'=> Srt::random(10).'@gmail.com',
        //         'address'=> Srt::random(30),
        //         //'password'=> bcrypt('paswword')(30)

        //     ],
        //     [
        //         'name'=> Srt::random(10),
        //         'email'=> Srt::random(10).'@gmail.com',
        //         'address'=> Srt::random(30),
        //         //'password'=> bcrypt('paswword')(30)

        //     ],
        //     [
        //         'name'=> Srt::random(10),
        //         'email'=> Srt::random(10).'@gmail.com',
        //         'address'=> Srt::random(30),
        //         //'password'=> bcrypt('paswword')(30)

        //     ]

        //     ];
        //     DB::table('teachers')->insert($data);
    
    }
}
