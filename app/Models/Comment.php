<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'name','rating', 'review'];

    public function companies()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
}
