<?php

namespace App\Http\Controllers;

use App\Models\Book; // Adicione esta linha para importar o modelo Book
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
{
    // Verifique se o carrinho existe na sessão
    $cart = session()->get('cart', []);

    // Retorne a view com os itens do carrinho
    return view('dashboard.cart', compact('cart'));
}

    


        public function add(Request $request)
        {
            $book = Book::find($request->id);  // Obtém o livro

            $cart = session()->get('cart', []);

            if (!$cart) {
                $cart = [];
            }

            // Verifique se o livro já está no carrinho
            if (isset($cart[$book->id])) {
                // Se já estiver, apenas aumente a quantidade
                $cart[$book->id]['quantity']++;
            } else {
                // Caso contrário, adicione o livro ao carrinho
                $cart[$book->id] = [
                    'id' => $book->id,
                    'title' => $book->title,
                    'author' => $book->author, // Verifique se essa linha existe e está correta
                    'price' => $book->price,
                    'image' => $book->image ?? 'default.jpg',
                    'quantity' => 1
                ];
                
    }

    // Salve o carrinho na sessão
    session()->put('cart', $cart);

    return redirect()->route('cart.index');
}

    
    public function update(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->id;
        $quantity = $request->quantity;

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Quantidade atualizada!');
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->id;

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Item removido do carrinho!');
    }
}
