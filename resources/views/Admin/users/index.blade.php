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
<table class="table table-responsive">
<thead>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Role</th>
<th>&nbsp;</th>
</thead>

<tbody>

@foreach($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>
@if($user->role==1)
Home Stay Owner
@else

Guide
@endif
<td>
<a href="{{route("admin.user.single",$user->id)}}" class="btn btn-primary">Manage User</a>

</td>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>
</div>

@endsection