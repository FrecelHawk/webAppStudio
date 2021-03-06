<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="../loading.php">
    <title>Title</title>
</head>
<body>


<div ng-controller="MyController">
    <input ng-model="to"
           type="email"
           placeholder="Recipient" />
    <textarea ng-model="emailBody"></textarea>
    <pre>{{ previewText }}</pre>
</div>


<script>

    angular.module('myApp', []).controller('MyController', function($scope, $interpolate) {
        // 设置监听
        $scope.$watch('emailBody', function(body) {
            if (body) {
                var template = $interpolate(body);
                $scope.previewText =
                        template({to: $scope.to});
            }
        });
    });
</script>
</body>
</html>