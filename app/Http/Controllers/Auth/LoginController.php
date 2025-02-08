<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $title = "Connexion";
        return view('auth.login',compact(
            'title',
        ));
    }

    public function login(Request $request){
        $this->validate($request ,[
            'email'=>'required|email',
            'password'=>'required',
        ],
    [
        'password.required' => 'Le champ mot de passe est requis.',
    ]);
       $authenticate = auth()->attempt($request->only('email','password'));
       if (!$authenticate){
           return back()->with('login_error',"Les identifiants ne correspondent pas à nos enregistrements");
       }

       return redirect()->route('dashboard');
    }
}
