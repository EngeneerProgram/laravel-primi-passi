<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

A questo punto, iniziamo a prendere confidenza con le rotte e le views:
cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
*/



Route::get('/Home', function(){
    $hello = 'Ciao Laravel :)';
    $links = ['Home', 'Abaut', 'Contact'];
    return view('Home', compact('hello', 'links'));
    
});

Route::get('/Abaut', function(){
    $hello = 'Laravel è un framework PHP per applicazioni web. Rilasciato 
    nel 2011 come framework open source, Laravel si basa sul pattern MVC e
     presenta una sintassi espressiva ed elegante.Laravel semplifica alcune
      delle attività più comuni dei progetti web, come autenticazione,
       autorizzazione, routing, sessioni, caching. Possiede inoltre un 
       motore di templating integrato, Blade, un sistema di migrazione 
       database, integrazione con PHPUnit per il testing, e una propria
        interfaccia a riga di comando, chiamata Artisan CLI.';
    $links = ['Home', 'Abaut', 'Contact'];
    return view('Home', compact('hello', 'links'));
    
});
