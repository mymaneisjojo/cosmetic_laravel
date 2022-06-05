<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Controller\CartService;
class ServiceController extends Controller
{
    public function Index(Request $req){
     
        $data = Service::orderBy('id', 'DESC')->get();
        $choose = Service::orderBy('summary', 'DESC')->get();
      
        return view('home.service', compact('data','choose'));

    }
}

