@extends('layouts.main')

@section('content')
 <div class="container">
<h2>Search results for the keyword: {{$name}}</h2><br>
@foreach($homes as $home)
      <div class="head_title text-center">
                          <form method='GET' action="{{route("search")}}">
                            <input type="text" name="searchtext" placeholder="Search for your desired place here" class="form-control"/>
                            <input style="margin-top: 10px" type="submit" class="btn btn-primary"  value="Search"  />
                        </div>

        <div class="row">
                <div class="col-md-2">
                    <img src="{{asset($home->image)}}" class="img img-responsive">
                </div> 

                <div class="col-md-10 container">
                    <a href="{{route("home.index.user",$home->slug)}}"><h3>{{$home->name}}</h3>
                    <h5>
                            <p>{{strip_tags($home->description)}}{{strlen(strip_tags($home->description))>250?"...":""}}</p>
                    </h5>
                    
                </div>
            </div>
            <hr>
  
        <hr>   

        @endforeach 
</div>
@endsection