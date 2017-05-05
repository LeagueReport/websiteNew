<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* Controller for News Page */

class NewsController extends Controller
{
	/* Returns the view news.blade.php */
    public function display()
    {
    	return view ('/news');
    }
}
