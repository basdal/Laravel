<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InlogController extends Controller
{
    // Definieer de correcte inloggegevens als constanten
    const CORRECT_NAME = 'Gebruiker1';
    const CORRECT_PASSWORD = 'Password123';

    public function showinlog()
    {
        return view('inlog');
    }

    public function submitinlog(Request $request)
    {
        // Validatie van de invoer
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'password' => 'required',
        ]);

        // Controleer of de ingevoerde naam en wachtwoord overeenkomen met de juiste waarden
        if ($request->name === self::CORRECT_NAME && $request->password === self::CORRECT_PASSWORD) {
            // Inlog succesvol, omleiden naar een beveiligde pagina
            return redirect()->route('home')->with('success', 'Je bent ingelogd!');
        }

        // Inlog mislukt, terugsturen naar het inlogformulier met een foutmelding
        return redirect()->route('inlog.show')->withErrors([
            'name' => 'De ingevoerde inloggegevens zijn onjuist.',
        ])->withInput();
    }
}


