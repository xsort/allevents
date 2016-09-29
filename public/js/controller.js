angular

.module('BlankApp', ['ngMaterial','ngMessages','ngCart'])

.controller('bodyCtrl', function($scope,$mdDialog) {
    $scope.isActive = false;
    $scope.activeButton = function() {
    $scope.isActive = !$scope.isActive;
  }  
    $scope.showEvent = function(ev) {
    $mdDialog.show({
        templateUrl: 'template/1.php',
        
        parent: angular.element(document.body),
        clickOutsideToClose:true,
    });
  }

})

.controller('headerCtrl', function($scope, $mdDialog) {
  $scope.showEvent = function(ev) {
    $mdDialog.show({
        contentElement: '#getEvent',
    	parent: angular.element(document.body),
    	clickOutsideToClose:true,
    });
  };

  $scope.showAuth = function(ev) {
    $mdDialog.show({
        contentElement: '#getAuth',
    	parent: angular.element(document.body),
    	clickOutsideToClose:true
    });
  };



$scope.showPrerenderedDialog = function(ev) {
    $mdDialog.show({
      contentElement: '#getAuth1',
      parent: angular.element(document.body),
      targetEvent: ev,
      clickOutsideToClose: true,
      fullscreen: $scope.customFullscreen
    });
  };

 })

.controller('footerCtrl', function($scope, $mdDialog) {



})

.controller('modalCtrl', function($scope, $mdDialog) {
	$scope.showRegister = function(ev) {
		$mdDialog.show({
        contentElement: '#getEvent',
    		parent: angular.element(document.body),
    		clickOutsideToClose:true,
    	});
	}
})

.controller('sidenavCtrl', function ($scope) {

})

.controller('headerLang', function() {
      this.selectedMode = 'md-scale';
});