app.controller("timkiemspController", timkiemspController);
function timkiemspController($scope, $rootScope, $http, $routeParams) {
    $scope.timkiemsp = {keyword: ""};
    $scope.timkiemSanpham = function (key) {
        $http.get("/api/getproduct/" + key).then(function (res) {
            $scope._Products = res.data;
        });
    }

    
}