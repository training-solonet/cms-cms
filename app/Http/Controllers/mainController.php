<?php

namespace App\Http\Controllers;

use App\Models\dataAdmin;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
        $data = dataAdmin::simplePaginate(6);
        return view('main', compact('data'));
    }
}
