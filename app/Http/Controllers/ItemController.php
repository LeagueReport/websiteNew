<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ItemController extends Controller
{
    public function index () 
    {	
    	$client = new Client();
		$res = $client->request('GET', 'https://global.api.pvp.net/api/lol/static-data/na/v1.2/item?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
		$res = $res->getBody();
		$res = json_decode($res, true);
		//var_dump($res);

    	return view('item', compact('res'));
    }
}
