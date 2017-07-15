<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class AdminController extends Controller
{
     public function index(){
         $users=User::where("role","!=",0)->paginate(20);
      return view("Admin.users.index",compact("users"));
     }


     public function single($id){
         $user=User::findorfail($id);

         return view("Admin.users.single",compact("user"));
     }

     public function delete($id){
        
     $user=User::find($id);

     $user->delete();

     Session::flash("success","User Deleted successfully");

     return redirect()->route("admin.users.index");
     
    
     }



     
}
