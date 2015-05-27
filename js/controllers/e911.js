(function (window, angular, undefined) {
    'use strict';
    angular
    .module('e911App')
    .controller('e911Ctrl', ['$scope','$window','$location','$routeParams','e911Service', function ($scope,$window,$location,$routeParams,e911Service) { 
        if('id' in $routeParams) {
            $scope.id = $routeParams.id;
            $scope.una = $routeParams.una;
        }
        $scope.sections = {
            firstTop: ['panel', 'panel-default'],
            firstBottom: ['panel-body'],
            firstDisabled: false,
            secondTop: ['well'],
            secondBottom: [],
            secondDisabled: true,
            thirdTop: ['well'],
            thirdBottom: [],
            thirdDisabled: true,
            fourthTop: ['well'],
            fourthBottom: [],
            fourthDisabled: true,
            fifthTop: ['well'],
            fifthBottom: [],
            fifthDisabled: true,
            submitDisabled: true
        };
        $scope.e911sign = function() {
                $window.parent.jQuery('.jqmOverlay').css('display', 'none');
                $window.parent.jQuery('#e911div').css('display', 'none');
                // $window.parent.jQuery('#it_main').css('display', 'none').css('display','block');
            
// $window.parent.jQuery('a#e911_close').trigger('click');
//            e911Service.e911sign($scope.una,$scope.id).
//            success(function(data, status, headers, config) {
//                
//                
//              // this callback will be called asynchronously
//              // when the response is available
//            }).
//            error(function(data, status, headers, config) {
//              // called asynchronously if an error occurs
//              // or server returns response with an error status.
//            });
        };
        $scope.acknowledgeClasses = function(type) {
            switch(type) {
                case "first":
                    $scope.sections.firstTop.pop('panel');
                    $scope.sections.firstTop.pop('panel-default');
                    $scope.sections.firstTop.push('well');
                    $scope.sections.firstBottom.pop('panel-body');
                    $scope.sections.firstDisabled = true;
                    $scope.sections.secondTop.pop('well');
                    $scope.sections.secondTop.push('panel');
                    $scope.sections.secondTop.push('panel-default');
                    $scope.sections.secondBottom.push('panel-body');
                    $scope.sections.secondDisabled = false;
                    break;
                case "second":
                    $scope.sections.secondTop.pop('panel');
                    $scope.sections.secondTop.pop('panel-default');
                    $scope.sections.secondTop.push('well');
                    $scope.sections.secondBottom.pop('panel-body');
                    $scope.sections.secondDisabled = true;
                    
                    $scope.sections.thirdTop.pop('well');
                    $scope.sections.thirdTop.push('panel');
                    $scope.sections.thirdTop.push('panel-default');
                    $scope.sections.thirdBottom.push('panel-body');
                    $scope.sections.thirdDisabled = false;
                    break;
                case "third":
                    $scope.sections.thirdTop.pop('panel');
                    $scope.sections.thirdTop.pop('panel-default');
                    $scope.sections.thirdTop.push('well');
                    $scope.sections.thirdBottom.pop('panel-body');
                    $scope.sections.thirdDisabled = true;
                    
                    $scope.sections.fourthTop.pop('well');
                    $scope.sections.fourthTop.push('panel');
                    $scope.sections.fourthTop.push('panel-default');
                    $scope.sections.fourthBottom.push('panel-body');
                    $scope.sections.fourthDisabled = false;
                    break;
                case "fourth":
                    $scope.sections.fourthTop.pop('panel');
                    $scope.sections.fourthTop.pop('panel-default');
                    $scope.sections.fourthTop.push('well');
                    $scope.sections.fourthBottom.pop('panel-body');
                    $scope.sections.fourthDisabled = true;
                    
                    $scope.sections.fifthTop.pop('well');
                    $scope.sections.fifthTop.push('panel');
                    $scope.sections.fifthTop.push('panel-default');
                    $scope.sections.fifthBottom.push('panel-body');
                    $scope.sections.fifthDisabled = false;
                    break;
                case "fifth":
                    $scope.sections.fifthTop.pop('panel');
                    $scope.sections.fifthTop.pop('panel-default');
                    $scope.sections.fifthTop.push('well');
                    $scope.sections.fifthBottom.pop('panel-body');
                    $scope.sections.fifthDisabled = true;
                    
                    $scope.sections.submitDisabled = false;
                    break;
            }
        };
    }]);
    
})(window, window.angular);

