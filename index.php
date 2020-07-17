<html ng-app="crudApp">  
<head>  
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>  
</head>  
<body>

<div ng-controller="crudCtrl">
    <table>
    <thead>
    <tr>
    <th>Name</th>
    <th>Phone</th>
    </tr>
    </thead>
    <tbody>

    <tr ng-repeat="x in columnsNames">
    <td>{{x.name}}</td>
    <td>{{x.phone}}</td>
    </tr>   
    
    </tbody>
    </table>   

</div>
</body>  
</html>

<script>
var app = angular.module('crudApp', []);
app.controller('crudCtrl', ["$scope", "$http", function($scope, $http){
    
        $http.get('read.php')
             .success(function(x){
                $scope.columnsNames = x;
        });
}]);

</script>

