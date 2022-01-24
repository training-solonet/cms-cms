<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if ($role === "admin") {
            return redirect()->route('dataAdmin.index');
        } else {
            return redirect()->route('main');
        }
    }
}
