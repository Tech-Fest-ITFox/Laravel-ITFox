<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function showHomePage()
    {
        if(Auth::check()) {
            $user = Auth::user();
            $userRole = null;
            foreach ($user->roles as $role) {
                if($role->role == 'Student' || $role->role == 'Teacher') {
                    $userRole = $role->role;
                }
            }

            if($userRole == null) {
                $userRole = 'Admin';
            }

            return view('home', ['role' => $userRole]);
        } else {

            return view('welcome');
        }
    }
}
