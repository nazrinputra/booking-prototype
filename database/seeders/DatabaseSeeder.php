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
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $category1 = Category::create([
            'name' => 'Lecture Hall',
            'description' => 'A lecture hall (or lecture theatre) is a large room used for instruction, typically at a college or university. Unlike a traditional classroom with a capacity normally between one and fifty, the capacity of lecture halls is usually measured in the hundreds. Lecture halls almost always have a pitched floor, so that those in the rear are sat higher than those at the front (i.e. tiered seating), allowing them to see the lecturer. The importance of lecture halls is so significant that some schools of architecture have offered courses exclusively centered on their design. The noted Boston architect Earl Flansburgh wrote numerous articles focusing on achieving efficacious lecture hall design.'
        ]);

        $category2 = Category::create([
            'name' => 'Meeting Room',
            'description' => 'A conference hall, conference room, or meeting room is a room provided for singular events such as business conferences and meetings. It is commonly found at large hotels and convention centers though many other establishments, including even hospitals, have one. Sometimes other rooms are modified for large conferences such as arenas or concert halls. Aircraft have been fitted out with conference rooms. Conference rooms can be windowless for security purposes. An example of one such room is in the Pentagon, known as the Tank.'
        ]);

        $category3 = Category::create([
            'name' => 'Tutorial Class',
            'description' => 'A tutorial, in education, is a method of transferring knowledge and may be used as a part of a learning process. More interactive and specific than a book or a lecture, a tutorial seeks to teach by example and supply the information to complete a certain task. A tutorial can be taken in many forms, ranging from a set of instructions to complete a task to an interactive problem solving session (usually in academia). '
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
