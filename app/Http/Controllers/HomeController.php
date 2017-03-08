<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

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


        /*
        //BELOW IS FOR TESTING PURPOSES DO NOT REMOVE
        //KPC 3/7
        DB::table('ItemSet')->insert(
                ['userID' => 2, 'itemSetID' => "1", 'championID' => "2", 'item1ID' => "3", 'item2ID' => "4", 'item3ID' => "5", 'item4ID' => "6", 'item5ID' => "7", 'item6ID' => "8"]

            );
        */
    	return view('home', compact('res'));
    }
}
