(function (window, angular, undefined) {
    'use strict';
    angular
    .module('e911App')
    .controller('e911Ctrl', ['$scope','$routeParams','e911Service', function ($scope,$routeParams,e911Service) { 
        if('id' in $routeParams) {
            $scope.id = $routeParams.id;
        }
        $scope.acknowlegements = [];
        $scope.acknowledge = function(type) {
            if(!(type in $scope.acknowlegements)) {
                $scope.acknowlegements.push(type);
            }
        };
        $scope.isAcknowledged = function(type) {
            return (type in $scope.acknowlegements);
        };
        $scope.e911sign = function() {
            // alert($scope.id);
            e911Service.e911sign($scope.id).
            success(function(data, status, headers, config) {
              // this callback will be called asynchronously
              // when the response is available
            }).
            error(function(data, status, headers, config) {
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });
        };
    }]);
    
})(window, window.angular);

