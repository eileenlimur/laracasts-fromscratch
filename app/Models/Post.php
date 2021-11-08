<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; //which attributes can be mass assigned
    protected $guarded = ['id']; // everything fillable but these
    // protected $guarded = []; // never create ability for users to perform mass assignment unless we are in control of the array i.e. never pass to create method

    public function category()
    {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }
}
