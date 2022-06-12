<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function showView()
   {
       $list=Cours::get();
       return view("welcome")->with('list', $list);
   }

}
