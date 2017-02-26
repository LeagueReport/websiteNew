<div id="currentItem" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

	<img src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/item/{[currentItem.id]}.png">

	<strong> Name </strong> {[ currentItem.name]} <br>
 	<strong> Description </strong> {[ currentItem.sanitizedDescription]} <br>
 	<strong> Purchase </strong> {[ currentItem.gold.total]} <br>
 	<div data-ng-repeat="(key,value) in currentItem.stats"> 
		<strong> {[ key ]} </strong> {[ value ]} <br>
	</div>

	<button data-ng-click="selectItem()"> Select Item </button>

</div>