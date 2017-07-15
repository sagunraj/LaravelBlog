@extends("layouts.main")


@section("content")
<div class="container">
<div class="row">
@if(Session::has("success"))
<div class="col-sm-12">
<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> {{Session::get("success")}}
</div>

</div>

@endif
<div class="col-md-12">
<a href="{{route("home.add")}}" class="btn btn-primary">Add a new Home stay</a>
<table class="table table-responsive">
<thead>
<th>#</th>
<th>Name</th>
<th>Location</th>
<th>&nbsp;</th>
</thead>

<tbody>

@foreach($homes as $home)
<tr>
<td>{{$home->id}}</td>
<td>{{$home->name}}</td>
<td>{{$home->location}}</td>
<td><a href="{{route("home.user.edit",$home->id)}}" class="btn btn-primary">
Manage Home
</a></td>
</tr>

@endforeach

</tbody>

</table>

</div>

</div>
</div>

@endsection