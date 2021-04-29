<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','org','title','img','address','working_hours','tel','site','discount', 'description','instagram','vk','facebook','youtube','priority','coordinates'];

    protected $with = ['categories', 'cities'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function cities()
    {
        return $this->belongsToMany(City::class);
    }
}
