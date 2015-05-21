<!DOCTYPE html>
<?php
use USF\auth;
try {
    // Initialize Composer autoloader
    if (!file_exists($autoload = __DIR__ . '/vendor/autoload.php')) {
        throw new \Exception('Composer dependencies not installed. Run `make install --directory app/api`');
    }
    require_once $autoload;
    use USF\auth;
    ?>
<html lang="en" ng-app="e911App">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>University of South Florida 911 and E911 Disclosure, Notice, and Acknowledgement</title>
        <!-- Bootstrap -->
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/e911.css" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="components/html5shiv/dist/html5shiv.js"></script>
            <script src="components/respond/dest/respond.min.js"></script>
        <![endif]-->
        <script src="components/angularjs/angular.min.js"></script>
        <script src="components/angularjs/angular-animate.js"></script>
        <script src="components/angularjs/angular-route.js"></script>
        <script src="components/angularjs/angular-resource.js"></script>
        <script src="components/angularjs/angular-sanitize.js"></script>
        <script src="components/angularjs/angular-cookies.js"></script>
        <script src="js/app.js"></script>
        <script src="js/controllers/e911.js"></script>
    </head>
    <body>
        <div class="view-container">
            <div ng-view class="view-frame"></div>
        </div>
        <script src="components/jquery/jquery.min.js"></script>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>        
    <?php
} catch (Exception $ex) {

}
