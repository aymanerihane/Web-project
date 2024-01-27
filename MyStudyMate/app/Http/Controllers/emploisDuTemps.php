<?php
namespace App\Http\Controllers;
use App\Models\EmploisDuTemps as ModelsEmploisDuTemps;

use Illuminate\Http\Request;

class emploisDuTemps extends Controller
{
    public function addEmploi()
{
    // Check if a record already exists for the same 'jour' and 'creneau_horaire'
    $existingEmploi = ModelsEmploisDuTemps::where('jour', $_POST['jour'])
        ->where('creneau_horaire', $_POST['heure'])
        ->first();
        if ($existingEmploi) {
        $existingEmploi = ModelsEmploisDuTemps::where('jour', $_POST['jour'])
            ->where('creneau_horaire', $_POST['heure'])
            ->update([
                'activite' => $_POST['act'],
                'id_module' => $_POST['module'],
                'id_filiere' => $_POST['filiere'],
                'id_local' => $_POST['local'],
            ]);
    } else {
        // Create a new record
        ModelsEmploisDuTemps::create([
            'jour' => $_POST['jour'],
            'creneau_horaire' => $_POST['heure'],
            'activite' => $_POST['act'],
            'id_module' => $_POST['module'],
            'id_filiere' => $_POST['filiere'],
            'id_local' => $_POST['local'],
        ]);
    }

    return redirect('/auth/home');
}
    public function showEmploi()
    {
        $emplois =ModelsEmploisDuTemps::all();
    return $emplois;
}
    public function select($id)
    {
        $emplois =ModelsEmploisDuTemps::where('id_filiere','=',$id)->get();
        return $emplois;
}
    public function etudemploi($id)
    {
        $emplois =ModelsEmploisDuTemps::where('id_filiere','=',$id)->get();
        return $emplois;
}
public function delete($id){
    ModelsEmploisDuTemps::where('id_emploi', $id)->delete();
}
}
