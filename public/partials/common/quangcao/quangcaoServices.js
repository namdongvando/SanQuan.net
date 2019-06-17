app.service('quangcaoServices', function ($http) {
    this.getQuangCaoByPosition = function (position) {
        return $http.get("/api/quangcao/" + position);
    }
});
