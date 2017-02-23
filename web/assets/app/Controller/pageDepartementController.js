app.controller('pageDepartementCtrl',['$scope', '$http',
    function($scope, $http) {
        this.idDepartement = "";
        $scope.$watch('idDepartement', function(newVal, oldVal) {
            this.idDepartement = newVal;
            $scope.global = true;
            $scope.chargement = true;
            $scope.chargement1 = true;
            $scope.nomFormation = "Globales";
            
            $http.get('/gestionScolarite/getAllDepartementFormation', {})
            .then(function(response) {
                $scope.listeFormations = [];
                $scope.listeFormations = response.data.listeFormation
            }, function(response) {
                console.log(response.data);
            });
              
            $scope.changeView = function() {
               if (angular.equals($scope.nomFormation,"Globales")) {
                    $scope.global = true;  
               }else {
                  $scope.global = false;
                  $scope.chargement1 = true;
                  $scope.afficheStatFormation();
               }
            } 
              
            $http.post('/gestionScolarite/getStatDepartement', {
                  'idDepartement' : this.idDepartement
            })
            .then(function(response) {
                $scope.chargement = false;
                  //stat par sexe pour le public
                $scope.genderChartObjectPub = {}; 
                $scope.genderChartObjectPub.type = "PieChart";
                $scope.genderChartObjectPub.data = {"cols": [
                    {id: "t", label: "Topping", type: "string"},
                    {id: "s", label: "Slices", type: "number"}
                ], "rows": [
                    {c: [
                        {v: "Masculin"},
                        {v: Number(response.data.nbMasculinPub)},
                    ]},
                    {c: [
                        {v: "Féminin"},
                        {v: Number(response.data.nbFemininPub)},
                    ]}
                ]};
                $scope.genderChartObjectPub.options = {
                    'title': 'Statistiques par sexe au sein du public'
                };
            
                //stat par sexe pour le privé
                $scope.genderChartObjectPrive = {}; 
                $scope.genderChartObjectPrive.type = "PieChart";
            
                $scope.genderChartObjectPrive.data = {"cols": [
                    {id: "t", label: "Topping", type: "string"},
                    {id: "s", label: "Slices", type: "number"}
                ], "rows": [
                    {c: [
                        {v: "Masculin"},
                        {v: Number(response.data.nbMasculinPrive)},
                    ]},
                    {c: [
                        {v: "Féminin"},
                        {v: Number(response.data.nbFemininPrive)},
                    ]}
                ]};
                $scope.genderChartObjectPrive.options = {
                    'title': 'Statistiques par sexe au sein du privé'
                };
                
                //stat par niveau pour le public
                $scope.niveauChartObjectPub = {}; 
                $scope.niveauChartObjectPub.type = "PieChart";
            
                $scope.niveauChartObjectPub.data = {"cols": [
                    {id: "t", label: "Topping", type: "string"},
                    {id: "s", label: "Slices", type: "number"}
                ], "rows": [
                    {c: [
                        {v: "Niveau 1"},
                        {v: Number(response.data.nbNiveau1Pub)},
                    ]},
                    {c: [
                        {v: "Niveau 2"},
                        {v: Number(response.data.nbNiveau2Pub)},
                    ]},
                    {c: [
                        {v: "Niveau 3"},
                        {v: Number(response.data.nbNiveau3Pub)},
                    ]}
                ]};
                $scope.niveauChartObjectPub.options = {
                    'title': 'Statistiques par niveau au sein du public'
                };
            
                //stat par niveau pour le privé
                $scope.niveauChartObjectPrive = {}; 
                $scope.niveauChartObjectPrive.type = "PieChart";
            
                $scope.niveauChartObjectPrive.data = {"cols": [
                    {id: "t", label: "Topping", type: "string"},
                    {id: "s", label: "Slices", type: "number"}
                ], "rows": [
                    {c: [
                        {v: "Niveau 1"},
                        {v: Number(response.data.nbNiveau1Prive)},
                    ]},
                    {c: [
                        {v: "Niveau 2"},
                        {v: Number(response.data.nbNiveau2Prive)},
                    ]},
                    {c: [
                        {v: "Niveau 3"},
                        {v: Number(response.data.nbNiveau3Prive)},
                    ]}
                ]};
                $scope.niveauChartObjectPrive.options = {
                    'title': 'Statistiques par niveau au sein du privé'
                };
                //stat par nationalité pour le public
                $scope.nationalityChartObjectPub = {}; 
                $scope.nationalityChartObjectPub.type = "PieChart";
            
                $scope.nationalityChartObjectPub.data = {"cols": [
                    {id: "t", label: "Topping", type: "string"},
                    {id: "s", label: "Slices", type: "number"}
                ], "rows": [
                    {c: [
                        {v: "Nationalité Sénégalaise"},
                        {v: Number(response.data.nbEtudiantSNPub)},
                    ]},
                    {c: [
                        {v: "Nationalité Etrangère"},
                        {v: Number(response.data.nbEtudiantEtrPub)},
                    ]}
                ]};
                $scope.nationalityChartObjectPub.options = {
                    'title': 'Statistiques par nationalité au sein du public'
                };
            
                //stat par nationalité pour le privé
                $scope.nationalityChartObjectPrive = {}; 
                $scope.nationalityChartObjectPrive.type = "PieChart";
            
                $scope.nationalityChartObjectPrive.data = {"cols": [
                    {id: "t", label: "Topping", type: "string"},
                    {id: "s", label: "Slices", type: "number"}
                ], "rows": [
                    {c: [
                        {v: "Nationalité Sénégalaise"},
                        {v: Number(response.data.nbEtudiantSNPrive)},
                    ]},
                    {c: [
                        {v: "Nationalité Etrangère"},
                        {v: Number(response.data.nbEtudiantEtrPrive)},
                    ]}
                ]};
                $scope.nationalityChartObjectPrive.options = {
                    'title': 'Statistiques par nationalité au sein du privé'
                };
                
                $scope.tauxReussiteChartObjectPub = {};
        
                $scope.tauxReussiteChartObjectPub.type = "ColumnChart";
                
                $scope.tauxReussiteChartObjectPub.data = {"cols": [
                    {id: "t", label: "Topping", type: "string"},
                    {id: "s", label: "Hommes", type: "number"},
                    {id: "s", label: "Femmes", type: "number"},
                ], "rows": [
                    {c: [
                        {v: "Année en cours"},
                        {v: Number(response.data.nbMasculinAnsEnCoursPub)},
                        {v: Number(response.data.nbFemininAnsEnCoursPub)}
                    ]},
                    {c: [
                        {v: "Passe"},
                        {v: Number(response.data.nbMasculinPassePub)},
                        {v: Number(response.data.nbFemininPassePub)}
                    ]},
                    {c: [
                        {v: "Redouble"},
                        {v: Number(response.data.nbMasculinRedoublePub)},
                        {v: Number(response.data.nbFemininRedoublePub)}
                    ]},
                    {c: [
                        {v: "Abandon"},
                        {v: Number(response.data.nbMasculinAbandonPub)},
                        {v: Number(response.data.nbFemininAbandonPub)}
                    ]},
                    {c: [
                        {v: "Exclu"},
                        {v: Number(response.data.nbMasculinExcluPub)},
                        {v: Number(response.data.nbFemininExcluPub)}
                    ]}
                ]};
            
                $scope.tauxReussiteChartObjectPub.options = {
                    'title': 'Statistiques taux de réussite au sein du public'
                };
                
                $scope.tauxReussiteChartObjectPrive = {};
        
                $scope.tauxReussiteChartObjectPrive.type = "ColumnChart";
                
                $scope.tauxReussiteChartObjectPrive.data = {"cols": [
                    {id: "t", label: "Topping", type: "string"},
                    {id: "s", label: "Hommes", type: "number"},
                    {id: "s", label: "Femmes", type: "number"},
                ], "rows": [
                    {c: [
                        {v: "Année en cours"},
                        {v: Number(response.data.nbMasculinAnsEnCoursPrive)},
                        {v: Number(response.data.nbFemininAnsEnCoursPrive)}
                    ]},
                    {c: [
                        {v: "Passe"},
                        {v: Number(response.data.nbMasculinPassePrive)},
                        {v: Number(response.data.nbFemininPassePrive)}
                    ]},
                    {c: [
                        {v: "Redouble"},
                        {v: Number(response.data.nbMasculinRedoublePrive)},
                        {v: Number(response.data.nbFemininRedoublePrive)}
                    ]},
                    {c: [
                        {v: "Abandon"},
                        {v: Number(response.data.nbMasculinAbandonPrive)},
                        {v: Number(response.data.nbFemininAbandonPrive)}
                    ]},
                    {c: [
                        {v: "Exclu"},
                        {v: Number(response.data.nbMasculinExcluPrive)},
                        {v: Number(response.data.nbFemininExcluPrive)}
                    ]}
                ]};
            
                $scope.tauxReussiteChartObjectPrive.options = {
                    'title': 'Statistiques taux de réussite au sein du privé'
                };
                }, function(response) {
                  console.log(response.data);
              });
      
              $scope.afficheStatFormation = function() {
                   $http.post('/gestionScolarite/getStatFormation', {
                  'formation' : $scope.nomFormation
                    })
                    .then(function(response) {
                        console.log(response.data)
                        $scope.chargement1 = false;
                          //stat par sexe pour le public
                        $scope.FormationgenderChartObjectPub = {}; 
                        $scope.FormationgenderChartObjectPub.type = "PieChart";
                        $scope.FormationgenderChartObjectPub.data = {"cols": [
                            {id: "t", label: "Topping", type: "string"},
                            {id: "s", label: "Slices", type: "number"}
                        ], "rows": [
                            {c: [
                                {v: "Masculin"},
                                {v: Number(response.data.nbMasculinPub)},
                            ]},
                            {c: [
                                {v: "Féminin"},
                                {v: Number(response.data.nbFemininPub)},
                            ]}
                        ]};
                        $scope.FormationgenderChartObjectPub.options = {
                            'title': 'Statistiques par sexe au sein du public'
                        };
                    
                        //stat par sexe pour le privé
                        $scope.FormationgenderChartObjectPrive = {}; 
                        $scope.FormationgenderChartObjectPrive.type = "PieChart";
                    
                        $scope.FormationgenderChartObjectPrive.data = {"cols": [
                            {id: "t", label: "Topping", type: "string"},
                            {id: "s", label: "Slices", type: "number"}
                        ], "rows": [
                            {c: [
                                {v: "Masculin"},
                                {v: Number(response.data.nbMasculinPrive)},
                            ]},
                            {c: [
                                {v: "Féminin"},
                                {v: Number(response.data.nbFemininPrive)},
                            ]}
                        ]};
                        $scope.FormationgenderChartObjectPrive.options = {
                            'title': 'Statistiques par sexe au sein du privé'
                        };
                        
                        //stat par niveau pour le public
                        $scope.FormationniveauChartObjectPub = {}; 
                        $scope.FormationniveauChartObjectPub.type = "PieChart";
                        $scope.FormationniveauChartObjectPub.data = {"cols": [
                            {id: "t", label: "Topping", type: "string"},
                            {id: "s", label: "Slices", type: "number"}
                        ], "rows": [
                            {c: [
                                {v: "Niveau 1"},
                                {v: Number(response.data.nbNiveau1Pub)},
                            ]},
                            {c: [
                                {v: "Niveau 2"},
                                {v: Number(response.data.nbNiveau2Pub)},
                            ]},
                            {c: [
                                {v: "Niveau 3"},
                                {v: Number(response.data.nbNiveau3Pub)},
                            ]}
                        ]};
                        $scope.FormationniveauChartObjectPub.options = {
                            'title': 'Statistiques par niveau au sein du public'
                        };
                    
                        //stat par niveau pour le privé
                        $scope.FormationniveauChartObjectPrive = {}; 
                        $scope.FormationniveauChartObjectPrive.type = "PieChart";
                        $scope.FormationniveauChartObjectPrive.data = {"cols": [
                            {id: "t", label: "Topping", type: "string"},
                            {id: "s", label: "Slices", type: "number"}
                        ], "rows": [
                            {c: [
                                {v: "Niveau 1"},
                                {v: Number(response.data.nbNiveau1Prive)},
                            ]},
                            {c: [
                                {v: "Niveau 2"},
                                {v: Number(response.data.nbNiveau2Prive)},
                            ]},
                            {c: [
                                {v: "Niveau 3"},
                                {v: Number(response.data.nbNiveau3Prive)},
                            ]}
                        ]};
                        $scope.FormationniveauChartObjectPrive.options = {
                            'title': 'Statistiques par niveau au sein du privé'
                        };
                        //stat par nationalité pour le public
                        $scope.FormationnationalityChartObjectPub = {}; 
                        $scope.FormationnationalityChartObjectPub.type = "PieChart";
                        $scope.FormationnationalityChartObjectPub.data = {"cols": [
                            {id: "t", label: "Topping", type: "string"},
                            {id: "s", label: "Slices", type: "number"}
                        ], "rows": [
                            {c: [
                                {v: "Nationalité Sénégalaise"},
                                {v: Number(response.data.nbEtudiantSNPub)},
                            ]},
                            {c: [
                                {v: "Nationalité Etrangère"},
                                {v: Number(response.data.nbEtudiantEtrPub)},
                            ]}
                        ]};
                        $scope.FormationnationalityChartObjectPub.options = {
                            'title': 'Statistiques par nationalité au sein du public'
                        };
                    
                        //stat par nationalité pour le privé
                        $scope.FormationnationalityChartObjectPrive = {}; 
                        $scope.FormationnationalityChartObjectPrive.type = "PieChart";
                    
                        $scope.FormationnationalityChartObjectPrive.data = {"cols": [
                            {id: "t", label: "Topping", type: "string"},
                            {id: "s", label: "Slices", type: "number"}
                        ], "rows": [
                            {c: [
                                {v: "Nationalité Sénégalaise"},
                                {v: Number(response.data.nbEtudiantSNPrive)},
                            ]},
                            {c: [
                                {v: "Nationalité Etrangère"},
                                {v: Number(response.data.nbEtudiantEtrPrive)},
                            ]}
                        ]};
                        $scope.FormationnationalityChartObjectPrive.options = {
                            'title': 'Statistiques par nationalité au sein du privé'
                        };
                        
                        $scope.FormationtauxReussiteChartObjectPub = {};
                
                        $scope.FormationtauxReussiteChartObjectPub.type = "ColumnChart";
                        
                        $scope.FormationtauxReussiteChartObjectPub.data = {"cols": [
                            {id: "t", label: "Topping", type: "string"},
                            {id: "s", label: "Hommes", type: "number"},
                            {id: "s", label: "Femmes", type: "number"},
                        ], "rows": [
                            {c: [
                                {v: "Année en cours"},
                                {v: Number(response.data.nbMasculinAnsEnCoursPub)},
                                {v: Number(response.data.nbFemininAnsEnCoursPub)}
                            ]},
                            {c: [
                                {v: "Passe"},
                                {v: Number(response.data.nbMasculinPassePub)},
                                {v: Number(response.data.nbFemininPassePub)}
                            ]},
                            {c: [
                                {v: "Redouble"},
                                {v: Number(response.data.nbMasculinRedoublePub)},
                                {v: Number(response.data.nbFemininRedoublePub)}
                            ]},
                            {c: [
                                {v: "Abandon"},
                                {v: Number(response.data.nbMasculinAbandonPub)},
                                {v: Number(response.data.nbFemininAbandonPub)}
                            ]},
                            {c: [
                                {v: "Exclu"},
                                {v: Number(response.data.nbMasculinExcluPub)},
                                {v: Number(response.data.nbFemininExcluPub)}
                            ]}
                        ]};
                    
                        $scope.FormationtauxReussiteChartObjectPub.options = {
                            'title': 'Statistiques taux de réussite au sein du public'
                        };
                        
                        $scope.FormationtauxReussiteChartObjectPrive = {};
                
                        $scope.FormationtauxReussiteChartObjectPrive.type = "ColumnChart";
                        
                        $scope.FormationtauxReussiteChartObjectPrive.data = {"cols": [
                            {id: "t", label: "Topping", type: "string"},
                            {id: "s", label: "Hommes", type: "number"},
                            {id: "s", label: "Femmes", type: "number"},
                        ], "rows": [
                            {c: [
                                {v: "Année en cours"},
                                {v: Number(response.data.nbMasculinAnsEnCoursPrive)},
                                {v: Number(response.data.nbFemininAnsEnCoursPrive)}
                            ]},
                            {c: [
                                {v: "Passe"},
                                {v: Number(response.data.nbMasculinPassePrive)},
                                {v: Number(response.data.nbFemininPassePrive)}
                            ]},
                            {c: [
                                {v: "Redouble"},
                                {v: Number(response.data.nbMasculinRedoublePrive)},
                                {v: Number(response.data.nbFemininRedoublePrive)}
                            ]},
                            {c: [
                                {v: "Abandon"},
                                {v: Number(response.data.nbMasculinAbandonPrive)},
                                {v: Number(response.data.nbFemininAbandonPrive)}
                            ]},
                            {c: [
                                {v: "Exclu"},
                                {v: Number(response.data.nbMasculinExcluPrive)},
                                {v: Number(response.data.nbFemininExcluPrive)}
                            ]}
                        ]};
                    
                        $scope.FormationtauxReussiteChartObjectPrive.options = {
                            'title': 'Statistiques taux de réussite au sein du privé'
                        };
                        }, function(response) {
                          console.log(response.data);
                      });
               }
        });
      
}]);