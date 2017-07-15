@extends("layouts.main")


@section("content")
<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 class="page-header text-center">
    Manage Homestay : {{$home->name}}
    </h1>    

    <div class="row">
    <div class="col-sm-8">
    
                          <form class="form-horizontal" method="POST" action="{{ route('home.user.update',$home->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      {{method_field("put")}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Name</label>

                       
                                <input id="name" type="name" class="form-control" name="name" value="{{$home->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>



                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class=" control-label">Image</label>

                            
                                <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" autofocus>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('phone_no') ? ' has-error' : '' }}">
                            <label for="phone_no" class="control-label">Phone No.</label>

                           
                                <input id="phone_no" type="text" class="form-control" name="phone_no" value="{{ $home->phone_no }}" required autofocus>

                                @if ($errors->has('phone_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                @endif
                          
                        </div>

                         <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="control-label">Location</label>

                         
                                <input id="location" type="text" class="form-control" name="location" value="{{ $home->location }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                     <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="location" class="control-label">Description</label>

                           
                                <textarea class="form-control" class="form-control" name="description">
                                    {{$home->description}}
                                </textarea>
                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            
                        </div>


                                
                        
                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary">
                                    Update 
                                </button>

                               
                           
                        </div>
                    </form>


    
    </div>
     <div class="col-sm-4">
         <img src="{{asset($home->image)}}" class="img img-responsive">
         <div class="well">
         <label>Url</label> : <a href="{{route("home.index.user",$home->slug)}}">{{route("home.index.user",$home->slug)}}</a>
         </div>


         <form method="post" action="{{route("home.user.delete",$home->id)}}">
         {{csrf_field()}}
         {{method_field("delete")}}

             
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>

         </form>
         
        

     </div>
    </div>
    </div>
</div>


</tbody>

</table>

</div>

</div>
</div>

@endsection