<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
          //Create users
          $adminUser = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        $vendorUser = User::create([
            'name' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => Hash::make('vendor'),
        ]);

       
        //Create roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'vendor']);
     
        //Assigning roles to user
        $adminUser->assignRole('admin');
        $vendorUser->assignRole('vendor');

    }
}
