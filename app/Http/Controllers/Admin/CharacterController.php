<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Visualizza un elenco di tutte le risorse.
     */
    public function index()
    {
        // Ottiene tutti i personaggi dal database
        $characterArray = Character::all();
        // Ritorna la vista 'characters.index' con i dati dei personaggi
        return view('characters.index', compact('characterArray'));
    }

    /**
     * Mostra il form per creare una nuova risorsa.
     */
    public function create()
    {
        // Ritorna la vista per creare un nuovo personaggio
        return view('characters.create');
    }

    /**
     * Salva una nuova risorsa nel database.
     */
    public function store(Request $request)
    {
        // Valida i dati inviati dal form
        $request->validate([
            'name' => 'required|string|max:255',
            'wikiUrl' => 'nullable|url',
            'race' => 'nullable|string|max:255',
            'birth' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'hair' => 'nullable|string|max:255',
            'height' => 'nullable|string|max:255',
            'realm' => 'nullable|string|max:255',
        ]);

        // Crea un nuovo personaggio con i dati validati
        $character = new Character($request->all());
        // Salva il personaggio nel database
        $character->save();

        // Reindirizza alla lista dei personaggi con un messaggio di successo
        return redirect()->route('characters.index')->with('success', 'Personaggio creato con successo.');
    }

    /**
     * Visualizza una risorsa specifica.
     */
    public function show(string $id)
    {
        // Trova il personaggio specificato dall'id
        $character = Character::findOrFail($id);
        // Ritorna la vista 'characters.show' con i dati del personaggio
        return view('characters.show', compact('character'));
    }

    /**
     * Mostra il form per modificare una risorsa esistente.
     */
    public function edit(string $id)
    {
        // Trova il personaggio specificato dall'id
        $character = Character::findOrFail($id);
        // Ritorna la vista per modificare il personaggio
        return view('characters.edit', compact('character'));
    }

    /**
     * Aggiorna una risorsa esistente nel database.
     */
    public function update(Request $request, string $id)
    {
        // Valida i dati inviati dal form
        $request->validate([
            'name' => 'required|string|max:255',
            'wikiUrl' => 'nullable|url',
            'race' => 'nullable|string|max:255',
            'birth' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'hair' => 'nullable|string|max:255',
            'height' => 'nullable|string|max:255',
            'realm' => 'nullable|string|max:255',
        ]);

        // Trova il personaggio specificato dall'id
        $character = Character::findOrFail($id);
        // Aggiorna i dati del personaggio con i dati validati
        $character->update($request->all());

        // Reindirizza alla lista dei personaggi con un messaggio di successo
        return redirect()->route('characters.index')->with('success', 'Personaggio aggiornato con successo.');
    }

    /**
     * Rimuove una risorsa specifica dal database.
     */
    public function destroy(string $id)
    {
        // Trova il personaggio specificato dall'id
        $character = Character::findOrFail($id);
        // Elimina il personaggio dal database
        $character->delete();

        // Reindirizza alla lista dei personaggi con un messaggio di successo
        return redirect()->route('characters.index')->with('success', 'Personaggio eliminato con successo.');
    }
}
