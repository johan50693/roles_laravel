<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Users
        factory(App\User::class,20)->create();

        // Create roles
        Role::create([
        	'name' 		=> 'Admin',
        	'slug' 		=> 'admin',
        	'special' 	=> 'all-access',
        ]);
    }
}
