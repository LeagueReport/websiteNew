<div id="currentItem" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

	<img src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/champion/{[currentChampion.name]}.png">

	<strong> Name </strong> {[ currentChampion.name]} <br>
 	<strong> Tags </strong> 
 	<div data-ng-repeat="(key,value) in currentChampion.tags"> 
		{[ value ]} <br>
	</div>
	<strong style="text-decoration: underline"> Stats </strong>
 	<div data-ng-repeat="(key,value) in currentChampion.stats"> 
		<strong> {[ key ]} </strong> {[ value ]} <br>
	</div>

	<button data-ng-click="selectChampion()"> Select Champion </button>

</div>