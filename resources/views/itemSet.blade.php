<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

	<strong> Champion </strong> {[ itemSet.champion.json.name ]} <br>
	<strong> Items </strong>
	<div data-ng-repeat="item in itemSet.items"> 

		<!--<?php 
		?>

		-->
		{[ item.name ]} <br> 
		<button data-ng-click="removeItem(item)"> Remove </button>
	</div> <br>

	<strong style="text-decoration: underline"> Cumulative Stats </strong> 

	<h5> Attack Damage </h5>
	<p> {[ itemSet.stats.ad ]} </p>
	<h5> Attack Speed </h5>
	<p> {[ itemSet.stats.as ]} </p>
	<h5> Melee/Range </h5>
	<p> {[ itemSet.stats.range ]} </p>
	<h5> Health Points </h5>
	<p> {[ itemSet.stats.hp ]}
	<h5> Health Point Regeneration </h5>
	<p> {[ itemSet.stats.hpRegen ]} </p>
	<h5> Mana/Energy </h5>
	<p> {[ itemSet.stats.mana ]} </p>
	<h5> Mana Regeneration </h5>
	<p> {[ itemSet.stats.manaRegen ]} </p>
	<h5> Armor </h5>
	<p> {[ itemSet.stats.armor ]} </p>
	<h5> Magic Resist </h5>
	<p> {[ itemSet.stats.mr ]} </p>
	<h5> Move Speed </h5>
	<p> {[ itemSet.stats.movespeed ]} </p>

	<select data-ng-model="itemSetLevel" data-ng-options="x for x in levels" data-ng-change="updateItemSetStats()">
	</select>
	</div>

	<!--
	//$0 = "champion";
	//$1 = "test1";
	//$2 = "test2";
	//$3 = "test3";
	//$4 = "test4";
	//$5 = "test5";
	//$6 = "test6";
>>>>>>> 2d51f2e6a48d57e9235bf7d5650f88c199e7667c -->

	<!--<?php 

		//foreach($itemSet as $item) {
			//echo $item;
		//}


	?>

	-->
<button data-ng-click="saveItemSet()"> Save Item Set button</button>
	
	

	<!--<form method="GET" action="/itemset/save">
        
        <input type="submit" value="Save Itemset form">

        
    </form>-->

</div>