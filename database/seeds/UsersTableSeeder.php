<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            $users = factory(App\Entities\User::class)->create([
                'name'      => 'Admin',
                'user'     => 'admin',
                'password'  => bcrypt('Ab123456'),
                'email'     => 'admin@snpoints.com'
            ]);
            if ( $users != null ) {
                echo 'Usuario creado de forma correcta';
            } else {
                echo 'Error al crear el usuario';
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
