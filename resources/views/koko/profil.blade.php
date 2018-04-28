@extends('layouts.app')

@section('content')



    <div class="container">
        


{{$users->name   }}
{{$users	->created_at   }}

 @foreach($users->lesarticles as $c)

{{$c-> titre   }}
 @endforeach


    </div>
@endsection

