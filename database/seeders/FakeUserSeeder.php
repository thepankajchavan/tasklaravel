<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FakeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Model\User::create([
            'name' => 'admin',
            'fname' => 'admin',
            'lname' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'dob' => '1988-10-25',
            'gender' => 'Male',
            'annual_income' => '0',
            'family_type' => 'Joint family',
            'occupation' => 'Private job',
            'manglik ' => 'Yes',
            'role' => 'admin'
        ]);
    }
}
