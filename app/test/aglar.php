<!DOCTYPE html>
<html lang="en" ng-app>
<head>
    <meta charset="UTF-8">
    <script src="../../plugin/angularjs/js/angular.js"></script>
    <title>Title</title>
</head>
<body>
<!--<input ng-model="name" type="text" placeholder="Your name">
<h1>Hello {{ name }}</h1>-->


<div ng-app="myApp">
 <p>{{name}}</p>
</div>

<?php echo 'PHP'; php?>
<script>
    $.module("myApp", [])
        .controller('MyController',
            function($scope) {
                $scope.name = "Ari";
            });

</script>
</body>
</html>