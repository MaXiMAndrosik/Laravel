<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model {
        /** @use HasFactory<\Database\Factories\UserFactory> */
        use HasFactory, Notifiable;
    protected $fillable = ['name','address','user_id'];

    public function user(){

        return $this->belongsTo(User::class);

    }
    
}
