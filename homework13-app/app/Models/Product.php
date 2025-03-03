<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Product extends Model {
        /** @use HasFactory<\Database\Factories\UserFactory> */
        use HasFactory, Notifiable;
    protected $fillable = ['sku','name','price'];
}
