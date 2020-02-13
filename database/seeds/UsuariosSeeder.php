<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::firstOrCreate(['email'=>'gui@mail.com'],[
          'name'=>'Guilherme',
          'password'=>Hash::make('123456')
        ]);

        \App\User::firstOrCreate(['email'=>'murilo@mail.com'],[
          'name'=>'Murilo',
          'password'=>Hash::make('123456')
        ]);



        echo "Usuários criados! \n";
    }
}
