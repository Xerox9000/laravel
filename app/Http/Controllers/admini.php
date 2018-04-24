<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lesartivle;
use App\Commentaire;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use phpDocumentor\Reflection\Types\Array_;
class admini extends Controller
{
    //
   public function __construct()
    {
        $this->middleware('auth', ['except' => ['view','read']] );
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

 public function read(Request $request ,$id)
    {
              if ($request->isMethod('post')){
            $ar= new Commentaire();
            $ar->comment=$request->input('body');
            $ar->lesartivle_id= $id;
            $ar->user_id=Auth::user()->id;
            $ar->save();
            // return redirect("view");
        }
          $articles=Lesartivle::find($id);
        $ar=Array('Lesartivles'=>$articles);
        return view("koko.read",$ar);
    }

public function profil($id)
    {

          $profi=User::find($id);
        $ar=Array('users'=>$profi);



        return view("koko.profil",$ar);

    }


public function aaX()
    {
             return view("koko.edit");
    }
    
}