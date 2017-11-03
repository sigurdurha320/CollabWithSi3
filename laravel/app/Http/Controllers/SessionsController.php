<?php

namespace App\Http\Controllers;



class HomePage extends Controller
{
	
	public function create()
	{
		return view('sessions.create');
	}
	public function store()
	{
		if (Auth::attempt(Input::only('username','password')))
		{
			return Auth::user();
		}
		else
		{
			return "failed";
		}
	}
}