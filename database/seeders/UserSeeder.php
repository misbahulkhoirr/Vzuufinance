<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Setting;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'administrator',
            'full_name' => 'Administrator',
            'password' => Hash::make(12345678),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'leader',
            'full_name' => 'Leader',
            'password' => Hash::make(12345678),
            'role_id' => 2
        ]);

        User::create([
            'name' => 'staff',
            'full_name' => 'staff',
            'password' => Hash::make(12345678),
            'role_id' => 3
        ]);

        Setting::create([
            'app_name'=>config('app.name'),
            'logo'=>null,
            'longitude'=>123456,
            'latitude'=>123456,
            'time_in' => '08:00',
            'time_out' => '17:00',
            'created_at'=>null,
            'updated_at'=>null
        ]);
    }
}
