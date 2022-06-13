<?php

namespace App\Http\Controllers;

use App\Models\insertDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gedung;
use App\Http\Controllers\bookingController;
use Carbon\CarbonPeriod;
use Illuminate\support\MessageBag;
use Illuminate\Support\Facades\Redirect;

class dateInsertController extends Controller
{
    public function uploadDate(Request $request){
        // $post = bookingController::find($request);
        $from = date($request->dateStart);
        $to = date($request->dateEnd);

        $period = CarbonPeriod::create($from, $to);

        foreach ($period as $date) {
            $datas = insertDate::create([
                'reservationDate' => $date,
                'id_gedung' => $request->id,
                'user_id' => Auth::id(),
            ]);
        }

        // dd($period);

        $disableDates = insertDate::select('reservationDate', 'id_gedung')
                        ->get();

        // dd($disableDates);

        $disableDatesArr = array();

        foreach ($disableDates as $disableDate) {
            array_push($disableDatesArr, $disableDate->reservationDate);
            // $disableDatesArr = (array) $disableDate->reservationDate;
        }
        
        $disableDatesArr = (array) ($disableDatesArr);
        // echo "'Hello' Is data type - ".gettype($disableDatesArr);
        
        return redirect("booking/".$request->id);
        // return redirect('home');
    }
}

