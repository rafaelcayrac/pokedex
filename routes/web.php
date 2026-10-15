<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pokemon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil/{prenom}/{feeling?}', function (string $prenom, ?string $humeur = null) {

    //$user = $prenom;
    
    return view('bonjour', ['prenom' => $prenom,
'humeur' => $humeur]);
});

Route::get('/pokemons', function (){
    $pokemons = Pokemon::all();

    return view('pokemons', ['pokemons' => $pokemons]);
});
