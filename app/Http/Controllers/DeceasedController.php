<?php

namespace App\Http\Controllers;
use App\models\deceased;
use Illuminate\Http\Request;

class DeceasedController extends Controller
{
    //
    public function index(){
        $list_deceased = deceased::all();
        return view('website.deceased',['list_deceased' => $list_deceased]);
    }

}
