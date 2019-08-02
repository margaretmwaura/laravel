<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {

        for ($i = 0; $i < 5; $i++)
        {
        DB::table('students')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        }
    }
}
