<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function books()
    {
        // return $this->hasMany(Book::class);
        return $this->hasMany('App\Book');
    }
}
