<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->namagedung);
        $keywords = $request->namagedung;

        $datas = Gedung::where('name', 'like', '%'.$keywords.'%')
                ->orWhere('address', 'like', '%'.$keywords.'%')
                ->orWhere('capacity', 'like', '%'.$keywords.'%')
                ->orWhere('city', 'like', '%'.$keywords.'%')
                ->get();
         

        return view('search-result', compact('datas'));
    }
}
