<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title> League Report News </title>
    
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="{{asset('css/SummonerSearch.css')}}"/>   

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
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
        <li><a href="/login">LOGIN</a></li>
      </ul>
    </nav>
  </header>
  <!--News Section -->
<section class="news" id="news" style="background-image: url({{asset('images/wall1.jpg')}})">
<div style="float: right;">
<form onsubmit="go_get(); return false;" >
 <input type="text"  id="yourtextfield"/>
 <input type="submit" value="YouTube Search" />
</form>

<iframe id="youriframe" width="1000" height="600" allowfullscreen="true" src="http://www.youtube.com/embed?listType=search&list=leagueoflegendsnews"></iframe>  
</div> 
<!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="http://na.leagueoflegends.com/en/rss.xml";  
rssfeed_frame_width="600"; 
rssfeed_frame_height="420"; 
rssfeed_scroll="off"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="on"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="http://feed.surfing-waves.com/css/style6.css"; 
rssfeed_title="on"; 
rssfeed_title_name="League Of Legends Official News"; 
rssfeed_title_bgcolor="#ff0000"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage="http://"; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage="http://"; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage="http://"; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "ceb30d669b8bad85720dc26d4fea70f1"; 
//--> 
</script> 
<script type="text/javascript" src="http://feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="text-align:right; width:600px;"><a href="http://www.surfing-waves.com/feed.htm" target="_blank" style="color:#ccc;font-size:10px">widget @</a> <a href="http://www.surfing-waves.com" target="_blank" style="color:#ccc;font-size:10px">surfing-waves.com</a></div> 
<!-- end sw-rss-feed code -->
 <form action="http://na.leagueoflegends.com/en/news/">
    <input type="image" style="height:75px;width: 150px"  src="http://stepbystepguides.org/wp-content/uploads/2017/02/League-of-legends.jpg"/>
</form>
<form action="http://www.riftherald.com/">
    <input type="image" style="height:75px;width: 150px" src="https://cdn1.vox-cdn.com/uploads/blog/sbnu_logo/639/RiftHerald_Full-1.70.png"/>
</form>
<form action="http://www.surrenderat20.net/">
    <input type="image" style="height:75px;width: 150px" src="http://i.imgur.com/sKhmRnd.jpg"/>
</form>
<form action="https://www.reddit.com/r/leagueoflegends/">
    <input type="image" style="height:75px;width: 150px" src="http://marketingland.com/wp-content/ml-loads/2014/07/reddit2-1920.jpg" />
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
</section>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="https://apis.google.com/js/client.js?onload=googleApiClientReady">   </script>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2017 - <strong>LEAGUE REPORT</strong></div>
<!-- Main Container Ends -->
</body>
</html>