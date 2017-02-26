@include('itemhead')

<div id="itemColumn" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
	@include('currentItem')
	@include('itemlist')
</div>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
	@include('currentChampion')
	@include('championList')
</div>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
	@include('itemSet')
</div>

</body>

</html>
