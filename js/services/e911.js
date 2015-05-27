(function (window, angular, undefined) {
    'use strict';

    angular.module('e911App')
        .factory('e911Service', ['$http', function ($http) {
            var service = {
                e911sign: function (una,id) {
                    return $http.post(una, {id: id,service: "e911sign"});
                }
            };
            return service;
        }]);
})(window, window.angular);