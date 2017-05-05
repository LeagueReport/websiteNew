<!-- HTML section that contains the core of our Item Set Build page -->

<!-- Include itemhead.blade.php -->
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
        <li><a href="/login">LOGIN</a></li>
      </ul>
    </nav>
  </header>
</div>
	<div id="listColumn" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
		<h3> Champion Search </h3>
		<!-- Includes championList.blade.php -->
		@include('championList')
		<h3> Item Search </h3>
		<!-- Includes itemList.blade.php -->
		@include('itemlist')
	</div>
	<div id ="listColumn" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
		<!-- Includes currentItem.blade.php -->
		@include('currentItem')
		<!-- Includes currentChampion --> 
		@include('currentChampion')
	</div>
	<div id="listColumn" style="height: auto" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
		<!-- Includes itemSet.blade.php -->
		@include('itemSet')
	</div>
	<!-- Copyrights Section -->
	<div class="copyright col-xs-12 col-sm-12 col-md-12 col-lg-12">&copy;2017 - <strong>LEAGUE REPORT</strong></div>
</div>
</body>
</html>