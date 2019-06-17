app.controller("tagsController", tagsController);
function tagsController($scope, $rootScope, $http, $routeParams) {
    $http.get("/api/gettags/").then(function (res) {
        $scope.Tags = res.data;
    });
}