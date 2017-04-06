<!DOCTYPE html>

<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> League Report </title>
    
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('css/SummonerSearch.css')}}"/>   

  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/> 

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>

  <script src="{!! url('js/controllers/module.js') !!}" type="text/javascript"></script>
</head>

<body data-ng-app="myApp" data-ng-controller="HomeController">
<!-- Main Container -->
<div class="container" style="padding-left: 0; padding-right: 0;"> 
  <!-- Navigation -->
  <header>
  <h4 class="logo"><img src="{{asset('images/logo.png')}}" width="50" height="50" alt=""/> LEAGUE REPORT</h4>
    <nav>
      <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="/item">ITEM SET BUILD</a></li>
        <li><a href="/news">NEWS</a></li>
        <li><a href="/login">LOGIN</a></li>
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <section class="hero" id="hero" style="margin-bottom: 10px;background-image: url({{asset('images/wall1.jpg')}})">
<h2 class="hero_header">SUMMONER SEARCH</h2>
 <div class="input-group" style="margin: 0 auto">&nbsp;
   <!-- <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1"> -->
    <form data-ng-submit="getUserInfo()">
        <input type="text" data-ng-model="champion" placeholder="Username"><br>
    </form>
 </div>

  </section>

    <div id="setsColumn" class="col-xs-12 col-sm-4 col-md-4 col-lg-4
    ">
    <div style="display: block">

    <h3> {[ info.name ]} </h3> <br>

    <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/profileicon/{[ info.profileIconId]}.png">

    </div>

    <h2> <strong> User Item Sets </strong> </h2>


    <div class="gameMatch" ng-repeat="(key, value) in sets.data" style="width: 100%; background-color: #D3D3D3;"> 
      <h3 style="margin-top: 0"> Item Set: {[ key ]} </h3>
      <div class="gameMatchImages" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <img id ="gameChamp" src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/champion/{[value.championID]}.png">
      </div>

      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

      </div>
      
      <div class="gameMatchImages" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">  
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item1ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item2ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item3ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item4ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item5ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item6ID]}.png">
      </div>
    </div>
  </div>

    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

  <h2> <strong> Won Games </strong> </h2>

 <div class="gameMatch" style="background-color: #00cc66" data-ng-repeat="game in games" data-ng-show="game.stats.win">

      <div class="gameMatchImages" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <img id ="gameChamp" src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/champion/{[game.championId]}.png">
      </div>

      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">  
        <h5> <strong> Game Type: {[ game.subType ]} <strong> </h5>
      
      <p style="color: green" data-ng-show="game.stats.win"> Game Won <p>
      <p style="color: red" data-ng-show="!game.stats.win"> Game Lost <p>

      <p id="kda"> Kill/Death/Assist: 
      <span data-ng-show="game.stats.championsKilled">
      {[ game.stats.championsKilled ]}
      </span>
      <span data-ng-show="!game.stats.championsKilled">
      0
      </span>/
      <span data-ng-show="game.stats.numDeaths">
      {[ game.stats.numDeaths ]}
      </span>
      <span data-ng-show="!game.stats.numDeaths">
      0
      </span>/
      <span data-ng-show="game.stats.assists">
      {[ game.stats.assists ]}
      </span>
      <span data-ng-show="!game.stats.assists">
      0
      </span>
      </p>

      Minions Killed: 
      <span data-ng-show="game.stats.cs"> {[ game.stats.cs ]} </span> 
      <span data-ng-show="!game.stats.cs"> 0 </span>
      </div>

      <div class="gameMatchImages" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">  
      <img data-ng-show="game.stats.item0" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item0]}.png"> 
      <img data-ng-show="game.stats.item1" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item1]}.png">
      <img data-ng-show="game.stats.item2" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item2]}.png">
      <img data-ng-show="game.stats.item3" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item3]}.png">
      <img data-ng-show="game.stats.item4" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item4]}.png">
      <img data-ng-show="game.stats.item5" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item5]}.png">
      <img data-ng-show="game.stats.item6" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item6]}.png">
      </div>

    </div>
  </div>

  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

  <h2> <strong> Lost Games </strong> </h2>

    <div class="gameMatch" style="background-color: #e2b6b3" data-ng-repeat="game in games" data-ng-show="!game.stats.win">

      <div class="gameMatchImages" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <img id ="gameChamp" src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/champion/{[game.championId]}.png">
      </div>

      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">  
        <h5> <strong> Game Type: {[ game.subType ]} <strong> </h5>
      
      <p style="color: green" data-ng-show="game.stats.win"> Game Won <p>
      <p style="color: red" data-ng-show="!game.stats.win"> Game Lost <p>

      <p id="kda"> Kill/Death/Assist: 
      <span data-ng-show="game.stats.championsKilled">
      {[ game.stats.championsKilled ]}
      </span>
      <span data-ng-show="!game.stats.championsKilled">
      0
      </span>/
      <span data-ng-show="game.stats.numDeaths">
      {[ game.stats.numDeaths ]}
      </span>
      <span data-ng-show="!game.stats.numDeaths">
      0
      </span>/
      <span data-ng-show="game.stats.assists">
      {[ game.stats.assists ]}
      </span>
      <span data-ng-show="!game.stats.assists">
      0
      </span>
      </p>

      Minions Killed: 
      <span data-ng-show="game.stats.cs"> {[ game.stats.cs ]} </span> 
      <span data-ng-show="!game.stats.cs"> 0 </span>
      </div>

      <div class="gameMatchImages" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">  
      <img data-ng-show="game.stats.item0" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item0]}.png"> 
      <img data-ng-show="game.stats.item1" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item1]}.png">
      <img data-ng-show="game.stats.item2" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item2]}.png">
      <img data-ng-show="game.stats.item3" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item3]}.png">
      <img data-ng-show="game.stats.item4" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item4]}.png">
      <img data-ng-show="game.stats.item5" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item5]}.png">
      <img data-ng-show="game.stats.item6" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[game.stats.item6]}.png">
      </div>

    </div>

    
    
  </div>
  
  <!-- Copyrights Section -->
<!-- Main Container Ends -->
</div>
  <div class="copyright">&copy;2017 - <strong>LEAGUE REPORT</strong></div>
</body>
</html>
