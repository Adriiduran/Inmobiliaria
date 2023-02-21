<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
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
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table("users")->insert(
                array(
                    'name'     => $faker->firstName(),
                    'email'  => $faker->unique()->safeEmail(),
                    'email_verified_at' => null,
                    'password' => Hash::make('123456789'),
                    'rol' => 'usuario',
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                )
            );
        }

        DB::table("users")->insert(
            array(
                'name'     => 'Adri',
                'email'  => 'adriiiduraan@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('123456789'),
                'rol' => 'admin',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        );

        DB::table("users")->insert(
            array(
                'name'     => 'Igna',
                'email'  => 'monraedo@live.com',
                'email_verified_at' => null,
                'password' => Hash::make('123456789'),
                'rol' => 'admin',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            )
        );
    }
}
