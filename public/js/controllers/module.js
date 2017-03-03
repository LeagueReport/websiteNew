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
    $scope.levels = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18];

    $scope.isItem = false; 

    $scope.itemSet = {
    	champion : '',
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
    }; 

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
    }

    $scope.removeItem = function(item) {
    	$scope.itemSet.items.splice($scope.itemSet.items.indexOf(item),1);
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

    	$scope.itemSet.champion = $scope.currentChampion.json;
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

    $scope.saveItemSet = funciton () {
        $http({
            method: 'GET',
            url: '/itemset/save'
        }).then(function successCallback(response) {
         }, function errorCallback(response) {
            console.log("Something went wrong!");
        });
    }

    $scope.getItems();
    $scope.getChampions();
});

