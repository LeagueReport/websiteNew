<div id="currentItem" class="col-xs-12 col-sm-4 col-md-4 col-lg-4" data-ng-show="!(isItem)"> 

	<img src="http://ddragon.leagueoflegends.com/cdn/7.6.1/img/champion/{[currentChampion.json.key]}.png">

	<strong> Name </strong> {[ currentChampion.json.name]} <br>
 	<strong style="text-decoration: underline"> Tags </strong> 
 	<div data-ng-repeat="(key,value) in currentChampion.json.tags"> 
		{[ value ]} <br>
	</div>
	<strong style="text-decoration: underline"> Stats </strong>

	<h5> Attack Damage </h5>
	<p> {[ currentChampion.ad ]} </p>
	<h5> Attack Speed </h5>
	<p> {[ currentChampion.as ]} </p>
	<h5> Melee/Range </h5>
	<p> {[ currentChampion.range ]} </p>
	<h5> Health Points </h5>
	<p> {[ currentChampion.hp ]}
	<h5> Health Point Regeneration </h5>
	<p> {[ currentChampion.hpRegen ]} </p>
	<h5> Mana/Energy </h5>
	<p> {[ currentChampion.mana ]} </p>
	<h5> Mana Regeneration </h5>
	<p> {[ currentChampion.manaRegen ]} </p>
	<h5> Armor </h5>
	<p> {[ currentChampion.armor ]} </p>
	<h5> Magic Resist </h5>
	<p> {[ currentChampion.mr ]} </p>
	<h5> Move Speed </h5>
	<p> {[ currentChampion.movespeed ]} </p>

	<select data-ng-model="level" data-ng-options="x for x in levels" data-ng-change="updateStatsByLevel()">
	</select>

	<button data-ng-click="selectChampion()"> Select Champion </button>
</div>