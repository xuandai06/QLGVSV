<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id' => '195d150011',
            'email' => 'xuandai06@gmail.com',
            'role' => 'admin',
            'password'=> Hash::make('123456'),
        ];

        $data1 = [
            'id' => '195d150013',
            'email' => 'hoanghiep@gmail.com',
            'role' => 'admin',
            'password'=> Hash::make('hoanghiep'),
        ];

        $data2 = [
            'id' => '205d150013',
            'email' => 'manhhung@gmail.com',
            'role' => 'teacher',
            'password'=> Hash::make('manhhung'),
        ];

        $data3 = [
            'id' => '205d150014',
            'email' => '3conchongong@gmail.com',
            'role' => 'student',
            'password'=> Hash::make('3conchongong'),
        ];

        DB::table('users')->insert($data);
        //DB::table('users')->insert($data1);
        //DB::table('users')->insert($data2);
    }
}
