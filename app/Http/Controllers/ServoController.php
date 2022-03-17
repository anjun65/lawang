<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServoControl;
use App\Models\ServoRecord;

class ServoController extends Controller
{
    public function store()
    {
        $item = ServoControl::findorFail(1);

        if ($item->servo == 1){
            return redirect()->back()->with('error', 'Pencet sekali aja'); 
        } else {
            $item->update(["servo" => 1]);
            $record = ServoRecord::create();
            return redirect()->back()->with('success', 'Berhasil membuka'); 
        }
        
        
    }

    public function shutdown(Request $request)
    {

        if ($request->auth == "Benar")
        {
            $item = ServoControl::findorFail(1);
            $item->update(["servo" => 0]);
            return 'OK';
        } else {
            return 'Not OK';
        }
        
    }

    public function get()
    {

        $item = ServoControl::findorFail(1);
        
        return $item->servo;
        
    }
}
