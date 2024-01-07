<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        ]);
        return redirect('/auth/home');

}

}
