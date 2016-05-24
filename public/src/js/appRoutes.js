angular.module('appRoutes', []).config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {

	$routeProvider

		.when('/', {
			templateUrl: 'views/home.html',
			controller: 'MainController'
		})
		.when('/register', {
			templateUrl: 'views/register.blade.php',
			controller: 'MainController'
		})
		.when('/loginform', {
			templateUrl: 'views/login.blade.php',
			controller: 'MainController'
		})
		.when('/profilepage', {
			templateUrl: 'views/profile.html',
			controller: 'MainController'
		})

	$locationProvider.html5Mode(true);

}]);