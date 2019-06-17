app.controller("combomanageController", combomanageController);
function combomanageController($scope, $rootScope, $http, $routeParams) {
    $scope.timKiemSanPhamByKey = {keyword: ""};
    $scope.ComboID = 0;

    $scope.combomanageInit = function (idCombo) {
        $scope.ComboID = idCombo;
        $http.get("/api/getproductByCombo/" + idCombo).then(function (res) {
            $scope._ProductsByCombo = res.data;
        });

    }
    $scope.eventSeachByKey = function (key) {
        $http.get("/api/getproduct/" + key).then(function (res) {
            $scope._Products = res.data;
        });
    }
    $scope.addProduct2Combo = function (combo) {
        $http.get("/combo/combodetail/addproduct2combo/" + $scope.ComboID + "/" + combo.ID + "/" + combo.number + "/g").then(function (res) {
            $scope.combomanageInit($scope.ComboID);
        });
    }
    $scope.removeProduct2Combo = function (id) {
        if (confirm("Bạn có muốn xóa sản phẩm này?")) {
            $http.get("/combo/combodetail/removeproduct2combo/" + id).then(function (res) {
                $scope.combomanageInit($scope.ComboID);
            });
        }
    }

}