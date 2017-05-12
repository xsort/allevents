<<<<<<< HEAD
    angular

.module('BlankApp', ['ngMaterial','ngMessages','ngCart','ngSanitize'])

.controller('bodyCtrl', function($scope,$mdDialog, $mdSidenav, $timeout) {
=======
angular

.module('BlankApp', ['ngMaterial','ngMessages','ngCart','wu.masonry'])

.controller('bodyCtrl', function($scope,$mdDialog) {
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    $scope.isActive = false;
    $scope.activeButton = function() {
    $scope.isActive = !$scope.isActive;
  } 
<<<<<<< HEAD

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
=======
})

.controller('headerCtrl', function($scope, $mdDialog) {
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
  $scope.isActive = false;
    $scope.searchButton = function() {
    $scope.isActive = !$scope.isActive;
  };
<<<<<<< HEAD

    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');

    function buildToggler(componentId) {
      return function() {
        $mdSidenav(componentId).toggle();
      }
    }
=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
})


.controller('footerCtrl', function($scope, $mdDialog) {

})

<<<<<<< HEAD
.controller('menuCtrl', function($scope) {

 // $scope.menu_price = 0;
 // $scope.updateNumber = function () {

 //    $scope.menu_price = {{ $product->price }};
 //  }
=======
.controller('menuCtrl', function($scope, $mdToast) {
 
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
})


.controller('modalCtrl', function($scope, $mdDialog) {

})

.controller('sidenavCtrl', function ($scope) {

})

.controller('headerLang', function() {
      this.selectedMode = 'md-scale';
});