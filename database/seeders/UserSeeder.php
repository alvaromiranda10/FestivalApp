<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Alex DJ',
            'age' => 24,
            'email' => 'alexDJ@gmail.com',
            'password' => bcrypt('12345678'),
            'image_src' => 'dj1.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ])->assignRole('dj');
        
        User::create([
            'name' => 'Roman DJ',
            'age' => 29,
            'email' => 'romanDJ@gmail.com',
            'password' => bcrypt('12345678'),
            'image_src' => 'dj2.jpeg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ])->assignRole('dj');
        
        User::create([
            'name' => 'Tao DJ',
            'age' => 35,
            'email' => 'taoDJ@gmail.com',
            'password' => bcrypt('12345678'),
            'image_src' => 'dj3.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ])->assignRole('dj');
    }
}
