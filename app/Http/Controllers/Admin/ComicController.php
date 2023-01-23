<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
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
        $comics = Comic::all();
        return view('index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'title'=> 'required|max:100',
            'series'=> 'required|max:100',
            'type'=> 'required|max:100',
            'price'=> 'required|max:5',
        ]);

        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->series = $data['series'];
        $new_comic->title = $data['title'];      
        $new_comic->thumb = $data['thumb'];
        $new_comic->type = $data['type'];
        $new_comic->price = $data['price'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->save();
        
        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {   
        $request->validate([
            'title'=> 'required|max:100',
            'series'=> 'required|max:100',
            'type'=> 'required|max:5',
            'price'=> 'required|max:5',
        ]);

        $data = $request->all();
        
        $comic->update($data);
        
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic-> delete();
        return redirect()->route('comics.index');
    }
}
