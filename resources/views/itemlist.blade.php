<div id="clist" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

	<!-- Allows user to filter list below by name of the champion -->
	<form name="search">
    	<input type="text" name="input" data-ng-model="itemSearch" required data-ng-trim="false" autocomplete="off" placeholder="Search Items">
  	</form>

  	<!-- Dynamically displays all of the items in League
  	of Legends -->
	<div data-ng-repeat="(key,value) in items.data.data" data-ng-show="(value.name.toLowerCase().indexOf(itemSearch.toLowerCase()) > -1) || itemSearch.length == undefined"> 
		<img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[value.id]}.png">
		<a data-ng-click="updateCurrentItem(value.id)">
			{[ value.name ]} 
		</a>
	</div>
</div>