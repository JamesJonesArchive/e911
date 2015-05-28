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
class e911services extends \USF\IdM\UsfNamsDatabase {
    function __construct() {
        parent::__construct();
    }
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
        return new JSendResponse('success', $client->post($config->e911Config->unaService, [
            'json' => [
                'service' => 'e911sign',
                'id' => $encryptbadge
            ]
        ])->json());        
    }
    /**
     * Checks to see if the E911 Disclosure was already signed
     * 
     * @param type $badge
     * @return JSendResponse
     */
    public function hase911signed($badge) {
        $count = $this->db->count("e911", [
            "badge" => $badge
        ]);
        return new JSendResponse('success', [
            "signed" => ($count > 0)
        ]);
    }
}
