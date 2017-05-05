<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

/* Controller for Home page */

class HomeController extends Controller
{
    /* Returns the view home.blade.php */
    public function index () 
    {
        return view('home');
    }

    /* Returns a JSON containing information on a specific user in League of Legends */
    public function userInfo ($champion) {
        $client = new Client();
        $res = $client->request('GET', 'https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/'. $champion .'?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();  
        return response($res);
    }

    /* Function queries our database for all the item sets associated with a user in our system and returns a JSON */
    public function userSets ($champion) {
        $user = $champion;
        $itemSetsJSON = DB::select('select * from ItemSet where userName = ?', [$champion]);
        return $itemSetsJSON;
    }

    /* Function makes an API call to get the champion id for a specific champion in League of Legends. */
    public function getChampId($championId) {
        $client = new Client();
        $res = $client->request('GET', 'https://global.api.riotgames.com/api/lol/static-data/NA/v1.2/champion/'. $championId .'?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();  
        return response($res);
    }

    /* Function makes an API call to retrieve a JSON for the information on a League of Legends user's last ten games. */
    public function userGames ($id) {
        $client = new Client();
        $res = $client->request('GET', 'https://na.api.pvp.net/api/lol/NA/v1.3/game/by-summoner/'. $id .'/recent?api_key=RGAPI-22d91634-8797-414b-b49b-1b6e836e2c01');
        $res = $res->getBody();   
        return $res;  
    }

    /* Returns the view login.blade.php */
    public function auth ()
    {
        return view('login');
    }
}
