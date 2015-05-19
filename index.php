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
        <div id="section2">
            <p>Your use of USF's VoIP Services is subject to the following VoIP 911 and E911 Service limitations (please click "<mark>I Acknowledge</mark>" next to each limitation):</p>
            <dl class="dl-horizontal">
                <dt><button type="button" class="btn btn-primary btn-sm">I Acknowledge</button></dt>
                <dd>
                    EMERGENCY PERSONNEL MAY NOT BE ABLE TO IDENTIFY YOUR PHONE NUMBER IN ORDER TO CALL YOU BACK. PSAP and emergency personnel may not be able to identify your phone number in order to call you back 
                    if the call cannot be completed, is dropped or disconnected and/or if the USF VoIP Services or VoIP 911 or E911 Services is not operation for any reason.
                </dd>
                <dt><button type="button" class="btn btn-primary btn-sm">I Acknowledge</button></dt>
                <dd>
                    USF'S VOIP 911 AND E911 SERVICE CALLS MAY BE DELAYED OR DROPPED DUE TO NETWORK ARCHITECTURE OR LIMITATIONS. Due to technical constraints, there is a greater possibility of network congestion and/or 
                    reduced speed in the routing of a 911 call made utilizing your equipment as compared to traditional 911 dialing over traditional public switched telephone networks.
                </dd>
                <dt><button type="button" class="btn btn-primary btn-sm">I Acknowledge</button></dt>
                <dd>
                    VOIP 911 AND E911 SERVICE MAY NOT OPERATE DURING A POWER OUTAGE. Should there be an interruption in the power at your physical location or to the infrastructure supporting USF's VoIP Services, 
                    the VoIP 911 and E911 Service, will not function until power is restored and your equipment is reset, as required.
                </dd>
                <dt><button type="button" class="btn btn-primary btn-sm">I Acknowledge</button></dt>
                <dd>
                    USF'S VOIP 911 AND E911 SERVICE WILL NOT OPERATE IF YOUR NETWORK/INTERNET CONNECTION IS DISRUPTED. VoIP technology is provided through properly functioning network and/or Internet connectivity. 
                    Therefore, service outages, interruptions, network congestion or degradation, or termination or suspension for any reason, of network and/or Internet connectivity by your mobile wireless provider, 
                    local Internet service provider ("ISP"), or USF will prevent you from accessing USF's VoIP Service, including VoIP 911 and E911 Service.
                </dd>
                <dt><button type="button" class="btn btn-primary btn-sm">I Acknowledge</button></dt>
                <dd>
                    USF'S VOIP 911 AND E911 SERVICE CALLS MAY NOT COMPLETE OR MAY BE ROUTED TO EMERGENCY PERSONNEL WHO WILL NOT BE ABLE TO ASSIST IF YOU DISABLE, DAMAGE, MOVE THE EQUIPMENT TO A LOCATION OTHER THAN THE REGISTERED
                    BUSINESS ADDRESS ASSIGNED BY USF, OR ACCESS THE SERVICES FROM A REMOTE LOCATION, THROUGH A SOFTPHONE, OR ON A MOBILE DEVICE. VoIP 911 and E911 Service does not function if you move your equipment to 
                    a different street address or physical location (other than the registered address assigned by USF), or access it through a softphone (a software application that allows you to make telephone calls 
                    via the Internet), wireless, or remote network connection, or through a mobile devices. Failure to access the USF VoIP service from your registered business address may result in any 911 call you make 
                    being routed to the incorrect local emergency service provider and emergency personnel being dispatched to the incorrect location.
                </dd>
            </dl>
        </div>
        <div id="section3">
            <p>
                It is important to understand that while USF makes commercially reasonable efforts to provide reliable access to 911 and E911 to users of the USF VoIP service, VoIP services have inherent limitations 
                due to the networks, systems, and technology relied upon to implement such services as well as the mobile access capabilities of such services, all of which are beyond USF's control.
            </p>
            <p>
                USF DOES NOT HAVE ANY CONTROL OVER WHETHER, OR THE MANNER IN WHICH, 911 CALLS USING THE USF'S VOIP SERVICE AND THE VOIP 911 AND E911 SERVICE ARE ANSWERED OR ADDRESSED BY ANY LOCAL EMERGENCY RESPONSE CENTER. 
                USF DISCLAIMS ALL RESPONSIBILITY FOR THE CONDUCT OF LOCAL EMERGENCY RESPONSE CENTERS AND THE NATIONAL EMERGENCY RESPONSE CALLING CENTER.
            </p>
            <p class="lead">
                <strong>By completing and submitting the Acknowledgement, you certify that you have received and understand the information contained in this Acknowledgement.</strong>
            </p>
        </div>
        <div id="submit">
            <button type="button" class="btn btn-primary btn-lg btn-block">Submit</button>
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
