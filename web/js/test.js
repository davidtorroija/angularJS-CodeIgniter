

var myApp = angular.module('myApp',[]);

myApp.controller('WelcomeCtrl', function($scope){
	$scope.name = 'bolooooooduuooo11';
});

myApp.controller('BusquedaLibrosCtrl', function($scope,$routeParams){
	$scope.name = 'bolooooooduuooo11';
	console.log($routeParams);
	$scope.idLibro = $routeParams.idLibro;
});

myApp.config(function($routeProvider){
	$routeProvider
	.when('/',{controller:'WelcomeCtrl',templateUrl: 'web/templates/welcome.html'})
	.when('/busquedaLibros/',{controller:'BusquedaLibrosCtrl',templateUrl: 'web/templates/busquedaLibros/index.html'})
	.when('/busquedaLibros/:idLibro',{controller:'BusquedaLibrosCtrl',templateUrl: 'web/templates/busquedaLibros/item.html'})
	.otherwise({redirectTo:'/'});
});

// var myApp = {
//   controller: {},
//   directive: {},
//   serviceFactory: {}
// };


// app.directive('myDirective', function($compile) {
//   return {
//     restrict: 'E',
//     scope: {
//       myDirectiveVar: '=',
//      //bindAttr: '='
//     },
//     template: '<div class="some">' +
//       '<input ng-model="myDirectiveVar"></div>',
//     replace: true,
//     //require: 'ngModel',
//     link: function($scope, elem, attr, ctrl) {
//       console.debug($scope);
//       //var textField = $('input', elem).attr('ng-model', 'myDirectiveVar');
//       // $compile(textField)($scope.$parent);
//     }
//   };
// });

// angular.module('docsApp', ['ngResource', 'ngCookies', 'ngSanitize', 'bootstrap', 'bootstrapPrettify']).
//   config(function($locationProvider) {
//     $locationProvider.html5Mode(true).hashPrefix('!');
//   }).
//   factory(docsApp.serviceFactory).
//   directive(docsApp.directive).
//   controller(docsApp.controller);



