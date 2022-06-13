<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insertGedung;
use App\Models\Gedung;

class gedungInsertController extends Controller
{
    public function uploadGedung(Request $request){
        $datas = insertGedung::create([
            'name' => $request->name,
            'address' => $request->address,
            'capacity' => $request->capacity,
            'city' => $request->city,
            'description' => $request->description,
            'image' => base64_encode($request->image),
            'price' => $request->price,
            'contact' => $request->contact,
        ]);

        // dd(base64_encode($request->image), $request->image, base64_decode($datas->image) );
        
        $datas = Gedung::all();
        return view('managerHome', compact('datas'));
    }
}
