<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class logoutcontroller extends Controller
{

   
    public function logout(Request $request) {
        echo "aaa";
        Auth::logout();
        echo "aaa";
        return redirect('/login');
      }

}
?>
