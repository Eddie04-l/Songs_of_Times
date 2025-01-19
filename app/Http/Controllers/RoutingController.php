<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoutingController extends Controller
{
    public function index(){
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $usertype = Auth()->user()->email;
            if ($usertype=='user') {
                return view('home');
            }
            elseif ($email=='contact@daytrit.com') {
                return view('admin');
            }
            else{
                return redirect()->back();
            }
        }
    }
}
