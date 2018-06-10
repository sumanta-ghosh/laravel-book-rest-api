<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

    /**
     *The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'description'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }

}
