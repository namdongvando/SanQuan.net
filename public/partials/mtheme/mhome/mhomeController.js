app.controller("mhomeController", mhomeController);function mhomeController($scope, $rootScope, $http, $routeParams) {    $scope.Theme = "home1";    $http.get("/mpage/getPages/").then(function (res) {        $scope.ListPages = res.data;    });    $http.get("/backend/newsCategory/").then(function (res) {        $scope.newsCategory = res.data;    });    $scope.mhomeInit = function (theme, ConfigHome) {        $scope.Theme = theme;        $scope.Home = ConfigHome;    }    $scope.clickAdddisplayPosition = function () {        $scope.Home.displayPosition.push(                {                    DanhMuc: "29",                    Mau: "mau3"                }        );    }}