angular

.module('BlankApp', ['ngMaterial','ngMessages','ngCart'])

.controller('bodyCtrl', function($scope,$mdDialog) {
    $scope.isActive = false;
    $scope.activeButton = function() {
    $scope.isActive = !$scope.isActive;
  } 
})

.controller('headerCtrl', function($scope, $mdDialog) {
  $scope.isActive = false;
    $scope.searchButton = function() {
    $scope.isActive = !$scope.isActive;
  };
})


.controller('footerCtrl', function($scope, $mdDialog) {

})

.controller('modalCtrl', function($scope, $mdDialog) {

})

.controller('sidenavCtrl', function ($scope) {

})

.controller('headerLang', function() {
      this.selectedMode = 'md-scale';
});