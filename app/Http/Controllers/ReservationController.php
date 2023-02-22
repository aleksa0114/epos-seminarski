<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ReservationResource::collection(Reservation::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //post
    {
        $validator = Validator::make($request->all(), [
            'check_in_date' => 'required|string',
            'check_out_date' => 'required|string',
            'room_id' => 'required|integer',
            'user_id' => 'required|integer',
 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
       Reservation::create([
            'check_in_date' => $request->check_in_date, 
            'check_out_date' => $request->check_out_date, 
            'room_id' => $request->room_id,
            'user_id' => $request->user_id, 
        ]);
       
        return response()->json(['Objekat je  kreiran']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)  //PUT
    {
        $validator = Validator::make($request->all(), [
            'check_in_date' => 'required|string',
            'check_out_date' => 'required|string',
            'room_id' => 'required|integer',
            'user_id' => 'required|integer',
 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        
        $i = Reservation::find($id);
        if($i){
            $i->check_in_date=$request->check_in_date;
            $i->check_out_date=$request->check_out_date;
            $i->room_id=$request->room_id;
            $i->user_id=$request->user_id;

            $i->save();
            return response()->json( ["Uspesno izmenjeno!",$i]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //DELETE
    {
        $i = Reservation::find($id);
        $i->delete();
        return response()->json( ["Uspesno obirsano!",$i]);
    }
}
