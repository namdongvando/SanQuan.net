app.controller("userinforController", userinforController);
function userinforController($scope, $rootScope, $http, $routeParams, $UserInfor) {

    $scope._ChungLoaiSanPham = [];
    $http.get("/user/api/UserInfor").then(function (res) {
        $scope.DangNhap = res.data;
//        console.log($scope.DangNhap);
        $http.get("/api/getLocation/0").then(function (res) {
            $scope._City = res.data;
        });
        $http.get("/api/getLocation/" + $scope.DangNhap.CityCode).then(function (res) {
            $scope._Provice = res.data;
        });
    });
    $scope.CityChange = function (CityCode) {
        $http.get("/api/getLocation/" + CityCode).then(function (res) {
            $scope._Provice = res.data;
            $scope.DangNhap.ProviceCode = $scope._Provice[0].id;
        });
    }
    $scope.User = {
        "Password": ""
        , "NewPassword": ""
        , "RePassword": ""
    }

    $scope.btnClickGetView = function (url, id) {
        $UserInfor.getViewByUrl(url, id);
    }

//
    $scope.getAllCategorys4IDParent = function (id) {
        $UserInfor.getAllCategorys4IDParent(id).then(function (res) {
            $scope._LoaiSanPham = res.data;
        });
    }

    $UserInfor.getAllCategorys4IDParent(0).then(function (res) {
        $scope._ChungLoaiSanPham = res.data;
    });

    $UserInfor.getProductByUsername().then(function (res) {
        $scope.ProdcutByUsername = res.data;
    });

    $UserInfor.SumProductUser().then(function (res) {
        $scope._DanhSachSanPham = res.data;
    });

    $scope.DriverByUser = function () {
        $UserInfor.DriverByUser().then(function (res) {
            $scope._DriverByUser = res.data;
        });
    }
    $scope.ImgByUserProduct = function () {

    }
    $scope.DriverByUser();

    $scope.LoadProduct = function (id) {
        $UserInfor.getProductById(id).then(function (res) {
            $scope._ProductById = res.data;
            $("#SanPham #NoiDung").html(htmlDecode($scope._ProductById.Content));
            $("#SanPham #Summary").html(htmlDecode($scope._ProductById.Summary));
        })
    }
    function htmlDecode(input) {
        var e = document.createElement('div');
        e.innerHTML = input;
        return e.childNodes[0].nodeValue;
    }
    $scope.StatusProduct = function (id) {
        if (id == -1) {
            return  'Từ chối';
        }
        if (id == 0)
            return  'Chờ duyệt';
        if (id == 1)
            return  'Đang Hiện';
    }
//
//    $http.get("/api/DSTinh/0").then(function (res) {
//        $scope._DSTinh = res.data;
//    });
//    $scope.DSHuyenTheoTinh = function (Tinh) {
//        $http.get("/api/DSHuyen/" + Tinh).then(function (res) {
//            $scope._DSHuyen = res.data;
//        });
//    }


}

