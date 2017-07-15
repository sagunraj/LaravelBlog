<?php

namespace App\Http\Controllers;

use App\HomeModel;
class PagesController extends Controller {
    public function getIndex() {

    	$homes=HomeModel::orderBy("created_at","desc")->take(4)->get();
        return view('pages/welcome',compact("homes"));
    }


    public function getContact(){
        return view('pages/contact');
    }
}
?>