<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('pages')->insert([
			[
				'title' => 'About',
				'slug' => 'about',
				'content' => 'About page'
			],
			[
				'title' => 'Blog',
				'slug' => 'blog',
				'content' => 'Blog page'
			],
			[
				'title' => 'Contact',
				'slug' => 'contact',
				'content' => 'Contact page'
			]
		]);
	}
}
