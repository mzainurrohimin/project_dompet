<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Keunggulan;
use App\Http\Requests\KeunggulanRequest;

class KeunggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Keunggulan::all();
        return view('keunggulan.index')->with([
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
        return view('keunggulan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeunggulanRequest $request)
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

        Keunggulan::create($data);
        return redirect()->route('keunggulan.index');
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
        $items = Keunggulan::find($id);
        return view('keunggulan.edit')->with([
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
    public function update(KeunggulanRequest $request, $id)
    {

        $data = $request->all();
        $data['gambar1'] = $request->file('gambar1')->store('assets/gambar', 'public');
        $data['gambar2'] = $request->file('gambar2')->store('assets/gambar', 'public');


        $items = Keunggulan::findOrFail($id);

        File::delete('storage/' . $items->gambar);


        $items->update($data);
        return redirect()->route('keunggulan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keunggulan = Keunggulan::find($id);
        $keunggulan->delete();
        return redirect()->back();
    }
}
