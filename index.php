<!DOCTYPE html>
<html>

<head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="app.js"></script>
</head>

<body ng-app="myApp">
        <div>
                <div ng-include="'navbar.php'"></div>
        </div>
        <div class="container">
                
                        <div ng-controller="datauser" >
                                <div ng-include="'formuser.html'"></div>
                                <div ng-include="'tableuser.html'"></div>
                        </div>
                

                <div ng-controller="datawarung">
                        <div ng-include="'formwarung.html'"></div>
                        <div ng-include="'tablewarung.html'"></div>
                </div>

                <div ng-controller="datalokasi">
                        <div ng-include="'formlokasi.html'"></div>
                        <div ng-include="'tablelokasi.html'"></div>
                </div>

        </div>
</body>

</html>
