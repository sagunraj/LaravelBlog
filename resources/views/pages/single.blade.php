@extends("layouts.main")


@section("content")

<div class="container">
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
	<h2 class="text-center">{{$home->name}}</h2>
	<img class="img img-responsive" src="{{asset($home->image)}}">
    <div style="margin-top:1%; margin-bottom:1%;">Owner :  <span class="label label-primary"> {{$home->user->name}}</span></div>

     <p>{{nl2br($home->description)}}</p>
	</div>


</div>
</div>

@endsection