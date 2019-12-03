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
        DB::table('users')->truncate();

		App\User::create([
			'id' => '1',
			'name' =>  'Luis Humberto Jr Aguayo Robles',
			'email' => 'luisjr1611@hotmail.com',
            'user' => 'Administrador',
            'password' => bcrypt('ucantseeme'),// secret

		]);
    }
}
