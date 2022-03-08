<?php

use Illuminate\Database\Seeder;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        $data= [
            'name' => 'admin',
            // 'username' => 'admin',
            'email' => 'khusboo@gmail.com',
            'password' => bcrypt('khusboo'),
        ];

        DB::table('admins')->insert($data);
    }
    }

