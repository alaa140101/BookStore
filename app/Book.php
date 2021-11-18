<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function category()
    {
        // return $this->belongsTo(Category::class);
        return $this->belongsTo('App\Category');
    }

    public function publisher()
    {
        // return $this->belongsTo(Category::class);
        return $this->belongsTo('App\Publisher');
    }

    public function authors()
    {
        return $this->belongsToMany('App\Author', 'book_author');
    }


}
