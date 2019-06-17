app.controller("dangtinController", dangtinController);
function dangtinController($scope, $rootScope, $http, $routeParams) {

    $scope.getHinhSanPham = function() {
        $http.get("/dangtin/listhinhApi/").then(function(res) {
            $scope.DSHinhSanPham = res.data;
//            console.log($scope.DSHinhSanPham);
        });
    }
    $scope.xoaHinh = function(id) {
        $http.get("/dangtin/xoahinh/" + id).then(function() {
            $scope.getHinhSanPham();
        });
    }



}