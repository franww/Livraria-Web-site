<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class BooksSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'O Último Guerreiro',
            'author' => 'João Silva',
            'price' => 29.99,
            'image' => 'books/book1.jpg', // Caminho da imagem
            'category' => 'action',
        ]);
    
        Book::create([
            'title' => 'Amor ao Vento',
            'author' => 'Maria Souza',
            'price' => 19.99,
            'image' => 'books/book2.jpg',
            'category' => 'romance',
        ]);
    
        Book::create([
            'title' => 'Aventura no Parque',
            'author' => 'Ana Costa',
            'price' => 15.99,
            'image' => 'books/book3.jpg',
            'category' => 'kids',
        ]);
    }
}
