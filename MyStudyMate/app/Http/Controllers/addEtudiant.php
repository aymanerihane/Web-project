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

    public function create()
    {

    $validator=Validator::make($_POST, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

        User::create([
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => Hash::make($_POST['password']),
            'is_role'=>$_POST['role'],
            'is_delegue'=>$_POST['deleg'],
        ]);
        if($_POST['role']==1){
            etudiant::create([
        'CNE' => $_POST['name'],
        'groupTp'=> $_POST['name'],
        'is_Delegue'=> $_POST['deleg'],
        'idUtilisateur'=> $_POST['name'],
        'idFiliere'=> $_POST['name'],
        'id_Classe'=> $_POST['name'],
    ]);
}
        elseif($_POST['role']==2){
            
        }
        return redirect('/auth/home');

}
}
