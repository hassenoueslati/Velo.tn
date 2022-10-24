<?php

namespace App\Http\Controllers;

use App\Models\evenement;
use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function showAllReservation(){
        $listreservation=reservation::all();

        return view ("Reservation.show",compact("listreservation"));
    }
    public function showAllReservationBack(){
        $listreservation=reservation::all();

        return view ("ReservationBack.index",compact("listreservation"));
    }


    public function deleteReservation($id){
        $reservation=Reservation::find($id);
        $reservation->delete();
        return redirect("/reservation");
    }
    public function deleteReservationBack($id){
        $reservation=Reservation::find($id);
        $reservation->delete();
        return redirect("/ReservationBack");
    }

    public function editReservation ($id){
        $reservation=Reservation::find($id);
        return view ('reservation.edit',compact('reservation'));
    }

    public function updateReservation(Request $request , $id){
        $reservation=Reservation::find($id);
        $reservation->dateDebut = $request->get('dateDebut');
        $reservation->dateFin = $request->get('dateFin');
        $reservation->description = $request->get('description');
        $reservation->update();
        return redirect('/reservation');
    }

    public function createReservation(){
        $listevenement = evenement::all();
        return view('reservation.create',compact("listevenement"));
    }
    public function saveReservation(Request $request){

        $data = $request->validate([
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'evenement_id' => 'required',
            'description' => 'required | min:10'
        ]);

        auth()->user()->reservations()->create($data);

        $reservation = new Reservation();
        $reservation->dateDebut = $request->get('dateDebut');
        $reservation->dateFin = $request->get('dateFin');
        $reservation->user_id = auth()->user()->id;
        $reservation->evenement_id = $request->get('evenement_id');
        $reservation->description = $request->get('description');
        $reservation->save();
        return redirect('/reservation');

    }
}
