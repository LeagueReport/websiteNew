<!-- Contains information on current champion selected -->

<div id="currentItem" class="col-xs-12 col-sm-4 col-md-4 col-lg-4" data-ng-show="isChampion"> 

	<img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/champion/{[currentChampion.json.key]}.png">

	<strong> Name </strong> {[ currentChampion.json.name]} <br>
 	<strong style="text-decoration: underline"> Tags </strong> 

 	<!-- Dynamically creates tags associated with champion -->
 	<div data-ng-repeat="(key,value) in currentChampion.json.tags"> 
		{[ value ]} <br>
	</div>

	<!-- Displays a list of relevant stats for the champion -->
	<strong style="text-decoration: underline"> Stats </strong>

	<h5> Attack Damage: </h5>
    {[ currentChampion.ad ]} 
	<h5> Attack Speed: </h5>
	<p> {[ currentChampion.as ]} </p>
	<h5> Melee/Range: </h5>
	<p> {[ currentChampion.range ]} </p>
	<h5> Health Points: </h5>
	<p> {[ currentChampion.hp ]}
	<h5> Health Point Regeneration: </h5>
	<p> {[ currentChampion.hpRegen ]} </p>
	<h5> Mana/Energy: </h5>
	<p> {[ currentChampion.mana ]} </p>
	<h5> Mana Regeneration: </h5>
	<p> {[ currentChampion.manaRegen ]} </p>
	<h5> Armor: </h5>
	<p> {[ currentChampion.armor ]} </p>
	<h5> Magic Resist: </h5>
	<p> {[ currentChampion.mr ]} </p>
	<h5> Move Speed: </h5>
	<p> {[ currentChampion.movespeed ]} </p>
	<span> Level </span>

	<!-- Can change level and function updates champion calculations by level --> 
	<select data-ng-model="level" data-ng-options="x for x in levels" data-ng-change="updateStatsByLevel()">
	</select>

	<!-- Button to select champion for item set build -->
	<button data-ng-click="selectChampion()"> Select Champion </button>
</div>