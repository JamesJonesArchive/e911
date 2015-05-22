(function (window, angular, undefined) {
    'use strict';
    angular
    .module('e911App')
    .controller('e911Ctrl', ['$scope','$routeParams', function ($scope,$routeParams) { 
        alert(JSON.stringify($routeParams));
        if('id' in $routeParams) {
            $scope.id = $routeParams.id;
            alert($scope.id);
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
    }]);
    
})(window, window.angular);

