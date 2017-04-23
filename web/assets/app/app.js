'use strict';
var app = angular.module('gestionScolorite', ['googlechart','datatables','datatables.buttons','ngMaterial']);

app.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})
