<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
	public function getIndex(){
		//return"home";
		return view('Pages/welcome');
	}
	public function getAbout(){
	//return"About me";
		$first="Pratibha";
		$last="Panta";
		$full=$first." ".$last;
		$email='pratibhapanta@sxc.edu.np';
		$data=[];
		$data['email']=$email;
		$data['fullname']=$full;
		//return view('Pages/about')->with("fullname", $full)->with("email", $email);
		return view('Pages/about')->withData($data);
	}
	public function getContact(){
	//return"hello contact page";
		return view('Pages.contact');
	}
	/*public function postContact(){

	}*/
}