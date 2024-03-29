<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Professeur;
use App\Models\etudiant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\AssignOp\Concat;

class addEtudiant extends Controller
{
    public function allMember()
{
    $members = User::where('is_role', '!=', 1)->get();
    return $members;
}
    public function etudMember()
{
    $members = User::where('is_role', '=', 3)->get();
    return $members;
}
public function profMember()
{
    $members = User::where('is_role', '=', 2)->get();
    return $members;
}
public function isDelegue()
{
    $etud = Etudiant::where('id_Utilisateur', auth()->user()->id)->first();

    if ($etud) {
        $isDel = $etud->is_Delegue;
        return $isDel;
    }

    return false;
}



    public function create()
    {
    $validator=Validator::make($_POST, [
        'name' => ['required', 'string', 'max:255'],
        // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        // 'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $nom=$_POST['name'].' '.$_POST['prenom'];
    $name=str_replace(' ', '', $_POST['name']);
    $prenom=str_replace(' ', '', $_POST['prenom']);
        User::create([
            'name' => $nom,
            'email' => $name.'.'.$prenom."@etu.uae.ac.ma",
            // 'password' => Hash::make($_POST['password']),
            'is_role'=>$_POST['role'],
            'password' => '',
        ]);
        if($_POST['role']==3){
            etudiant::create([
        'CNE' => $_POST['cne'],
        'groupTp'=> $_POST['groupTP'],
        'is_Delegue'=> $_POST['deleg'],
        'id_Utilisateur'=> User::where('name', $nom)->value('id'),
        'id_Filiere'=> $_POST['filiere'],
        'id_Classe'=> $_POST['classe'],
    ]);
    User::where('name', $nom)->update(['password' => Hash::make($_POST['cne'])]);
}
        elseif($_POST['role']==2){
            Professeur::create([
        'MatriculeProf' => $_POST['matricule'],
        'id_Utilisateur' => User::where('name', $nom)->value('id'),
    ]);
       if($_POST['prof']==1){
        Professeur::where('MatriculeProf', $_POST['matricule'])->update(['is_RespoDepart' => true]);
       }
       elseif($_POST['prof']==2){
        Professeur::where('MatriculeProf', $_POST['matricule'])->update(['is_RespoFiliere' => true]);
       }
       User::where('name', $nom)->update(['password' => Hash::make($_POST['matricule'])]);
        }
        return redirect('/auth/home');

}
function findetud(){
    return etudiant::where('id_Utilisateur',auth()->user()->id)->first();
}
function findetude($id){
    return etudiant::where('id_Utilisateur',$id)->first();
}
function findetudeByFiliere($id){
    return etudiant::where('id_Filiere',$id)->get();
}
function finduser($id){
    return User::where('id',$id)->first();
}
function findprof($id){
    return Professeur::where('MatriculeProf',$id)->first();
}
function findprofe($id){
    return Professeur::where('id_Utilisateur',$id)->first();
}
}
