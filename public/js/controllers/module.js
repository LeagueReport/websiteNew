var myApp = angular.module('myApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('{[');
        $interpolateProvider.endSymbol(']}');
    });

myApp.controller('ItemController', function($scope, $http) {
    
    // Variables 
    $scope.items;
    $scope.itemSearch = '';

    $scope.champions;
    $scope.championSearch = '';

    $scope.currentItem;
    $scope.itemSet; 
    $scope.itemSetStats; 

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
    	$http({
  			method: 'GET',
  			url: '/item/'+id
		}).then(function successCallback(response) {
			$scope.currentItem = response.data;
 		 }, function errorCallback(response) {
    		console.log("Something went wrong!");
  		});
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

    $scope.getItems();
    $scope.getChampions();
});

