<!-- This contains the HTML specifically for the Item Set
part of the Item Set Build page -->

<div id="currentItem" class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

	<strong> Champion </strong> {[ itemSet.champion.json.name ]} <br>
	<strong> Items </strong>
	<div data-ng-repeat="item in itemSet.items"> 


		{[ item.name ]} <br> 
	<!-- Removes an item from the item set -->
		<button data-ng-click="removeItem(item)"> Remove </button>
	</div> <br>

	<!-- Displays cumulative stats -->
	<strong style="text-decoration: underline"> Cumulative Stats </strong> 

	<h5> Attack Damage: </h5>
	<p> {[ itemSet.stats.ad ]} </p>
	<h5> Attack Speed: </h5>
	<p> {[ itemSet.stats.as ]} </p>
	<h5> Melee/Range: </h5>
	<p> {[ itemSet.stats.range ]} </p>
	<h5> Health Points: </h5>
	<p> {[ itemSet.stats.hp ]}
	<h5> Health Point Regeneration: </h5>
	<p> {[ itemSet.stats.hpRegen ]} </p>
	<h5> Mana/Energy: </h5>
	<p> {[ itemSet.stats.mana ]} </p>
	<h5> Mana Regeneration: </h5>
	<p> {[ itemSet.stats.manaRegen ]} </p>
	<h5> Armor: </h5>
	<p> {[ itemSet.stats.armor ]} </p>
	<h5> Magic Resist: </h5>
	<p> {[ itemSet.stats.mr ]} </p>
	<h5> Move Speed: </h5>
	<p> {[ itemSet.stats.movespeed ]} </p>
	<h5> Ability Power: </h5>
	<p> {[ itemSet.stats.ap ]} </p>
	<h5> Critical Chance: </h5>
	<p> {[ itemSet.stats.crit ]} </p>
	<h5> Life Steal: </h5>
	<p> {[ itemSet.stats.ls ]} </p>

	<span> Level </span> 
	<!-- Dropdown to change the level and calls function to update calculations -->

	<select data-ng-model="itemSetLevel" data-ng-options="x for x in levels" data-ng-change="updateItemSetStats()">
	</select>

	<!-- Button to save a user's item set -->
	<button data-ng-click="saveItemSet()"> Save Item Set</button>
	</div>
	
</div>