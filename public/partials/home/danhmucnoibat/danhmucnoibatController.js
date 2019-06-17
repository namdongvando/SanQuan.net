app.controller("danhmucnoibatController", danhmucnoibatController);
function danhmucnoibatController($scope, $rootScope, $http, $routeParams) {
    $scope.danhmucnoibatInit = function (key, num) {
        $http.get("/api/NewsCategoryInHome/" + key + "/" + num).then(function (res) {
            $scope.danhmucnoibatData = res.data;
//            console.log(res.data);
        });
    }

}