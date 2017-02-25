<!DOCTYPE html>

<html>

<head>
    <title> League Report </title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>   

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>

	<script src="{!! url('js/controllers/module.js') !!}" type="text/javascript"></script>

	<script text="text/javascript">
	var test; 

	function itemLookup(itemId) {
	$.ajax({
            url: 'item/'+itemId,
            method: 'get',
            success: function (data, status) {
            	test = data;
                //do something
            },error: function(xhr, ajaxOptions, thrownError){
                    console.log(xhr.status+" ,"+" "+ajaxOptions+", "+thrownError);
                }
            }
        ); 
	}
	</script>
</head>

<body data-ng-app="myApp" data-ng-controller="ItemController">
