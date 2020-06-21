<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\WarnaDompet;
use App\Http\Requests\WarnaDompetRequest;

class WarnaDompetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = WarnaDompet::all();
        return view('warnadompet.index')->with([
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
        return view('warnadompet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WarnaDompetRequest $request)
    {

        $data = $request->all();
        $data['gambar1'] = $request->file('gambar1')->store(
            'assets/gambar',
            'public'
        );
        $data = $request->all();
        $data['gambar2'] = $request->file('gambar2')->store(
            'assets/gambar',
            'public'
        );

        WarnaDompet::create($data);
        return redirect()->route('warnadompet.index');
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
        $items = WarnaDompet::find($id);
        return view('warnadompet.edit')->with([
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
    public function update(WarnaDompetRequest $request, $id)
    {

        $data = $request->all();
        $data['gambar1'] = $request->file('gambar1')->store('assets/gambar', 'public');
        $data['gambar2'] = $request->file('gambar2')->store('assets/gambar', 'public');


        $items = WarnaDompet::findOrFail($id);

        File::delete('storage/' . $items->gambar);


        $items->update($data);
        return redirect()->route('warnadompet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warnadompet = WarnaDompet::find($id);
        $warnadompet->delete();
        return redirect()->back();
    }
}
