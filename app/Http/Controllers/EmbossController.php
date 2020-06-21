<?php

namespace App\Http\Controllers;

use FILE;
use App\Emboss;
use App\Http\Requests\EmbossRequest;
use Illuminate\Http\Request;

class EmbossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Emboss::all();
        return view('emboss.index')->with([
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
        return view('emboss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmbossRequest $request)
    {
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store(
            'assets/gambar',
            'public'
        );

        Emboss::create($data);
        return redirect()->route('emboss.index');
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
        $items = Emboss::find($id);
        return view('emboss.edit')->with([
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
    public function update(EmbossRequest $request, $id)
    {
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store('assets/gambar', 'public');
        $items = Emboss::findOrFail($id);

        File::delete('storage/' . $items->gambar);

        $items->update($data);
        return redirect()->route('emboss.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emboss = Emboss::find($id);
        $emboss->delete();
        return redirect()->back();
    }
}
