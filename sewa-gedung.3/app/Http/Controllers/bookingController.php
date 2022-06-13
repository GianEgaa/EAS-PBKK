<?php

namespace App\Http\Controllers;

use App\Models\insertDate;
use Illuminate\Http\Request;
use App\Models\Gedung;


class bookingController extends Controller
{
    function show(Request $request)
    {
        $id = $request->id;
        $data = Gedung::find($id);

        $disableDates = insertDate::select('reservationDate')->where('id_gedung', $id)
                        ->get();

        // dd($disableDates);

        $disableDatesArr = array();

        foreach ($disableDates as $disableDate) {
            array_push($disableDatesArr, $disableDate->reservationDate);
            // $disableDatesArr = (array) $disableDate->reservationDate;
        }

        // dd($disableDatesArr);

        // $disableDates->original

        // $disableDatesArr =(array) $disableDates;
        // dd($disableDatesArr);

        // dd($disableDatesArr-);

        // echo "'Hello' Is data type - ".gettype($disableDatesArr);
        return view('details-gedung', compact('data'), compact('disableDatesArr'));
    }
}
