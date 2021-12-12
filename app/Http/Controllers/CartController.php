<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToCart(Request $request)
    {
        $book = Book::find($request->id);

        if(auth()->user()->booksInCart->contain($book)){
            $newQuantity = $request->quantity + auth()->user()->booksInCart()->where('book_id', $book->id)->first()->pivot->number_of_copies;
        }
    }
}
