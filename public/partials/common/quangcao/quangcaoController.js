app.controller("quangcaoController", quangcaoController);function quangcaoController($scope, $rootScope, $http, $routeParams) {    $scope.loadQuangCao = function (Vitri) {        $http.get("/api/quangcao/" + Vitri).then(function (res) {            $scope.DSQuangCao = res.data;        });    }}