<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

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

    public function champion ($id) 
    {
        $client = new Client();
        $res = $client->request('GET', 'https://global.api.pvp.net/api/lol/static-data/na/v1.2/champion/'. $id .'?champData=all&api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();
        return response($res);
    }


    public function saveItemSet()//$champName, $item1, $item2, $item3, $item4, $item5, $item6) 
    {

        DB::table('ItemSet')->insert(
                ['itemSetID' => "1", 'championID' => "2", 'item1ID' => "3", 'item2ID' => "4", 'item3ID' => "5", 'item4ID' => "6", 'item5ID' => "7", 'item6ID' => "8"]

            );



        /*DB::table('ItemSet')->insert(
                ['itemSetID' => "1", 'championID' => $champName, 'item1ID' => $item1, 'item2ID' => $item2, 'item3ID' => $item3, 'item4ID' => $item4, 'item5ID' => $item5, 'item6ID' => $item6]

            );*/

    }
    
}