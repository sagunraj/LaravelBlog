@extends("layouts.main")


@section("content")
<div class="container">
<div class="row">
<div class="panel panel-primary">
<div class="panel-heading">Manage User : {{$user->name}}</div>

<div class="panel-body">
<div class="row">
    <div class="col-sm-8">
     <div class="list-group">
       <div class="list-group-item"><label>Name :</label>{{$user->name}}</div>
       <div class="list-group-item"><label>Email :</label>{{$user->email}}</div>
       <div class="list-group-item"><label>Role :
       @if($user->role==1)
Home Stay Owner
@else

Guide
@endif
       
       </label>
       
       
       </div>
       <div class="list-group-item"><label>Created at :</label>{{$user->created_at->diffForHumans()}}</div>
       
     
     
     </div>
    </div>
    <div class="col-sm-4">
     <form method="post" action="{{route("admin.user.delete",$user->id)}}">
       {{csrf_field()}}
       {{method_field("DELETE")}}
     
      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">>Delete</button>
     </form>
    </div>
</div>

</div>

</div>

</div>
</div>


@endsection