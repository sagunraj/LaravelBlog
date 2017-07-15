<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $id=Auth::user()->id;

    $homes=HomeModel::where("user_id",$id)->get();


    return view("home.index",compact("homes"));
        // return view('home');
    }


    public function getHome($slug){

        $home=HomeModel::where("slug",$slug)->first();

        if(!$home)
            abort(404);

        return view("pages.single",compact("home"));

    }

    public function search(Request $request){
        $homes=HomeModel::where(
            'location', 'LIKE', '%'.$request->searchtext.'%')->get();
     $name=$request->searchtext;
          
            return view("pages.search",compact("homes","name"));
    }


    public function all(){
       $homes=HomeModel::orderBy("created_at","desc")->paginate(20);

       return view("pages.all",compact("homes"));
    }


    public function about(){
        return view("pages.about");
    }
}
