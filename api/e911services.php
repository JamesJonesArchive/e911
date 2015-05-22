<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace USF\e911;

use \USF\IdM\UsfEncryption;
use \JSend\JSendResponse;
use \USF\IdM\UsfConfig;

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
        //Access configuration values from default location (/usr/local/etc/idm_config)
        $config = new UsfConfig();
        $badge = (int) substr(UsfEncryption::decrypt($config->aesConfig->e911, $encryptbadge),8);
        $alreadysigned = $this->hase911signed($badge);
        if($alreadysigned->getData()["signed"]) {
            return new JSendResponse('success', [
                "signed" => false
            ]);
        } else {
            $this->db->insert("e911", [
                "badge" => $badge
            ]);
            return new JSendResponse('success', [
                "signed" => true
            ]);
        }
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
