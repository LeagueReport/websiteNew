<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ItemController extends Controller
{
    public function index () 
    {	
    	return view('item');
    }

    public function items () 
    {
        $client = new Client();
        $res = $client->request('GET', 'https://global.api.pvp.net/api/lol/static-data/na/v1.2/item?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();
        return response($res);
    }

    public function item ($id) 
    {
    	$client = new Client();
        $res = $client->request('GET', 'https://global.api.pvp.net/api/lol/static-data/na/v1.2/item/'. $id .'?itemData=all&api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();
        return response($res);
    }

    public function champions () 
    {
        $client = new Client();
        $res = $client->request('GET', 'https://global.api.pvp.net/api/lol/static-data/na/v1.2/champion?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();
        return response($res);
    }
}
