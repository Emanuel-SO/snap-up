<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
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
        Marca::factory(4)->create();
        Categoria::factory(4)->create();
        Producto::factory(20)->create();
    }

    public function createAdmin(){
        $user = new User;
        $user->name= 'David';
        $user->email= 'davidcrrll00@gmail.com';
        $user->password = Hash::make('1234567890');
        $user->role_id = 1;
        $user->save();
        /* ('Emanuel','emanuelsaucedo52@gmail.com',Hash::make('1234567890')); */
    }

    public function createUser(){
        $user = new User;
        $user->name= 'David Prueba';
        $user->email= 'davidprueba@gmail.com';
        $user->password = Hash::make('1234567890');
        $user->role_id = 2;
        $user->save();
        /* ('Emanuel','emanuelsaucedo52@gmail.com',Hash::make('1234567890')); */
    }

    
}
