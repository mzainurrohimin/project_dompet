<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Logo;
use App\Http\Requests\LogoRequest;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Logo::all();
        return view('logo.index')->with([
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
        return view('logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogoRequest $request)
    {

        $data = $request->all();
        $data['logo'] = $request->file('logo')->store(
            'assets/gambar',
            'public'
        );

        Logo::create($data);
        return redirect()->route('logo.index');
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
        $items = Logo::find($id);
        return view('logo.edit')->with([
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
    public function update(LogoRequest $request, $id)
    {

        $data = $request->all();
        $data['logo'] = $request->file('logo')->store('assets/gambar', 'public');
        $items = Logo::findOrFail($id);

        File::delete('storage/' . $items->logo);

        $items->update($data);
        return redirect()->route('logo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Logo::find($id);
        $status->delete();
        return redirect()->back();
    }
}
