<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string|min:10',
        ]);

        // Armazena os dados no banco
        Ticket::create($validated);

        return redirect()->route('tickets.create')->with('success', 'Ticket enviado e armazenado com sucesso!');
    }
}
