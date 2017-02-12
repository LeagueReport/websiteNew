<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index () 
    {
    	$name = request('name');

    	if ($name == NULL) 
    	{
    		$res = '';
    		return view('home', compact('res'));
    	}

		$client = new Client();
		$res = $client->request('GET', 'https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/'. $name .'?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');

        $res = $res->getBody();

    	return view('home', compact('res'));
    }
}
