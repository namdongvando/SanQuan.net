app.controller("productbycategoryController", productbycategoryController);function productbycategoryController($scope, $rootScope, $http, $routeParams) {    $scope.productbycategoryInit = function (catID) {        $scope._CurentCategory = catID;        $http.get("/mcategory/getCategoryByID/" + catID).then(function (res) {            $scope._Category = res.data;        });        $http.get("/mproduct/getProductsBycatID/" + catID).then(function (res) {            $scope._listProductByCatID = res.data;        });    };}