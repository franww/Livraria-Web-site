<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    public function actionBooks()
    {
        $books = Book::where('category', 'action')->get();
        return view('dashboard.categories.action', compact('books'));
    }

    public function romanceBooks()
    {
        $books = Book::where('category', 'romance')->get();
        return view('dashboard.categories.romance', compact('books'));
    }

    public function kidsBooks()
    {
        $books = Book::where('category', 'kids')->get();
        return view('dashboard.categories.kids', compact('books'));
    }
}

    