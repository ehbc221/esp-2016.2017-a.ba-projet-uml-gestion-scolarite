app.controller('attestationCtrl', function($scope, $http, DTOptionsBuilder, DTColumnBuilder, $q) {

    $scope.listeStat = [];
    $scope.listeForAllStat = [];
    $scope.etudiant = {};

    $scope.loadData = function() {
        $http.get('/gestionScolarite/getAllEtudiantForStat', {})
        .then(function(response) {
            $scope.listeForAllStat = response.data;
            $scope.listeStat = $scope.listeForAllStat;
        }, function(response) {
            console.log(response);
        });
    };

    $scope.afficherAttestation = function(idet){
        $http.get('/gestionScolarite/getAllEtudiantForStat', {})
        .then(function(response) {
            $scope.listeForAllStat = response.data;
            $scope.listeStat = $scope.listeForAllStat;
            for(var i= 0; i< $scope.listeStat.length; i++)
            {
                if($scope.listeStat[i].id==idet)
                {
                    $scope.etudiant = $scope.listeStat[i];
                }
            }
            console.log($scope.etudiant);
            }, function(response) {
                console.log($scope.response);
        });
    }

});
