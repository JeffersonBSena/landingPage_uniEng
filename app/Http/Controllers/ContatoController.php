<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function store(Request $request)
    {
        // Honeypot check
        if ($request->filled('website')) {
            return back();
        }

        $validated = $request->validate([
            'nome'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'telefone' => 'nullable|string|max:20',
            'assunto'  => 'nullable|string|max:255',
            'mensagem' => 'required|string|max:5000',
        ]);

        Contato::create($validated);

        return back()->with('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
    }
}
