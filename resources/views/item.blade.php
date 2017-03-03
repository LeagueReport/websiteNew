@include('itemhead')

<div id="listColumn" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
	<h5> Champion Search </h5>
	@include('championList')
	<h5> Item Search </h5>
	@include('itemlist')
</div>

<div id ="listColumn" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
	@include('currentItem')
	@include('currentChampion')
</div>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
	@include('itemSet')
</div>

</body>

</html>
