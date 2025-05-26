<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class CapitalController extends Controller
{
Public function index(Request $request)
{
    $json = file_get_contents(storage_path('app/capitales.json'));
    $capitales = collect(json_decode($json));

    $buscar = $request->input('buscar');

    if ($buscar) {
        $capitales = $capitales->filter(function ($capital) use ($buscar) {
            return stripos($capital->nombre, $buscar) !== false ||
                   stripos($capital->pais, $buscar) !== false;
        });
    }

    return view('capitales.index', compact('capitales'));
}



    public function show($id)
{
    $json = file_get_contents(storage_path('app/capitales.json'));
    $capitales = collect(json_decode($json));

    $capital = $capitales->firstWhere('id', $id);

    if (!$capital) {
        abort(404);
    }

    return view('capitales.show', compact('capital'));
}

}
