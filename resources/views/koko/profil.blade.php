@extends('layouts.app')

@section('content')



    <div class="container">
        
<div class="form-group">
            <label class="rrrqQ" for="usr">{{$users->name   }}</label>
         <p   >Membre since :   {{$users	->created_at   }}</p>
        </div>

<ul class="list-group">
LETTRES :
	</ul>

<ul class="list-group">
 @foreach($users->lesarticles as $c)

  <li class="list-group-item"> <bold><a class="rrrqQ" href="{{ "/read/".$c->id}}">{{$c->titre}}</a> </bold>   <span  style="float:right;">{{$c-> created_at   }} </span> </li>



 @endforeach
</ul>

    </div>
@endsection

