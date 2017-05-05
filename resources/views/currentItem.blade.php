<!-- currentItem HTML section -->
<!-- Displays information on the current item selected -->

<div id="currentItem" class="col-xs-12 col-sm-4 col-md-4 col-lg-4" data-ng-show="isItem"> 

	<img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/item/{[currentItem.json.id]}.png">
	<span>
	<strong> Name </strong> {[ currentItem.json.name]} <br>
 	<strong> Description </strong> {[ currentItem.json.sanitizedDescription]} <br>
 	<strong> Purchase </strong> {[ currentItem.json.gold.total]} <br>
 	<strong style="text-decoration: underline"> Stats </strong>

 	<!-- Dynamically displays stats for item -->
 	<div data-ng-repeat="(key,value) in currentItem.json.stats"> 
		<strong> {[ key ]}: </strong> {[ value ]} <br>
	</div>
	</span>

	<!-- Button calls angular function to add item to item set -->
	<button data-ng-click="selectItem()"> Select Item </button>

</div>