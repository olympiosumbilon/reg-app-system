<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
use App\Models\Form;
use App\Models\User;

class Appointment extends Model
{

    use HasFactory;

    protected $fillable = [
        'app_purpose',
    ];

     public function form()
     {
         return $this->belongsTo(Form::class);
     }

     public function bookings()
     {
    
         return $this->hasMany(Booking::class);
     }
    
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
