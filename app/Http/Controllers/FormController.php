<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{


public function store(Request $request)
{
    $data = $request->only(['nome', 'cognome', 'email', 'azienda', 'ruolo']);

    $file = storage_path('app/form_data.csv');
    $isNewFile = !file_exists($file);

    $handle = fopen($file, 'a');
    if ($isNewFile) {
        fputcsv($handle, array_keys($data)); // Scrive l'header solo se il file è nuovo
    }
    fputcsv($handle, $data);
    fclose($handle);

    return back()->with('success', 'Dati salvati con successo!');
}

}
