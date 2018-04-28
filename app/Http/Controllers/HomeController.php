<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lesartivle;
use App\Commentaire;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use phpDocumentor\Reflection\Types\Array_;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles= Lesartivle::all();
        $ar=Array('Lesartivles'=>$articles);
        return view('koko.view',$ar);
    }
}
