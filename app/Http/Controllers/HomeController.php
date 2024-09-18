<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redriver;
use App\Models\Parking;

class HomeController extends Controller
{
     public function index()
        {
           $redriver = Redriver::find(1);
           $parking  = Parking::find(1);
              return view('home', compact('redriver', 'parking'));
        }
}
