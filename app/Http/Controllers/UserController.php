<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

 //----------------------------------------------[ user Register view]-------------------------------------------------

  public function showView()
  {
      return view("register");
  }
  //----------------------------------------------[ user Register]-------------------------------------------------
  public function createUser(Request $request)
  {
     $request->validate([

      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required',
      'password' => 'required|confirmed|min:6',
      'country' => 'required',
     ]);

//create a new model
$user=new User();

     $user->prenom = $request->input('first_name');
     $user->nom =   $request->input('last_name');
     $user->email = $request->input('email');
     $user->telephone =  $request->input('phone');
     $user->password = bcrypt($request->input('password'));
     $user->pays = $request->input('country');
     $user->adresse = $request->input('address');
     $user->ville = $request->input('city');
     $user->code_postale =  $request->input('postal_code');
      $user->save();
 return back()->with('status',"Utilisateur Créer avec success");
  }


  //----------------------------------------------[ user Login view]-------------------------------------------------
  public function Index()
  {
      return view('login');
  }
  
  //----------------------------------------------[ user Login]-------------------------------------------------
  public function Login(Request $request)
  {
     $request->validate([
           "email" => "required",
           "password" => "required",
     ]);
      
     $credentials = $request->only('email', 'password');
     if (Auth::attempt($credentials)) {


      #currentUser
      //  $currentUser=User::where("email",$credentials["email"])->first();
      //     dd($currentUser->role);

       if(Auth::user()->role === "admin")
       {
        return redirect()->intended('showTableCourse')
        ->withSuccess("success",'Signed in ypu are an administrator');
       }
       return redirect()->intended('/')
       ->withSuccess("success",'Signed in you are an user');

     }

     return redirect("login")->with("error",'Login details are not valid');
 }

  //----------------------------------------------[user logOut function]-------------------------------------------------

  public function logOut()
  {
       Session::flush();

       Auth::logout();
   
        return redirect()->route('login_from');
  
  }

}
