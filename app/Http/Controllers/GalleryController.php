<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class GalleryController extends Controller
{
    public function index()
    {
        $books = Book::Paginate(12);
        $title = 'عرض الكتب حسب تاريخ الإضافة';

        return view('gallery', compact('books', 'title'));
    }
}
