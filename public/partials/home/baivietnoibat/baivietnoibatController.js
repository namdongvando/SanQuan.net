app.controller("baivietnoibatController", baivietnoibatController);
function baivietnoibatController($scope, $rootScope, $http, $routeParams) {
    $http.get("/api/baivietnoibat/").then(function (res) {
//        console.log(res);
        $scope.DSBaiVietNoiBat = res.data;
    });

}