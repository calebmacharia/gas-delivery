<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooker extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'type', 'size', 'price', 'image'];
}
