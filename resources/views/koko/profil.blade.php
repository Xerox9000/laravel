@extends('layouts.app')

@section('content')



    <div class="container">
        


{{$users->name   }}
{{$users	->created_at   }}
<ul class="list-group">
 @foreach($users->lesarticles as $c)

  <li class="list-group-item"> <bold><a href="{{ "/read/".$c->id}}">{{$c->titre}}</a> </bold>   <span  style="float:right;">{{$c-> created_at   }} </span> </li>



 @endforeach
</ul>

    </div>
@endsection

