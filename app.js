var app = angular.module('myApp', []);

app.controller('datauser', function($scope, $http) {
	$http.get("http://localhost/web_pbo_master/api.php?action=GetUsers")
	.then(function (response) {$scope.getusers = response.data;});
});
app.controller('datawarung', function($scope, $http) {
	$http.get("http://localhost/web_pbo_master/api.php?action=getAllWarung")
	.then(function (response) {$scope.getallwarung = response.data;});
});
app.controller('datalokasi', function($scope, $http) {
	$http.get("http://localhost/web_pbo_master/api.php?action=getallLokasi")
	.then(function (response) {$scope.getalllokasi = response.data;});

	
});