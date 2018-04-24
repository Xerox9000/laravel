
@extends('layouts.app')


@section('content')



    <div class="container">
        

<div class="row">
        @foreach($Lesartivles as $art)
            <div  class="column col-md-4">
    
    <!-- Post-->
    <div class="post-module hover">
      <!-- Thumbnail-->
      <div class="thumbnail">
        <div class="date">
          <div class="day">{{$art->created_at ->format('d') }}</div>
          <div class="month">{{$art->created_at ->format('m')}}</div>
        </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
      </div>
      <!-- Post Content-->
      <div class="post-content">
        
        <h1 class="title">{{$art->titre}}</h1>
      
        <p class="description"> {!! str_limit( $art->body, 180) !!}</p>
        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> {{$art->timestamps}} day ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> </a></span></div>
      </div>
    </div>
  </div>

  @endforeach
 
     </div>      

        <a href="add">Add new article</a>
    </div>
@endsection

