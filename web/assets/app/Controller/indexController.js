app.controller('indexCtrl',['$scope', '$http',
    function($scope, $http) {
      $http.get('/gestionScolarite/getAllDepartementFormation', {})
      .then(function(response) {
          $scope.listeFormations = [];
          $scope.listeDepartement = [];
          $scope.listeDepartement = response.data.listeDepartement;
          //$scope.listeFormations = response.data.listeFormation
        }, function(response) {
            console.log(response.data);
      });
      
      
        
}]);