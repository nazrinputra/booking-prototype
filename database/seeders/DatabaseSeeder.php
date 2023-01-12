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

        $room = Room::create([
            'user_id' => $user->id,
            'name' => 'Test Room',
            'size' => '100 sq ft',
            'price' => '49.99'
        ]);

        $room->categories()->attach([$category1->id, $category2->id, $category3->id]);

        $booking = Booking::create([
            'user_id' => $user->id,
            'room_id' => $room->id,
            'date' => now(),
            'remark' => 'Test Booking',
        ]);
    }
}
