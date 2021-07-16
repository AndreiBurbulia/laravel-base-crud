<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::All();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        /*
        $comic = new Comic;
        $comic->title = $request->title;
        $comic->series = $request->series;
        $comic->description = $request->description;
        $comic->price = $request->price;
        $comic->poster = $request->poster;
        $comic->on_sale_date = $request->on_sale_date;
        $comic->save();

        
        */

        $validated = $request->validate([
            'title' => 'required | max:255 | min:5',
            'series' => 'required | max:255',
            'description' => 'required',
            'price' => 'required | numeric',
            'poster' => 'required',
            'on_sale_date' => 'required | date',
        ]);
        
        /*
        il metodo "create" mi sostituisce il passagio sopra che io ho fatto manualmente e cioe inserire tutti i dati manualmente ($comic->title = $request->title; ....) e il metodo necessita di un array e questo array lo va a inserire e l'array lo otengo facendo la validazione perche se faccio un ddd($validated) vedro che ottengo un array con i dati che io ho validato quindi lui poi questi dati gli andra a inserire nel database 
        */

        Comic::create($validated);
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //ddd($comic);

        return view ('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        /*
        da guardare nella documentazione*/
        $validated = $request->validate([
            'title' => 'required | max:255 | min:5',
            'series' => 'required | max:255',
            'description' => 'required',
            'price' => 'required | numeric',
            'poster' => 'required',
            'on_sale_date' => 'required | date',
        ]);

        
        /*
        fa la stessa cosa del create ( vedi commento che spiega piu chiaro) solamente che in questo caso lo vai poi ad aggiornare quindi aggiorna i dati che io ho oppure che ho modificato
        */
        $comic->update($validated);
       
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return redirect()->route('comics.index');
    }
}