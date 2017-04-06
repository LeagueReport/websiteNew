<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index () 
    {
        return view('home');
    }

    public function userInfo ($champion) {
        $client = new Client();
        $res = $client->request('GET', 'https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/'. $champion .'?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();  
        return response($res);
    }

    public function userSets ($champion) {
        $user = $champion;
        $itemSetsJSON = DB::select('select * from ItemSet where userName = ?', [$champion]);
        return $itemSetsJSON;
    }

    public function getChampId($championId) {
        $client = new Client();
        $res = $client->request('GET', 'https://global.api.riotgames.com/api/lol/static-data/NA/v1.2/champion/'. $championId .'?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();  
        return response($res);
    }

      /*$res = json_decode($res);

        $id = $res[$champion];
        $id = $id['id']; */
        /*https://na.api.riotgames.com/api/lol/NA/v1.3/game/by-summoner/{summonerID}/recent?api_key=RGAPI-3a3ee533-86cd-4a16-b7ad-820384e4f594*/

         /*   */

    public function userGames ($id) {
        $client = new Client();
        $res = $client->request('GET', 'https://na.api.pvp.net/api/lol/NA/v1.3/game/by-summoner/'. $id .'/recent?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();   
        return $res;  
    }

    public function auth ()
    {
        return view('login');
    }
}
