//app.controller("owlController", owlController);
//function owlController($scope, $rootScope, $http, $routeParams) {
//    $http.get("/api/DSSanPhamNoiBat/").then(function (res) {
//        $scope._DuAnMoi = res.data;
//    });
//}

app.controller('owlController', function ($scope, $http) {
    $http.get("/api/DSSanPhamNoiBat/").then(function (res) {
        $scope._DuAnMoi = res.data;
    });
}).directive("owlCarousel", function () {
    return {
        restrict: 'AEC',
        transclude: false,
        link: function (scope) {
            scope.initCarousel = function (element) {
                // provide any default options you want
                $(element).owlCarousel({
                    loop: false,
                    margin: 20,
                    nav: false,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            };
        }
    };
}).directive('owlCarouselItem', [function () {
        return {
            restrict: 'AEC',
            transclude: false,
            link: function (scope, element) {
                // wait for the last item in the ng-repeat then call init
                if (scope.$last) {
                    scope.initCarousel(element.parent());
                }
            }
        };
    }]);




