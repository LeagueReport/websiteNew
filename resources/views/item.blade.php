@include('itemhead')

<div class="container2"> 

<div style="padding-left: 0; padding-right: 0;"> 
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
</div>
	<div id="listColumn" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
		<h3> Champion Search </h3>
		@include('championList')
		<h3> Item Search </h3>
		@include('itemlist')
	</div>
	<div id ="listColumn" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
		@include('currentItem')
		@include('currentChampion')
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
		@include('itemSet')
	</div>
	<!-- Copyrights Section -->
	<div class="copyright col-xs-12 col-sm-12 col-md-12 col-lg-12">&copy;2017 - <strong>LEAGUE REPORT</strong></div>
</div>
</body>
</html>