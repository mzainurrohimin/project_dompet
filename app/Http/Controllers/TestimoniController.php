<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Testimoni;
use App\Http\Requests\TestimoniRequest;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Testimoni::all();
        return view('testimoni.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimoniRequest $request)
    {

        $data = $request->all();
        $data['testimoni'] = $request->file('testimoni')->store(
            'assets/gambar',
            'public'
        );

        Testimoni::create($data);
        return redirect()->route('testimoni.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Testimoni::find($id);
        return view('testimoni.edit')->with([
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimoniRequest $request, $id)
    {

        $data = $request->all();
        $data['testimoni'] = $request->file('testimoni')->store('assets/gambar', 'public');
        $items = Testimoni::findOrFail($id);

        File::delete('storage/' . $items->testimoni);

        $items->update($data);
        return redirect()->route('testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();
        return redirect()->back();
    }
}
