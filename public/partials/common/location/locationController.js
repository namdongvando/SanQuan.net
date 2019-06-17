app.controller("locationController", locationController);
function locationController($scope, $rootScope, $http, $routeParams) {

    function getlocalStorage(key, link) {
        var values = [];
        if (window.localStorage.getItem(key) == null) {
            $http({
                method: 'GET',
                async: false,
                url: link
            }).then(function(res) {
                window.localStorage.setItem(key, JSON.stringify(res.data));
                return res.data;
            });
        } else {
            values = JSON.parse(window.localStorage.getItem(key));
            $http({
                method: 'GET',
                async: false,
                url: link
            }).then(function(res) {
                window.localStorage.setItem(key, JSON.stringify(res.data));
            });
            return values;
        }
    }
    $scope.res = {
        "Provice": "32",
        "District": "33"
    };

//    $rootScope._Locations = getlocalStorage("_Locations", "/api/getLocation/");

//    if ($rootScope._Locations == null)
//    {
    $http.get("/api/getLocation/").then(function(res) {
        $rootScope._Locations = res.data;
    });
//    }
    $scope.getLocationByParent = function(id) {
        if ($rootScope._Locations) {
            return $rootScope._Locations.filter(function(item) {
                if (item.MaDiaChiCha == id)
                    return item;
            });
        }
        return [];
    };
    $scope.setLocationDefaut = function(Provice, District) {
        $scope.res = {
            "Provice": Provice,
            "District": District
        };
    };


}