app.controller("contentpagesController", contentpagesController);
function contentpagesController($scope, $rootScope, $http, $routeParams) {
    $scope.contentpagesGroupInit = function (id, target) {
        $http.get("/api/getContentPagesByGroup/" + id).then(function (res) {
            $scope.__Content = res.data;
            $(target).html($scope.__Content);
        });
    }

}