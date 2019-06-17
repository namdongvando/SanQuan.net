app.controller("backendController", backendController);
function backendController($scope, $rootScope, $http, $routeParams) {

//    $http.get("/unit/").then(function (res) {

//    });
    $scope.DSStatus = [
        "Hủy"
                , "Thất bại"
                , "Thành Công"
                , "Đang xử lý"
                , "Mới Đặt"
    ];
    $scope.ShowStatus = function (status) {
        return $scope.DSStatus[status];
    }
    $scope.VieworderInit = function (page, status) {
        $http.get("/cart/vieworder/dsorderstatus/" + page + "/" + status).then(function (res) {
            $scope.DSOrder = res.data;

        });
    }
    $scope.VieworderSearch = function (key) {
        $http.get("/cart/vieworder/viewordersearch/" + key).then(function (res) {
            $scope.DSOrder = res.data;

        });
    }

    $http.get('').then(function (res) {
        
    });

}