<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $this->createAdmin();
        $this->createUser();
    }

    public function createAdmin(){
        $user = new User;
        $user->name= 'Emanuel';
        $user->email= 'emanuelsaucedo52@gmail.com';
        $user->password = Hash::make('1234567890');
        $user->role_id = 1;
        $user->save();
        /* ('Emanuel','emanuelsaucedo52@gmail.com',Hash::make('1234567890')); */
    }

    public function createUser(){
        $user = new User;
        $user->name= 'Emanuel Prueba';
        $user->email= 'emanuel-75@hotmail.es';
        $user->password = Hash::make('1234567890');
        $user->role_id = 2;
        $user->save();
        /* ('Emanuel','emanuelsaucedo52@gmail.com',Hash::make('1234567890')); */
    }
}
