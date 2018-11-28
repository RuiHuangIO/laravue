<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	// use camel case here
	public function scopeWhereSlug($query, $slug)
	{
		return $query->where('slug', $slug);
	}
}
