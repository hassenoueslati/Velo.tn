<?php

namespace App\Http\Controllers;

use App\Models\evenement;
use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function showAllreservation(){
        $listreservation=reservation::all();

        return view ("Reservation.show",compact("listreservation"));
    }

    public function deleteReservation($id){
        $reservation=Reservation::find($id);
        $reservation->delete();
        return redirect("/reservation");
    }

    public function editReservation ($id){
        $reservation=Reservation::find($id);
        return view ('reservation.edit',compact('reservation'));
    }

    public function updateReservation(Request $request , $id){
        $reservation=Reservation::find($id);
        $reservation->dateDebut = $request->get('dateDebut');
        $reservation->dateFin = $request->get('dateFin');
        $reservation->user_id = $request->get('user_id');
        $reservation->evenement_id = $request->get('evenement_id');
        $reservation->description = $request->get('description');
        $reservation->update();
        return redirect('/reservation');
    }

    public function createReservation(){
        $listevenement = evenement::all();
        return view('reservation.create',compact("listevenement"));
    }
    public function saveReservation(Request $request){

        $reservation = new Reservation();
        $reservation->dateDebut = $request->get('dateDebut');
        $reservation->dateFin = $request->get('dateFin');
        $reservation->user_id = $request->get('user_id');
        $reservation->evenement_id = $request->get('evenement_id');
        $reservation->description = $request->get('description');
        $reservation->save();
        return redirect('/reservation');

    }
}
