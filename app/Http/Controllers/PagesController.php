<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    public function getIndex() {
        return view('pages/welcome');
    }

    public function getAbout() {
        $first = "Sagun";
        $last = "Lage";
        $full = $first." ".$last;
        $mail = "sagoonraj@gmail.com";
        $data = [];
        $data['email'] = $mail;
        $data['fullname'] = $full;
        return view('pages/about')->with('data',$data);
        //or return view('pages/about')->withFullname($full);
    }

    public function getContact(){
        return view('pages/contact');
    }
}
?>