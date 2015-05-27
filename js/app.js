(function (window, angular, undefined) {
    'use strict';

    angular
    .module('e911App', [
        'ngCookies',
        'ngResource',
        'ngSanitize',
        'ngRoute'
    ])
    .config(function ($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'views/e911.html',
                controller: 'e911Ctrl'
            })
            .when('/thanks', {
                templateUrl: 'views/thanks.html',
                controller: 'thanksCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
    });
})(window, window.angular);
