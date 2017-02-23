app.controller('globalStatCtrl', function($scope, $http, DTOptionsBuilder, DTColumnBuilder, $q) {
    var vm = this;
    vm.authorized = false;
    $scope.motCle = 'all';
    $scope.critere = "all";
    $scope.nomDepartement = "Tout";
    $scope.nomFormation = "Tout";
    $scope.nomOption = "Tout";
    $scope.niveau = "Tout";
    $scope.sexe = "Tout";
    $scope.serieBac = "Tout";
    $scope.nature = "Tout";
    $scope.statut = "Tout";
    $scope.nationalite = "Tout";
    $scope.resultat = "Tout";
    $scope.listeStat = [];
    $scope.affiche = {
        departement : true,
        option : true,
        formation: true,
        niveau: true,
        sexe: true,
        serieBac: true,
        nature: true,
        statut: true,
        nationalite: true,
        resultat: true
    }

    var resultats=[];
    $scope.listeForAllStat = [];
    $scope.categorie = ["Départements","Nationalité","Nature","Niveau","Résultat","Sexe","Statut"];
    var categorie = [];
    $scope.choixAxe = ["Départements | Options | Formations","Effectifs","Nationalité","Nature","Niveau","Résultat","Sexe","Statut"];
    var choixAxe = [];
    $scope.disableChoixAxe = true;
    var tabaff=[];
    var tabDonnee=[];
    $scope.loadData = function() {
        $http.get('/gestionScolarite/getAllEtudiantForStat', {})
        .then(function(response) {
            $scope.listeForAllStat = response.data;
            $scope.listeStat = $scope.listeForAllStat;
        }, function(response) {
            console.log(response);
        });
    };
    $scope.loadData();

    $scope.loadFormation = function () {
        console.log($scope.listeForAllStat);
        $http.get('/gestionScolarite/getAllDepartementFormation', {})
        .then(function(response) {
            $scope.listeFormations = [];
            $scope.listeFormations = response.data.listeFormation;
        }, function(response) {
            console.log(response.data);
        });
    };

    $scope.loadOption = function () {
        $http.get('/gestionScolarite/getAllOption', {})
        .then(function(response) {
            $scope.listeOptions = [];
            $scope.listeOptions = response.data;
        }, function(response) {
            console.log(response.data);
        });

    };

    $scope.generateStat = function() {
        $scope.choixAxe = ["Départements | Options | Formations","Effectifs","Nationalité","Nature","Niveau","Résultat","Sexe","Statut"];
        $scope.categorie = ["Départements","Nationalité","Nature","Niveau","Résultat","Sexe","Statut"];

        $scope.listeStat = $scope.listeForAllStat;
        tabaff = [];
        resultats=[];
        choixAxe = [];
        categorie = [];
        if($scope.nomDepartement !='Tout' && $scope.nomDepartement != undefined) {
          $scope.affiche.departement=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].nomDepartement.trim() == $scope.nomDepartement.trim()) {
                resultats.push($scope.listeStat[j]);
              }
          }
          $scope.listeStat = resultats;

          choixAxe.push("Options | Formations");
          for(var i=0;i<$scope.choixAxe.length;i++) {
              if($scope.choixAxe[i] != "Départements | Options | Formations") {
                choixAxe.push($scope.choixAxe[i]);
              }
          }
          $scope.choixAxe=choixAxe;

          categorie.push("Formations","Options");
          for(var i=0;i<$scope.categorie.length;i++) {
              if($scope.categorie[i] != "Départements") {
                categorie.push($scope.categorie[i]);
              }
          }
          $scope.categorie=categorie;
        } else {
          $scope.affiche.departement=true;
        }

        resultats=[];
        choixAxe = [];
        categorie = [];
        if($scope.nomOption !='Tout' && $scope.nomOption != undefined) {
          $scope.affiche.option=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].nomOption.trim() == $scope.nomOption.trim()) {
                resultats.push($scope.listeStat[j]);
              }
          }
          $scope.listeStat=resultats;
          choixAxe.push("Formations");
          for(var i=0;i<$scope.choixAxe.length;i++) {
              if($scope.choixAxe[i] != "Options | Formations") {
                choixAxe.push($scope.choixAxe[i]);
              }
          }
          $scope.choixAxe=choixAxe;

          for(var i=0;i<$scope.categorie.length;i++) {
              if($scope.categorie[i] != "Options") {
                categorie.push($scope.categorie[i]);
              }
          }
          $scope.categorie=categorie;
        } else {
          $scope.affiche.option=true;
        }


        resultats=[];
        choixAxe = [];
        categorie = [];
        if($scope.nomFormation !='Tout' && $scope.nomFormation != undefined) {
          $scope.affiche.formation=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].nomFormation.trim() == $scope.nomFormation.trim()) {
                resultats.push($scope.listeStat[j]);
              }
            }
          $scope.listeStat=resultats;
          for(var i=0;i<$scope.choixAxe.length;i++) {
              if($scope.choixAxe[i] != "Formations") {
                choixAxe.push($scope.choixAxe[i]);
              }
          }
          $scope.choixAxe=choixAxe;

          for(var i=0;i<$scope.categorie.length;i++) {
              if($scope.categorie[i] != "Formations") {
                categorie.push($scope.categorie[i]);
              }
          }
          $scope.categorie=categorie;
        } else {
           $scope.affiche.formation=true;
        }


        resultats=[];
        choixAxe = [];
        categorie = [];
        if($scope.niveau !='Tout' && $scope.niveau != undefined) {
          $scope.affiche.niveau=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].niveau.trim() == $scope.niveau.trim()) {
                resultats.push($scope.listeStat[j]);
              }
            }
          $scope.listeStat=resultats;
          for(var i=0;i<$scope.choixAxe.length;i++) {
              if($scope.choixAxe[i] != "Niveau") {
                choixAxe.push($scope.choixAxe[i]);
              }
          }
          $scope.choixAxe=choixAxe;

          for(var i=0;i<$scope.categorie.length;i++) {
              if($scope.categorie[i] != "Niveau") {
                categorie.push($scope.categorie[i]);
              }
          }
          $scope.categorie=categorie;
        } else {
          $scope.affiche.niveau=true;
        }


        resultats=[];
        choixAxe = [];
        categorie = [];
        if($scope.sexe !='Tout' && $scope.sexe != undefined) {
          $scope.affiche.sexe=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].sexe.trim() == $scope.sexe.trim()) {
                resultats.push($scope.listeStat[j]);
              }
            }
          $scope.listeStat=resultats;
          for(var i=0;i<$scope.choixAxe.length;i++) {
              if($scope.choixAxe[i] != "Sexe") {
                choixAxe.push($scope.choixAxe[i]);
              }
          }
          $scope.choixAxe=choixAxe;

          for(var i=0;i<$scope.categorie.length;i++) {
              if($scope.categorie[i] != "Sexe") {
                categorie.push($scope.categorie[i]);
              }
          }
          $scope.categorie=categorie;
        } else {
          $scope.affiche.sexe=true;
        }


        choixAxe = [];
        categorie = [];
        if($scope.serieBac !='Tout' && $scope.serieBac != undefined) {
          $scope.affiche.serieBac=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].serieBac.trim() == $scope.serieBac.trim()) {
                resultats.push($scope.listeStat[j]);
              }
            }
          $scope.listeStat=resultats;
        } else {
          $scope.affiche.serieBac=true;
        }


        resultats=[];
        choixAxe = [];
        categorie = [];
        if($scope.nature !='Tout' && $scope.nature != undefined) {
          $scope.affiche.nature=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].nature.trim() == $scope.nature.trim()) {
                resultats.push($scope.listeStat[j]);
              }
            }
          $scope.listeStat=resultats;
          for(var i=0;i<$scope.choixAxe.length;i++) {
              if($scope.choixAxe[i] != "Nature") {
                choixAxe.push($scope.choixAxe[i]);
              }
          }
          $scope.choixAxe=choixAxe;

          for(var i=0;i<$scope.categorie.length;i++) {
              if($scope.categorie[i] != "Nature") {
                categorie.push($scope.categorie[i]);
              }
          }
          $scope.categorie=categorie;
        } else {
          $scope.affiche.nature=true;
        }


        resultats=[];
        choixAxe = [];
        categorie = [];
        if($scope.statut !='Tout' && $scope.statut != undefined) {
          $scope.affiche.statut=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].statut.trim() == $scope.statut.trim()) {
                resultats.push($scope.listeStat[j]);
              }
            }
          $scope.listeStat=resultats;
          for(var i=0;i<$scope.choixAxe.length;i++) {
              if($scope.choixAxe[i] != "Statut") {
                choixAxe.push($scope.choixAxe[i]);
              }
          }
          $scope.choixAxe=choixAxe;

          for(var i=0;i<$scope.categorie.length;i++) {
              if($scope.categorie[i] != "Statut") {
                categorie.push($scope.categorie[i]);
              }
          }
          $scope.categorie=categorie;
        } else {
          $scope.affiche.statut=true;
        }


        resultats=[];
        choixAxe = [];
        categorie = [];
        if($scope.nationalite !='Tout' && $scope.nationalite != undefined) {
          $scope.affiche.nationalite=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].nationalite.trim() == $scope.nationalite.trim()) {
                resultats.push($scope.listeStat[j]);
              }
            }
          $scope.listeStat=resultats;
          for(var i=0;i<$scope.choixAxe.length;i++) {
              if($scope.choixAxe[i] != "Nationalité") {
                choixAxe.push($scope.choixAxe[i]);
              }
          }
          $scope.choixAxe=choixAxe;

          for(var i=0;i<$scope.categorie.length;i++) {
              if($scope.categorie[i] != "Nationalité") {
                categorie.push($scope.categorie[i]);
              }
          }
          $scope.categorie=categorie;
        } else {
           $scope.affiche.nationalite=true;
        }


        resultats=[];
        choixAxe = [];
        categorie = [];
        if($scope.resultat !='Tout' && $scope.resultat != undefined) {
          $scope.affiche.resultat=false;
          for(var j=0;j<$scope.listeStat.length;j++) {
              if($scope.listeStat[j].resultat.trim() == $scope.resultat.trim()) {
                resultats.push($scope.listeStat[j]);
              }
            }
          $scope.listeStat=resultats;
          for(var i=0;i<$scope.choixAxe.length;i++) {
              if($scope.choixAxe[i] != "Résultat") {
                choixAxe.push($scope.choixAxe[i]);
              }
          }
          $scope.choixAxe=choixAxe;

          for(var i=0;i<$scope.categorie.length;i++) {
              if($scope.categorie[i] != "Résultat") {
                categorie.push($scope.categorie[i]);
              }
          }
          $scope.categorie=categorie;
        } else {
           $scope.affiche.resultat=true;
        }
        resultats=[];

        var tabresult=[];
        var trouve;
        var statpart={};
        if($scope.catChoisi != "" && $scope.catChoisi != undefined) {
            for(var j=0;j<$scope.listeStat.length;j++) {
              trouve=false;
              for(var i=0;i<tabresult.length;i++) {
                if($scope.catChoisi=="Départements") {
                    if($scope.listeStat[j].nomDepartement==tabresult[i]['nomEff']) {
                        trouve=true;
                        tabresult[i].eff+=1;
                    }
                }
                if($scope.catChoisi=="Options") {
                    if($scope.listeStat[j].nomOption==tabresult[i]['nomEff']) {
                        trouve=true;
                        tabresult[i].eff+=1;
                    }
                }
                if($scope.catChoisi=="Formations") {
                    if($scope.listeStat[j].nomFormation==tabresult[i]['nomEff']) {
                        trouve=true;
                        tabresult[i].eff+=1;
                    }
                }
                if($scope.catChoisi=="Niveau") {
                    if($scope.listeStat[j].niveau==tabresult[i]['nomEff']) {
                        trouve=true;
                        tabresult[i].eff+=1;
                    }
                }
                if($scope.catChoisi=="Nationalité") {
                    if($scope.listeStat[j].nationalite==tabresult[i]['nomEff']) {
                        trouve=true;
                        tabresult[i].eff+=1;
                    }
                }
                if($scope.catChoisi=="Nature") {
                    if($scope.listeStat[j].nature==tabresult[i]['nomEff']) {
                        trouve=true;
                        tabresult[i].eff+=1;
                    }
                }
                if($scope.catChoisi=="Résultat") {
                    if($scope.listeStat[j].resultat==tabresult[i]['nomEff']) {
                        trouve=true;
                        tabresult[i].eff+=1;
                    }
                }
                if($scope.catChoisi=="Sexe") {
                    if($scope.listeStat[j].sexe==tabresult[i]['nomEff']) {
                        trouve=true;
                        tabresult[i].eff+=1;
                    }
                }
                if($scope.catChoisi=="Statut") {
                    if($scope.listeStat[j].statut==tabresult[i]['nomEff']) {
                        trouve=true;
                        tabresult[i].eff+=1;
                    }
                }
              }
              if(trouve==false)
              {
                statpart={};
                if ($scope.catChoisi=="Départements")
                {
                  statpart.nomEff=$scope.listeStat[j].nomDepartement;
                }
                else if ($scope.catChoisi=="Options")
                {
                  statpart.nomEff=$scope.listeStat[j].nomOption;
                }
                else if ($scope.catChoisi=="Formations")
                {
                  statpart.nomEff=$scope.listeStat[j].nomFormation;
                }
                else if ($scope.catChoisi=="Nationalité")
                {
                  statpart.nomEff=$scope.listeStat[j].nationalite;
                }
                else if ($scope.catChoisi=="Nature")
                {
                  statpart.nomEff=$scope.listeStat[j].nature;
                }
                else if ($scope.catChoisi=="Niveau")
                {
                  statpart.nomEff=$scope.listeStat[j].niveau;
                }
                else if ($scope.catChoisi=="Sexe")
                {
                  statpart.nomEff=$scope.listeStat[j].sexe;
                }
                else if ($scope.catChoisi=="Résultat")
                {
                  statpart.nomEff=$scope.listeStat[j].resultat;
                }
                else
                {
                  statpart.nomEff=$scope.listeStat[j].statut;
                }
                statpart.eff=1;
                tabresult.push(statpart);
              }
            }

            var nomGraph=[];
            var effGraph=[];
            for(var i=0;i<tabresult.length;i++)
            {
              tabDonnee=[];
              tabDonnee[0]=tabresult[i].nomEff;
              tabDonnee[1]=tabresult[i].eff;
              tabaff.push(tabDonnee);
              nomGraph.push(tabresult[i].nomEff);
              effGraph.push(tabresult[i].eff);
            }
        }

        if($scope.typeChart == "pie") {
            $scope.disableChoixAxe = true;
            Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Statistiques pour les critères choisis'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Pourcentage effectif total',
                    colorByPoint: true,
                    data: tabaff
                }]
            });
        }

        if($scope.typeChart == "bar") {
            $scope.disableChoixAxe = false;
                Highcharts.chart('container', {
                  chart: {
                        type: 'bar',
                        options3d: {
                            enabled: true,
                            alpha: 45,
                            beta: 0
                        }
                    },
                    title: {
                        text: ' '
                    },
                    tooltip: {
                        valueSuffix: ' étudiants'
                    },
                    plotOptions: {
                          bar: {
                              dataLabels: {
                                  enabled: true
                              }
                          }
                      },
                      credits: {
                          enabled: false
                      },
                     xAxis: {
                        categories: nomGraph
                         },
                    series: [{
                        type: 'bar',
                        name: 'Effectif Total',
                        data: effGraph
                    }]
              });
        }

        if($scope.typeChart == "column") {
            $scope.disableChoixAxe = false;

                Highcharts.chart('container', {
                  chart: {
                        type: 'column',
                    },
                    title: {
                        text: ' '
                    },
                    tooltip: {
                        valueSuffix: ' étudiants'
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                      yAxis: {
                          min: 0,
                          title: {
                              text: 'Effectifs'
                          }
                      },
                     xAxis: {
                        categories: nomGraph,
                        crosshair : true
                         },
                    series: [{
                        name: 'Effectif Total',
                        data: effGraph
                    }]
              });
        }
        if($scope.typeChart == "line") {
            $scope.disableChoixAxe = true;
            Highcharts.chart('container', {
                chart: {
            type: 'area',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: ' Diagramme des Effectifs Total par departement'
        },
        tooltip: {
            valueSuffix: ' étudiants'
        },
         xAxis: {
            categories: nomGraph
             },

        plotOptions: {
            area: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
         series: [{
            type: 'area',
            name: 'Effectifs Total',
            data: tabaff
        }]
            });
        }

    };


    window.addEventListener("change", function(){
        $scope.generateStat();
        console.log($scope.listeStat);
    });

});
