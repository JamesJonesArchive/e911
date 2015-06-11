/**
 * Copyright 2015 University of South Florida
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

(function (window, angular, undefined) {
    'use strict';
    angular
    .module('e911App')
    .controller('e911Ctrl', ['$scope','$window','$routeParams','e911Service', function ($scope,$window,$routeParams,e911Service) { 
        if('id' in $routeParams) {
            $scope.id = $routeParams.id;
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
            e911Service.e911sign($scope.id).then(function(data){
                $scope.e911 = { e911: data.data };
                $window.parent.postMessage(JSON.stringify($scope.e911), "*");
            },function(response) {
                var data = response.data,
                    status = response.status;
                $scope.e911 = { e911: data };
                alert("Error! E911 Acknowledgement could not be updated"+JSON.stringify(response));
                $window.parent.postMessage(JSON.stringify($scope.e911), "*");
            });
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
                    $window.document.getElementById('acknowledge2').scrollIntoView();
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
                    $window.document.getElementById('acknowledge3').scrollIntoView();
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
                    $window.document.getElementById('acknowledge4').scrollIntoView();
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
                    $window.document.getElementById('acknowledge5').scrollIntoView();
                    break;
                case "fifth":
                    $scope.sections.fifthTop.pop('panel');
                    $scope.sections.fifthTop.pop('panel-default');
                    $scope.sections.fifthTop.push('well');
                    $scope.sections.fifthBottom.pop('panel-body');
                    $scope.sections.fifthDisabled = true;
                    
                    $scope.sections.submitDisabled = false;
                    $window.document.getElementById('acknowledgeSubmit').scrollIntoView();
                    break;
            }
        };
    }]);
    
})(window, window.angular);

