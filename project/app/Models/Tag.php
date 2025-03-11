<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Types\Model\Article;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    protected $fillable=['name'];
    public function artickels(){
        return $this->belongsToMany(Article::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
