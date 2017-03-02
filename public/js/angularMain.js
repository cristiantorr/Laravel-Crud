var app = angular.module('userModuleApp', []);

app.controller('userControllerApp',  ["$scope","$http",function($scope, $http) {

	/* va al route y consume el controllador*/

	$http.get("userall").success(function(data){
		$scope.users = data;
		console.log('angular console' + data);

	});
		


	$scope.addUser = function(){				

		var userDetail = {
			name : $scope.name,
			email : "xxx@gmail.com",
			password : 2999,
			remember_token : 'fff'
		}


		$scope.users.push(userDetail);

		$scope.vehicle = "";

		$http.post("userall", userDetail);

	}


}]);
