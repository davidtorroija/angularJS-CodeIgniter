<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	.Monica {color:red;}
	</style>
	<script type="text/javascript" src="web/js/lib/angular-1.0.8/angular.js"></script>
	<script type="text/javascript" src="web/js/welcomeCtrl.js"></script> 

	 <script type="text/javascript">
	// 	var app = angular.module('myApp',[]);
	// function miControladorGoloso($scope,$http){
	// 	'use strict'
	// 	$scope.pepe = 'hola';
	// 	$scope.isVisible = false;
	// 	$scope.personas = 
	// 	[
	// 		{nombre:'Monica',edad:'11'},
	// 		{nombre:'Gabi Paraiso Gol',edad:'21'},
	// 	];
	// 	$scope.funcionClick = function(str){
	// 		alert(str);
	// 		$scope.isVisible = true;
	// 	}
	// 	$scope.llenarTexto = function(persona){
	// 		$scope.loquesea = persona.nombre;
	// 	}	
	// 	$scope.isLoading = true;
	// 	setTimeout(function(){
	// 		$scope.$watch('isLoading', function(){
	// 			$scope.isLoading = false;
	// 		});
	// 		console.log('loadinggg');
	// 		$scope.isLoading = false;
	// 		$scope.$digest();
			
	// 	},3000);
		
	// }
	//(function(){
		//'use strict'
		a = 1
		function myObjetoLoco(objectSpecifier){
		    objectSpecifier = objectSpecifier || {};
		    
		    var defaultConfig = {parametro1: 'soyElParam1'}
		    
		}

	//})()
	 </script>

</head>
<body>

<div id="container" ng-app="myApp">
	<h1>Welcome to CodeIgniter!</h1>
	
<!-- ng-controller="miControladorGoloso" -->
	<div ng-view id="body" >
		<div ng-show="isLoading">Loading.......</div>
		{{pepe}}
		<input ng-click="funcionClick('algo')" ng-model="variableInput">
	<button ng-click="agregarElemento()">agregar elemento</button>

		<div ng-show="isVisible"> un textoooooooo</div>
		<select ng-model="selected" 
		ng-options="persona as persona.edad for persona in personas">
	</select>
		{{selected.nombre}}
		<ul>
			<li ng-repeat="persona in personas">
				<span ng-click="llenarTexto(persona)" ng-class="{Monica: persona.edad > 20}">{{persona.nombre}}</span>
			</li>
		</ul>
		{{loquesea}}
		<p>The page you are looking at is being generated dynamically by CodeIgniter {{name}}.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>

	<a href="web/js/lib/jasmine/SpecRunner.html">correr los tests</a>
</div>

</body>
</html>