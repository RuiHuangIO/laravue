<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class FrontendController extends Controller
{
	public function page(Request $request)
	{
		// dd($request->path());
		// dd is like var_dump and die
		$slug = $request->path();
		$page = Page::where('slug', $slug)->get();
		dd($page);
		return view('pages.static', ['page_title' => $page_title]);
	}
}
