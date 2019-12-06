<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		App\User::create([
			'id' => '1',
            'name' =>  'Luis Humberto Jr Aguayo Robles',
            'username' => 'luisjr1611',
			'email' => 'luisjr1611@hotmail.com',
            'rol' => 'Administrador',
            'password' => bcrypt('ucantseeme'),// secret

		]);
    }
}
