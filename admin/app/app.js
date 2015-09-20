var app = angular.module('myApp', ['ui.bootstrap']);

app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});
app.controller('evalCtrl', function ($scope, $http, $timeout) {
    $http.get('ajax/getData.php').success(function(data){
        $scope.list = data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 5; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;
    });
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function(data) {
        
        $timeout(function() { 
            
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };
    $scope.$broadcast('dataloaded');
});

app.directive('prettyHtml', ['$timeout', function ($timeout) {
    return function(scope, element, attrs) {
    $timeout(function(){
        prettyHTML();
        console.log('YO!');//debug
        
    });        
}
}]);