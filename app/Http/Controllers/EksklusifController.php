<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Eksklusif;
use App\Http\Requests\EksklusifRequest;

class EksklusifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Eksklusif::all();
        return view('eksklusif.index')->with([
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
        return view('eksklusif.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EksklusifRequest $request)
    {

        $data = $request->all();
        $data['gambar1'] = $request->file('gambar1')->store(
            'assets/gambar',
            'public'
        );
        $data['gambar2'] = $request->file('gambar2')->store(
            'assets/gambar',
            'public'
        );
        $data['gambar3'] = $request->file('gambar3')->store(
            'assets/gambar',
            'public'
        );

        Eksklusif::create($data);
        return redirect()->route('eksklusif.index');
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
        $items = Eksklusif::find($id);
        return view('eksklusif.edit')->with([
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
    public function update(EksklusifRequest $request, $id)
    {

        $data = $request->all();
        $data['gambar1'] = $request->file('gambar1')->store('assets/gambar', 'public');
        $data['gambar2'] = $request->file('gambar2')->store('assets/gambar', 'public');
        $data['gambar3'] = $request->file('gambar3')->store('assets/gambar', 'public');
        $items = Eksklusif::findOrFail($id);

        File::delete('storage/' . $items->gambar1);
        File::delete('storage/' . $items->gambar2);
        File::delete('storage/' . $items->gambar3);

        $items->update($data);
        return redirect()->route('eksklusif.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eksklusif = Eksklusif::find($id);
        $eksklusif->delete();
        return redirect()->back();
    }
}
