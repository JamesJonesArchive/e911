<?php
//ini_set('display_errors',1);
//ini_set('display_startup_errors',1);
//error_reporting(-1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {
// Initialize Composer autoloader
    if (!file_exists($autoload = __DIR__ . '/vendor/autoload.php')) {
        throw new \Exception('Composer dependencies not installed. Run `make install --directory app/api`');
    }
    require_once $autoload;
    // Initialize Slim Framework
    if (!class_exists('\\Slim\\Slim')) {
        throw new \Exception(
        'Missing Slim from Composer dependencies.'
        . ' Ensure slim/slim is in composer.json and run `make update --directory app/api`'
        );
    }
    $app = new \Slim\Slim();
    $app->post('/e911sign', function() use($app) {
        $e911services = new \USF\e911\e911services();
        $signbody = json_decode($app->request->getBody(), true);
        if (array_key_exists('id', $signbody)) {
            $resp = $e911services->e911sign($signbody["id"]);
            $app->response->headers->set('Content-Type', 'application/json');
            $app->response->setBody($resp->encode());
        } else {
//            $resp = $e911services->e911sign('EDSfMJgt5E8DJIebTJnynWcrGktiHkFD/Xp0ZjyPP9/Dk6JkvoIvdP57J8TMgH115Dd7PM2+mPBvGgw1sKP2lA==');
            $app->response->headers->set('Content-Type', 'application/json');
//            $app->response->setBody($resp->encode());
            $app->response->setBody((new \JSend\JSendResponse('fail', [
                'e911sign' => false
            ]))->encode());
        }
    });
    $app->run();
    
} catch(\Exception $ex) {
    http_response_code(500);
    header('Content-Type: application/json');
    error_log($ex->getMessage());
    echo json_encode(array(
        'status' => 500,
        'statusText' => 'Internal Server Error',
        'description' => $ex->getMessage(),
    ));    
}
