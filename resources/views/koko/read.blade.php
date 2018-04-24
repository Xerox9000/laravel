@extends('layouts.app')


@section('content')
    <div class="container">
{{$Lesartivles-> created_at}}
 <a href="{{ "/read/".$Lesartivles->user->id   }}">by:{{$Lesartivles->user->name   }}</a>
        <div class="form-group">
            <label for="usr">Title:</label>
            {{$Lesartivles->titre}}
        </div>
        <div class="form-group">
            <label for="usr">body:</label>
            {!!$Lesartivles->body!!}
        </div>
         <div class="form-group">


  <div class="form-group">

            <table class="table table-striped">
                <tr>
                    <td> comments</td>
                </tr>
 
                 @foreach($Lesartivles->commentaires as $c)
                    <tr>
                        <td> <a href="{{ "/read/".$c->user->id   }}">{{$c->user->name   }}</a>  {{$c->comment}}  
                        </td>
                        
                    </tr>
                @endforeach



            </table>
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
      
 </div>
      
    </div>
@endsection