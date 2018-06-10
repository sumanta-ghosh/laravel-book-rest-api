<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

    /**
     * The attributes that are mass assignable 
     * 
     * @var array
     */
    protected $fillable = [
        'book_id', 'user_id', 'rating'
    ];

    public function book() {
        return $this->belongsTo(Book::class);
    }

}
