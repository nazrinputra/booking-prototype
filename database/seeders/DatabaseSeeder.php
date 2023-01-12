<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $category1 = Category::create([
            'name' => 'Lecture Hall',
            'description' => 'Test Description 1'
        ]);

        $category2 = Category::create([
            'name' => 'Meeting Room',
            'description' => 'Test Description 2'
        ]);

        $category3 = Category::create([
            'name' => 'Tutorial Class',
            'description' => 'Test Description 3'
        ]);

        $room1 = Room::create([
            'user_id' => $user->id,
            'category_id' => $category1->id,
            'name' => 'Test Lecture Hall',
            'size' => '1000 sq ft',
            'price' => '249.99'
        ]);

        $room2 = Room::create([
            'user_id' => $user->id,
            'category_id' => $category2->id,
            'name' => 'Test Meeting Room',
            'size' => '500 sq ft',
            'price' => '149.99'
        ]);

        $room3 = Room::create([
            'user_id' => $user->id,
            'category_id' => $category3->id,
            'name' => 'Test Tutorial Class',
            'size' => '100 sq ft',
            'price' => '49.99'
        ]);

        Booking::create([
            'user_id' => $user->id,
            'room_id' => $room1->id,
            'date' => now(),
            'remark' => 'Test Booking',
        ]);

        Booking::create([
            'user_id' => $user->id,
            'room_id' => $room2->id,
            'date' => now()->modify('+1 day'),
            'remark' => 'Test Booking',
        ]);

        Booking::create([
            'user_id' => $user->id,
            'room_id' => $room3->id,
            'date' => now()->modify('+2 day'),
            'remark' => 'Test Booking',
        ]);
    }
}
