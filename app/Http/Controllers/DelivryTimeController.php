<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DlvrTime;
use Illuminate\Support\Facades\Validator;

class DelivryTimeController extends Controller
{
    //
        public function create(Request $request) {

           //validation check
            $validator = Validator::make($request->all(), [
                'delivery_time' => 'required',
                'city_id'       => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json('time of delivrey required !!!!');
            }
            //insert data to table
            DlvrTime::create([
                'delivery_time' => $request->delivery_time,
                'city_id' => $request->city_id,
            ]);
    
            return response()->json('we add your time succesfully');
    
        }
    }
