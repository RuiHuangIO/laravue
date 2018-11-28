<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class FrontendController extends Controller
{
	public function home()
	{
		return view('pages.home');
	}

	public function page(Request $request, $slug)
	// $slug correspond to the value being passed from routes
	{
		// dd($request->path());
		// dd is like var_dump and die
		$slug = $request->path();
		$page = Page::whereSlug($slug)->first();
		// camel case here is super weird. This taps the page model.
		return view('pages.static', compact('page'));
	}
}
