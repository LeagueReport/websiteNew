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
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <section class="hero" id="hero" style="background-image: url({{asset('images/wall1.jpg')}})">
<h2 class="hero_header">SUMMONER SEARCH</h2>
 <div class="input-group" style="margin: 0 auto">&nbsp;
   <!-- <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1"> -->
    <form data-ng-submit="getUserInfo()">
        <input type="text" data-ng-model="champion" placeholder="Username"><br>
    </form>
 </div>

  </section>
  
  <div id="setsColumn" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <div ng-repeat="(key, value) in sets.data"> 
      <h1> Item Set: {[ key ]} </h1>
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/champion/{[value.championID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item1ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item2ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item3ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item4ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item5ID]}.png">
      <img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.item6ID]}.png">
    </div>
  </div>

  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    {[ games ]}
  </div>
  
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  </div>
  <!-- Copyrights Section -->
<!-- Main Container Ends -->
</div>
  <div class="copyright">&copy;2017 - <strong>LEAGUE REPORT</strong></div>
</body>
</html>
