<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
	public function page(Request $request)
	{
		$page_title = "Home Page";
		// dd($request->path());
		// dd is like var_dump and die

		if ($request->path() == 'about') {
			$page_title = "About Page";
		}
		return view('pages.static', ['page_title' => $page_title]);
	}
}
