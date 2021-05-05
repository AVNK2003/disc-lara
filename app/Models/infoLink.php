<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoLink extends Model
{
    use HasFactory;

    protected $fillable = ['svg', 'title', 'text', 'slug'];
}
