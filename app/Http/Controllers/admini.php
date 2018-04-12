<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesartivle;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class admini extends Controller
{
    //

   public function __construct()
    {
        $this->middleware('auth');
    }

    public function Addarticle(Request $request){

    	  if ($request->isMethod('post')){
            $ar= new Lesartivle();
            $ar->titre=$request->input('title');
            $ar->body=$request->input('body');
            $ar->user_id=Auth::user()->id;
            $ar->save();
            return redirect('view');
        }
        return view('koko.AddArticle');
    }

    public function view()
    {

    	  $articles= Lesartivle::all();
        $ar=Array('Lesartivles'=>$articles);
        return view('koko.view',$ar);
    }




     public  function  mehdi(Request $request ,$id){
        if ($request->isMethod('post')){
            $ar= new Comment();
            $ar->comment=$request->input('body');
            $ar->article_id= $id;
            $ar->save();
            // return redirect("view");
        }
        $article=Article::find($id);
        $ar=Array('article'=>$article);
        return view("manage.read",$ar );
    } 
}
