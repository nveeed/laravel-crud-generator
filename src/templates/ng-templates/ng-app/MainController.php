'use strict';
angular.module("myApp").controller('MainController',MainController);

function MainController($http,$scope){
    $scope.subjects = [];
    $scope.loadingSubjects = false;
    $scope.form = {};

    $scope.loadSubjects = function () {
        $scope.loadingSubjects = true;
        $http.get("/subject?sort=id&sortType=desc").then(function (response) {
            $scope.subjects = response.data.data;
            $scope.loadingSubjects = false;
        });
    };

    $scope.loadSubjects();
}