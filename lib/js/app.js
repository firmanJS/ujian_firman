var ujian = angular.module('UjianApp',[]);
ujian.controller('UjianCtrl',function ($scope,$http) {
  $http.get("http://www.w3schools.com/angular/customers.php").then(function (response) {
      $scope.getapi = response.data.records;
  });
})
