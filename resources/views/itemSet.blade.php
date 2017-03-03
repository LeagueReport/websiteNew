<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

	<strong> Champion </strong> {[ itemSet.champion.name ]} <br>
	<strong> Items </strong>
	<div data-ng-repeat="item in itemSet.items"> 
		{[ item.name ]} <br> 
		<button data-ng-click="removeItem(item)"> Remove </button>
	</div>

</div>