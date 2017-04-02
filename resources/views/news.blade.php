<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title> League Report News</title>
    
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
        <li><a href="/news">NEWS</a></li>
      </ul>
    </nav>
  </header>
  <!--News Section -->
<section class="news" id="news" style="background-image: url({{asset('images/wall1.jpg')}})">
 <form action="http://na.leagueoflegends.com/en/news/">
    <input type="image" style="height:300px;width: 500px"  src="http://stepbystepguides.org/wp-content/uploads/2017/02/League-of-legends.jpg"/>
</form>
<form action="http://www.riftherald.com/">
    <input type="image" style="height:300px;width: 500px" src="https://cdn1.vox-cdn.com/uploads/blog/sbnu_logo/639/RiftHerald_Full-1.70.png"/>
</form>
<form action="http://www.surrenderat20.net/">
    <input type="image" style="height:300px;width: 500px" src="http://i.imgur.com/sKhmRnd.jpg"/>
</form>
<form action="https://www.reddit.com/r/leagueoflegends/">
    <input type="image" style="height:300px;width: 500px" src="http://marketingland.com/wp-content/ml-loads/2014/07/reddit2-1920.jpg" />
</form>
<script type="text/javascript">

function go_get(){
 var base_url = 'http://www.youtube.com/embed?listType=search&list=';
 var search_field = document.getElementById('yourtextfield').value;
 var target_url = base_url + search_field;
 var ifr = document.getElementById('youriframe');
 ifr.src = target_url;
 return false;
}
</script> 

<form onsubmit="go_get(); return false;" >
 <input type="text"  id="yourtextfield"/>
 <input type="submit" value="YouTube Search" />
</form>

<iframe id="youriframe" width="1280" height="720" allowfullscreen="true" src="http://www.youtube.com/embed?listType=search&list=leagueoflegendsnews"></iframe>   
</section>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="https://apis.google.com/js/client.js?onload=googleApiClientReady">   </script>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2017 - <strong>LEAGUE REPORT</strong></div>
<!-- Main Container Ends -->
</body>
</html>