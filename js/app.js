var firstApp = angular.module('firstApp', []);

firstApp.controller('contactController', ['$scope','$http', function($scope, $http){

  getContacts();

  function getContacts(){
    $http({
      method: 'GET',
      url: '/FirstApp/services/data.php'
    }).then(function successCallback(response) {

        $scope.contacts = response.data;

      }, function errorCallback(response) {
        $scope.message = "it didn't work.";
      });
  }



    $scope.addContact = function(name, email, message) {

      $http.post('/FirstApp/services/addContact.php?name=' + name + "&email=" + email + "&message=" + message).success(function(data){

        $scope.nameInput = "";
        $scope.emailInput = "";
        $scope.messageInput = "";
        getContacts();

      });

    }

}]);
