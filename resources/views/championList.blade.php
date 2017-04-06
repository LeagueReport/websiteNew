<div id="clist" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
	<form name="search">
    	<input type="text" name="input" data-ng-model="championSearch" required data-ng-trim="false" autocomplete="off" placeholder="Search Champions">
  	</form>

	<div data-ng-repeat="(key,value) in champions.data" data-ng-show="(value.name.toLowerCase().indexOf(championSearch.toLowerCase()) > -1) || championSearch.length == undefined"> 
		<img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/champion/{[value.key]}.png">
		<a data-ng-click="updateCurrentChampion(value.id)">
			{[ value.name ]} 
		</a>
	</div>
</div>