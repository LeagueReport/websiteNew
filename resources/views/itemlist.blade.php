<div id="list" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
	<form name="search">
    	<input type="text" name="input" data-ng-model="itemSearch" required data-ng-trim="false" autocomplete="off">
  	</form>

	<div data-ng-repeat="(key,value) in items.data.data" data-ng-show="(value.name.toLowerCase().indexOf(itemSearch.toLowerCase()) > -1) || itemSearch.length == undefined"> 
		<img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.id]}.png">
		<a data-ng-click="updateCurrentItem(value.id)">
			{[ value.name ]} 
		</a>
	</div>
</div>