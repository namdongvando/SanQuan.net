app.controller("manageadminController", manageadminController);
function manageadminController($scope, $rootScope, $http, $routeParams) {

    $http.get("/profile/api/index").then(function (res) {
        $scope._admins = res.data;
    });

}