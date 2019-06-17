app.controller("pagesController", pagesController);
function pagesController($scope, $rootScope, $http, $routeParams) {
    $http.get("/mpage/getPages/").then(function (res) {
        $scope.ListPages = res.data;

    });

}