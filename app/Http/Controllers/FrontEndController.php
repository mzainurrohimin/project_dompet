<?php

namespace App\Http\Controllers;

use App\Eksklusif;
use App\WarnaDompet;
use App\Keunggulan;
use App\Logo;
use App\Emboss;
use App\Promo;
use App\Harga;
use App\Testimoni;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $logo = Logo::all();

        $eksklusif = Eksklusif::all();

        $warnadompet = WarnaDompet::all();

        $keunggulan = Keunggulan::all();

        $emboss = Emboss::all();

        $promo = Promo::first();

        $harga = Harga::all();

        $testimoni = Testimoni::all();

        return view('pages.frontend', compact('logo', 'eksklusif', 'warnadompet', 'keunggulan', 'emboss', 'promo', 'harga', 'testimoni'));



        // ->with([
        //     'items' => $items
        // ]);
    }
}
