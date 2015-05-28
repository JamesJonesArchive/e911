<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace USF\e911;

use \JSend\JSendResponse;
use \USF\IdM\UsfConfig;
use \GuzzleHttp\Client;

/**
 * Description of e911services
 *
 * @author james
 */
class e911services {
    /**
     * Signs the disclosure by badge
     * 
     * @param type $encryptbadge
     * @return JSendResponse
     */
    public function e911sign($encryptbadge) {
        $config = new UsfConfig();
        $client = new Client([
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        try {
            $r = $client->post($config->e911Config['unaService'], [
                'body' => [
                    'service' => 'e911sign',
                    'request' => json_encode([ 'id' => $encryptbadge ])
                ]
            ]);
            return new JSendResponse('success', json_decode((string) $r->getBody(),true));        
        } catch (Exception $e) {
            return new JSendResponse('fail', [
                'request' => $e->getRequest(),
                'response' => ($e->hasResponse())?$e->getResponse():"",
                'message' => $e->getMessage()
            ]); 
        }
    }
}
