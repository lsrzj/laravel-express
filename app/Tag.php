<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{   
    public $timestamps = false; //disable timestamps on this class
    protected $fillable = [
        'name'
    ];
    
    public function posts() {
        return $this->belongsToMany('App\Post', 'posts_tags');
    }
}
