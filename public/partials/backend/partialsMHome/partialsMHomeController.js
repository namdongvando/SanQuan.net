app.controller("partialsMHomeController", partialsMHomeController);
function partialsMHomeController($scope, $rootScope, $http, $routeParams) {
    $scope.partialsMHomeControllerint = function (Type) {
        $scope.Type = Type;
        $http.get("/backend/getMau").then(function (res) {
            $scope.ListType = res.data;
        });
    }
    
    $scope.clickChangeType = function (item) {
        alert(item);
    }
    



}