<!DOCTYPE html>
<?php
try {
    // Initialize Composer autoloader
    if (!file_exists($autoload = __DIR__ . '/vendor/autoload.php')) {
        throw new \Exception('Composer dependencies not installed. Run `make install --directory app/api`');
    }
    require_once $autoload;
    
    ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>University of South Florida 911 and E911 Disclosure, Notice, and Acknowledgement</title>
        <!-- Bootstrap -->
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="components/html5shiv/dist/html5shiv.js"></script>
            <script src="components/respond/dest/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h2 style="text-align: center">University of South Florida 911 and E911 Disclosure, Notice, and Acknowledgement ("Acknowledgement")</h2>
        <div id="section1">
            <p>
                You have been identified as a user of the Voice Over Internet Protocol ("VoIP") telephone service offered by the University of South Florida ("USF") (hereinafter "USF VoIP Service").
                The Federal Communications Commission ("FCC") has regulations that require USF, along with all VoIP service providers, to inform its users of any differences between the 911 and E911 
                access capabilites available with USF's Service ("VoIP 911 and E911 Service") as compared to the 911 and E911 access capabilites available with traditional wireless telephone service.
                It is important that you understand how these differences affect your ability to access 911 and E911 services. 
                In addition to the notice requirements, the FCC regulations require USF to obtain and keep a record on file showing that you have received the required notice and understand the 
                information contained in this Acknowledgement.
                USF asks that you carefully read this Acknowledgement.
                If you have any questions or concerns about the information contained in this Acknowledgement, or if you do not understand anything discussed in this Acknowledgement, 
                please contact USF Information Technology ("USF IT") at [ enter contact information ].
            </p>
            <p>
                Access to VoIP 911 and E911 Services can be limited and different from traditional wireline telephone 911 services in several important ways.
                Traditional 911 services automatically route your calls to a 911 dispatcher using special answering facilities at the local Public Safety Answering Point ("PSAP") for your geographic location.
                Traditional E911 services automatically provide to the PSAPs the calling party's call-back number and location. 
                If you are located in an areal where the emergency center does not support E911 (i.e., is not capable of simultaneously receiving your telephone number and address), you likely have basic 911 service.
            </p>
        </div>
        <?php
        // put your code here
        ?>
        <script src="components/jquery/jquery.min.js"></script>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>        
    <?php
} catch (Exception $ex) {

}
