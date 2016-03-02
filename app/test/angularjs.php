<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="loading.html">
    <title>Title</title>
</head>
<body>
<!--   <input ng-model="name" type="text" placeholder="Your name">
  <h1>Hello {{ name }}</h1>-->
<div ng-controller="MyController">
    <input ng-model="to"
           type="email"
           placeholder="Recipient" />
    <textarea ng-model="emailBody"></textarea>
    <pre>{{ previewText }}</pre>
</div>
<button  onclick="jumpB()">jumpB</button>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo  "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo  $_SERVER['SERVER_NAME'];
echo  "<br>";
echo $_SERVER['PATH_TRANSLATED'];
?>
</body>


<script>

     /*    angular.module('test', [])
     .run(function($rootScope) {
     $rootScope.name = "World";
     });*/

     function jumpB(){
         window.location.href="../app/B.html";
     }

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
</html>