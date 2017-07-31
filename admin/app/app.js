//Define an angular module for our app
var app = angular.module('myApp', []);

app.controller('contactController', function($scope, $http) {
  getContact();

  function getContact(){  
    $http.post("ajax/getContact.php").success(function(data){
      $scope.contacts = data;
    });
  };

  $scope.deleteContact = function (id) {
    if(confirm("Tem Certeza que Deseja Excluir?")) {
      $http.post("ajax/deleteContact.php?contactID="+id).success(function(data) {
        getContact();
      });
    }
  };

});
