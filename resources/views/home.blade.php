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
</head>

<body>
<!-- Main Container -->
<div class="container" style="padding-left: 0; padding-right: 0;"> 
  <!-- Navigation -->
  <header>
  <h4 class="logo"><img src="{{asset('images/logo.png')}}" width="50" height="50" alt=""/> LEAGUE REPORT</h4>
    <nav>
      <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="/item">ITEM SET BUILD</a></li>
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <section class="hero" id="hero" style="background-image: url({{asset('images/wall1.jpg')}})">
<h2 class="hero_header">SUMMONER SEARCH</h2>
 <div class="input-group" style="margin: 0 auto">&nbsp;
   <!-- <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1"> -->
    <form method="GET" action="/">
        <input type="text" name="name" placeholder="Username"><br>
    </form>
 </div>
  </section>
  
  <h1 style="overflow: auto"> {{ $res }} </h1>

  <!-- About Section -->
  <section class="about" id="about">
    <h2 class="hidden">About</h2>
  </section>
</div>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2017 - <strong>LEAGUE REPORT</strong></div>
<!-- Main Container Ends -->
</body>
</html>
