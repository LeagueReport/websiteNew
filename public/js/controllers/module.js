var myApp = angular.module('myApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('{[');
        $interpolateProvider.endSymbol(']}');
    });


myApp.controller('ItemController', function($scope, $http) {
    

    // Variables 
    $scope.items;
    $scope.itemSearch = '';
    $scope.currentItem = {
    	json : ''
    }


    $scope.champions;
    $scope.championSearch = '';
    $scope.currentChampion = {
    	json : '',
    	ad : 0,
    	hp : 0,
    	hpRegen : 0,
    	mana : 0,
    	armor : 0,
    	manaRegen : 0,
    	mr : 0, 
    	movespeed : 0,
    	range : 0,
    	as : 0
    }

    $scope.level = 1;
    $scope.itemSetLevel = 1; 
    $scope.levels = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18];

    $scope.isItem = false; 

    $scope.itemSet = {
    	champion : {
            json : ''
        },
    	items : [],
    	stats : {
    		ad : 0,
    		hp : 0,
    		hpRegen : 0,
    		mana : 0,
    		armor : 0,
    		manaRegen : 0,
    		mr : 0, 
    		movespeed : 0,
    		range : 0,
    		as : 0
    	}
    }

    $scope.itemSetIDs = {
        IDs : []
    }

    // Functions
    $scope.getItems = function () {
    	$http({
  			method: 'GET',
  			url: '/items'
		}).then(function successCallback(response) {
			$scope.items = response;
 		 }, function errorCallback(response) {
    		console.log("Something went wrong!");
  		});
    }

    $scope.updateCurrentItem = function (id) {
    	$scope.isItem = true;
    	$http({
  			method: 'GET',
  			url: '/item/'+id
		}).then(function successCallback(response) {
			$scope.currentItem.json = response.data;
 		 }, function errorCallback(response) {
    		console.log("Something went wrong!");
  		});
    }

    $scope.selectItem = function () {

    	if ($scope.itemSet.items.length < 6) {
    		$scope.itemSet.items.push($scope.currentItem.json);
    	}
    	else {
    		alert("Maximum amount of items in set");
    	}
        $scope.updateItemSetStats();
    }

    $scope.removeItem = function(item) {
    	$scope.itemSet.items.splice($scope.itemSet.items.indexOf(item),1);
        $scope.updateItemSetStats();
    }

    $scope.getChampions = function () {
    	$http({
  			method: 'GET',
  			url: '/champions'
		}).then(function successCallback(response) {
			$scope.champions = response.data;
 		 }, function errorCallback(response) {
    		console.log("Something went wrong!");
  		});
    }

    $scope.updateCurrentChampion = function (id) {
    	$scope.isItem = false;
    	$scope.level = 1;
    	$http({
  			method: 'GET',
  			url: '/champion/'+id
		}).then(function successCallback(response) {
			$scope.currentChampion.json = response.data;
			$scope.updateStatsByLevel();
 		 }, function errorCallback(response) {
    		console.log("Something went wrong!");
  		});
    }

    $scope.selectChampion = function () {

    	$scope.itemSet.champion.json = $scope.currentChampion.json;
        $scope.updateItemSetStats();
    }

    $scope.updateStatsByLevel = function () {

		$scope.currentChampion.ad = parseFloat($scope.currentChampion.json.stats.attackdamage) + (($scope.level - 1) * parseFloat($scope.currentChampion.json.stats.attackdamageperlevel));
  		$scope.currentChampion.hp = parseFloat($scope.currentChampion.json.stats.hp) + (($scope.level - 1) * parseFloat($scope.currentChampion.json.stats.hpperlevel));
        $scope.currentChampion.hpRegen = parseFloat($scope.currentChampion.json.stats.hpregen) + (($scope.level - 1) * parseFloat($scope.currentChampion.json.stats.hpregenperlevel));
        $scope.currentChampion.mana = parseFloat($scope.currentChampion.json.stats.mp) + (($scope.level - 1) * parseFloat($scope.currentChampion.json.stats.mpperlevel));
        $scope.currentChampion.armor = parseFloat($scope.currentChampion.json.stats.armor) + (($scope.level - 1) * parseFloat($scope.currentChampion.json.stats.armorperlevel));    
        $scope.currentChampion.manaRegen = parseFloat($scope.currentChampion.json.stats.mpregen) + (($scope.level - 1) * parseFloat($scope.currentChampion.json.stats.mpregenperlevel));       
        $scope.currentChampion.mr = parseFloat($scope.currentChampion.json.stats.spellblock) + (($scope.level - 1) * parseFloat($scope.currentChampion.json.stats.spellblockperlevel));    
        $scope.currentChampion.movespeed = parseFloat($scope.currentChampion.json.stats.movespeed); 
        $scope.currentChampion.range = parseFloat($scope.currentChampion.json.stats.attackrange);
    }

    $scope.updateItemSetStats = function () {

        if ($scope.itemSet.champion.json != '') {
            $scope.itemSet.stats.ad = parseFloat($scope.itemSet.champion.json.stats.attackdamage) + (($scope.itemSetLevel - 1) * parseFloat($scope.itemSet.champion.json.stats.attackdamageperlevel));
            $scope.itemSet.stats.hp = parseFloat($scope.itemSet.champion.json.stats.hp) + (($scope.itemSetLevel - 1) * parseFloat($scope.itemSet.champion.json.stats.hpperlevel));
            $scope.itemSet.stats.hpRegen = parseFloat($scope.itemSet.champion.json.stats.hpregen) + (($scope.itemSetLevel - 1) * parseFloat($scope.itemSet.champion.json.stats.hpregenperlevel));
            $scope.itemSet.stats.mana = parseFloat($scope.itemSet.champion.json.stats.mp) + (($scope.itemSetLevel - 1) * parseFloat($scope.itemSet.champion.json.stats.mpperlevel));
            $scope.itemSet.stats.armor = parseFloat($scope.itemSet.champion.json.stats.armor) + (($scope.itemSetLevel - 1) * parseFloat($scope.itemSet.champion.json.stats.armorperlevel));    
            $scope.itemSet.stats.manaRegen = parseFloat($scope.itemSet.champion.json.stats.mpregen) + (($scope.itemSetLevel- 1) * parseFloat($scope.itemSet.champion.json.stats.mpregenperlevel));       
            $scope.itemSet.stats.mr = parseFloat($scope.itemSet.champion.json.stats.spellblock) + (($scope.itemSetLevel - 1) * parseFloat($scope.itemSet.champion.json.stats.spellblockperlevel));    
            $scope.itemSet.stats.movespeed = parseFloat($scope.itemSet.champion.json.stats.movespeed); 
            $scope.itemSet.stats.range = parseFloat($scope.itemSet.champion.json.stats.attackrange);
        }

        for (var i = 0; i < $scope.itemSet.items.length; i++) {
            console.log($scope.itemSet.items[i].name);
        }
    }

    $scope.saveItemSet = function () {
        
        var champion = "NA"
        var item1 = "NA";
        var item2 = "NA";
        var item3 = "NA";
        var item4 = "NA";
        var item5 = "NA";
        var item6 = "NA";
        var itemNames = new Array();
        for (var i = 0; i < $scope.itemSet.items.length; i++) {
            //window.alert($scope.itemSet.items[i].name);
            //itemNames.push($scope.itemSet.items[i].name);
            if (i == 0) {
                item1 = $scope.itemSet.items[i].id;
            }
            if (i == 1) {
                item2 = $scope.itemSet.items[i].id;
            }
            if (i == 2) {
                item3 = $scope.itemSet.items[i].id;
            }
            if (i == 3) {
                item4 = $scope.itemSet.items[i].id;
            }
            if (i == 4) {
                item5 = $scope.itemSet.items[i].id;
            }
            if (i == 5) {
                item6 = $scope.itemSet.items[i].id;
            }

        }

        champion = ($scope.itemSet.champion.json.id);

        //window.alert(item1);
        //window.alert(item2);
        //window.alert(item3);
        //window.alert(item4);
        //window.alert(item5);
        //window.alert(item6);
        //window.alert($scope.itemSet.champion.json.id);

        $http({
            method: 'GET',
            url: '/itemset/save/'+champion+'/'+item1+'/'+item2+'/'+item3+'/'+item4+'/'+item5+'/'+item6
        }).then(function successCallback(response) {
         }, function errorCallback(response) {
            console.log("Something went wrong!");
        });
    }

    $scope.getItems();
    $scope.getChampions();
});

