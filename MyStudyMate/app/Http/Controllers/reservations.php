<?php

namespace App\Http\Controllers;
use App\Models\reservations as ModelsReservations;
use Illuminate\Http\Request;

class reservations extends Controller
{
    public function select($id)
    {
        $emplois =ModelsReservations::where('id_local','=',$id)->get();
        return $emplois;
}
    public function create()
    {
        ModelsReservations::create([
        'id_local' =>$_POST['loc'],
        'jour' =>$_POST['jour'],
        'creneau_horaire' =>$_POST['heure'],
        ]);
        return redirect('chefDep');
}
public function delete($id)
    {
        ModelsReservations::where('id_reservation', $id)->delete();
}
}
