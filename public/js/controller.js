    angular

.module('BlankApp', ['ngMaterial','ngMessages','ngCart','ngSanitize'])

.controller('bodyCtrl', function($scope,$mdDialog, $mdSidenav, $timeout) {
    $scope.isActive = false;
    $scope.activeButton = function() {
    $scope.isActive = !$scope.isActive;
  } 

    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');

    function buildToggler(componentId) {
      return function() {
        $mdSidenav(componentId).toggle();
      }
    }

    $scope.toggleLeft1 = buildToggler('left1');
    $scope.toggleRight = buildToggler('right');

    function buildToggler(componentId) {
      return function() {
        $mdSidenav(componentId).toggle();
      }
    }



})

.controller('headerCtrl', function($scope, $mdDialog, $mdSidenav, $timeout) {
  $scope.isActive = false;
    $scope.searchButton = function() {
    $scope.isActive = !$scope.isActive;
  };

    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');

    function buildToggler(componentId) {
      return function() {
        $mdSidenav(componentId).toggle();
      }
    }
})


.controller('footerCtrl', function($scope, $mdDialog) {

})

.controller('menuCtrl', function($scope) {

 // $scope.menu_price = 0;
 // $scope.updateNumber = function () {

 //    $scope.menu_price = {{ $product->price }};
 //  }
})


.controller('modalCtrl', function($scope, $mdDialog) {

})

.controller('sidenavCtrl', function ($scope) {

})

.controller('headerLang', function() {
      this.selectedMode = 'md-scale';
});