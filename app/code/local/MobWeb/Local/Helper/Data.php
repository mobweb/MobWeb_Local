<?php

class MobWeb_Local_Helper_Data extends Mage_Core_Helper_Abstract {

    public function getDevelopmentEnvironment() {

        // Match the base URL against known strings indicating a certain development environment
        $baseUrl = Mage::getBaseUrl();

        if((strpos($baseUrl, '.local') !==  false) || (strpos($baseUrl, '.dev') !==  false) || (strpos($baseUrl, 'development') !==  false)) {
            return 'development';
        }

        if((strpos($baseUrl, 'staging') !==  false) || (strpos($baseUrl, '.maxcluster.net') !==  false)) {
            return 'staging';
        }

        return 'production';
    }
}