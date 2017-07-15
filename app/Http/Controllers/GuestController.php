<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;
use Auth;
use Session;
use Storage;

class GuestController extends Controller
{
    public function index(){
       $id=Auth::User()->id;


       $homes=HomeModel::where("user_id",$id)->get();
       return view("home.index",compact("homes"));
    }


    public function add(){
        return view("home.add");
    }

    public function store(Request $request){

        $this->validate($request,[
        "name"=>"required|max:255",
        "slug"=>"requried|max:255",
        "phone_no"=>"required|max:255",
        "location"=>"required|max:255",
        "description"=>"required",
        "image"=>"required|mimes:jpeg,jpg,png"
        ]);
  

        $file=$request->image;
        $id=uniqid(true).".".$file->getClientOriginalExtension();
        $path=public_path()."/images/post/";
         $dbpath="images/post/".$id;
        $request->file("image")->move($path,$id);

        
     
        $home=new HomeModel();
        $home->name=$request->name;
        $home->slug=uniqid(true);
        $home->phone_no=$request->phone_no;
        $home->location=$request->location;
        $home->description=$request->description;
        
        $home->image=$dbpath;

        $home->user_id=Auth::user()->id;
       
       $home->save();
       Session::flash("success","A new Home Has been added");


   return redirect()->route("home.user.index");

    }


    public function edit($id){
    $home=HomeModel::findorfail($id);

    if(Auth::user()->id!=$home->user->id)
    abort(404);

    return view("home.edit",compact("home"));





    }



    public function update(Request $request,$id){
     $this->validate($request,[
        "name"=>"required|max:255",
        "slug"=>"requried|max:255",
        "phone_no"=>"required|max:255",
        "location"=>"required|max:255",
        "description"=>"required",
        "image"=>"nullable|mimes:jpeg,jpg,png"
        ]);

     $home=HomeModel::findorfail($id);
    if(Auth::user()->id!=$home->user->id)
        abort(403);


        $home->name=$request->name;
        $home->phone_no=$request->phone_no;
        $home->location=$request->location;
        $home->description=$request->description;
        
     

       if($request->hasFile("image")){
       $file=$request->image;
       $oldpath=public_path()."/".$post->image;

       if(file_exists($oldpath))
        unlink($oldpath);

        $id=uniqid(true).".".$file->getClientOriginalExtension();
        $path=public_path()."/images/post/";
         $dbpath="images/post/".$id;
        $request->file("image")->move($path,$id);
          $home->image=$dbpath;

       }
       
       $home->save();
       Session::flash("success","Your Home has been updated");


   return redirect()->route("home.user.index");


    }


    public function delete($id){
       $home=HomeModel::findorfail($id);

       $file=public_path()."/".$home->image;

       if(file_exists($file))
        unlink($file);

    $home->delete();
      Session::flash("success","Company was deleted");

      return redirect()->route("home.user.index");

    }
}
