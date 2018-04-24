@extends('layouts.app')


@section('content')
    <div class="container">
{{$Lesartivles-> created_at}}
 <a href="{{ "/read/".$Lesartivles->user->id   }}">by:{{$Lesartivles->user->name   }}</a>
        <div class="form-group">
            <label for="usr">Title:</label>
         <p  class="rrrqQ" >  {{$Lesartivles->titre}}</p>
        </div>
        <div class="form-group">
            <label for="usr">body:</label>
            {!!$Lesartivles->body!!}
        </div>
         <div class="form-group">

<div class="form-group">

    @foreach($Lesartivles->commentaires as $c)
            <div class="comment-box">
    <span class="up-line"></span>
    <span class="circle"></span>
    <span class="down-line"></span>
    <div class="header">
      <div class="user-info">
         
        <h3 class="user-name"><a href="{{ "/profil/".$c->user->id   }}">{{$c->user->name   }}</a></h3>
      </div>
      
    </div>
    <div class="content">
      <p>{{$c->comment}}</p>
    </div>
    <footer></footer>
  </div>
 @endforeach
  </div>

           





             @auth

           <form action="/read/{{$Lesartivles->id}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="usr">COMMENTAIRE:</label>
                    <textarea rows="4" cols="50"  name="body" class="form-control">
      </textarea>
                </div>

                </br>
                <input type="submit" value="add comment" class="btn btn-primary"/>
            </form>
             @else

             <p align="center" style="margin-top: 1em"> <font size="6" face="sans-serif"> Please   <a href=" /login "> login</a>  if u wanna write a comment </font> </p>

       @endauth




 </div>
      
    </div>
@endsection