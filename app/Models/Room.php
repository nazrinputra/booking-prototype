<?php

namespace App\Models;

use App\Models\User;
use App\Models\Booking;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'size',
        'price',
        'image',
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
