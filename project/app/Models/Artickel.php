<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artickel extends Model
{
    /** @use HasFactory<\Database\Factories\ArtickelFactory> */
    use HasFactory;
    protected $fillable=['title','description'];
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
