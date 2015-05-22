(function (window, angular, undefined) {
    'use strict';

    angular.module('e911App')
        .factory('e911Service', ['$http', function ($http) {
            var service = {
                e911sign: function (id) {
                    return $http.post('api/e911sign', {id: id});
                }
            };
            return service;
        }]);
})(window, window.angular);