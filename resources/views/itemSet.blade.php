<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

	<strong> Champion </strong> {[ itemSet.champion.name ]} <br>
	<strong> Items </strong>
	<div data-ng-repeat="item in itemSet.items"> 
		{[ item.name ]} <br> 
		<button data-ng-click="removeItem(item)"> Remove </button>
	</div>
	//$0 = "champion";
	//$1 = "test1";
	//$2 = "test2";
	//$3 = "test3";
	//$4 = "test4";
	//$5 = "test5";
	//$6 = "test6";

	
	<button data-ng-click="saveItemSet($0, $1, $2, $3, $4, $5, $6)"> Save Item Set </button>

	<!--<form method="GET" action="/itemset/save">
        
        <input type="submit" value="Save Itemset">
    </form>-->

</div>