app.service("$UserInfor", UserInfor);
app.service("$DoHttp", DoHttp);
//app.factory('Interceptor', Interceptor).config(function ($httpProvider) {
//            $httpProvider.interceptors.push('Interceptor'); 
//        });
//function Interceptor() {
//    return {
//        request: function (config) {
//            config.headers['Authorization'] = "Bearer " + "asdas";
//            return config;
//        },
//        requestError: function (config) {
//            return config;
//        },
//        response: function (res) {
//            return res;
//        },
//        responseError: function (res) {
//            return res;
//        }
//    }
//}

function UserInfor($DoHttp) {
    this.getUserInfor = function () {
        var url = "/user/api/getTocken";
        return $DoHttp._get(url);
    }
    this.getProductById = function (id) {
        var url = "/api/getProductByID/" + id;
        return $DoHttp._get(url);
    }
    this.DriverByUser = function () {
        var url = "/user/api/DriverByUser/";
        return $DoHttp._get(url);
    }
    this.ImgSanPhamById = function (id) {
        var url = "/user/api/ImgSanPhamById/" + id;
        return $DoHttp._get(url);
    }
    this.clearImgtemp = function (id) {
        var url = '/user/api/clearImgtemp/?item=' + id;
        return $DoHttp._get(url);
    }
    this.clearImgtempProduct = function (idProduct, id) {
        var url = '/user/api/clearImgByidProduct/?id=' + idProduct + '&item=' + id;
        return $DoHttp._get(url);
    }
    this.getAllCategorys4IDParent = function (id) {
        var url = "/api/categoryByParent/" + id;
        return $DoHttp._get(url);
    }
    this.SumProductUser = function () {
        var url = "/user/api/SumProductUser/";
        return $DoHttp._get(url);
    }

    this.getProductByUsername = function () {
        var url = "/user/api/getProductByUserName/";
        return $DoHttp._get(url);
    }
    this.getProductByUsernameAndPage = function (page) {
        var url = "/user/api/getProductByUserName/" + page;
        return $DoHttp._get(url);
    }
    this.getViewByUrl = function (url, id) {
        $DoHttp._get(url).then(function (res) {
            document.getElementById(id).innerHTML = res.data;
        });
    }
}
function DoHttp($http) {
    this.header = {
    }
    this._get = function (url) {
        return $http.get(url, this.header);
    }
    this._post = function (url) {
        return $http.post(url, this.header);
    }

}
