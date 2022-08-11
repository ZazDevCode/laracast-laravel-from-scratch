<?php

/*** User: Sascha Wernars */

namespace App\Services;

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 * @package app\services
 */

class CovertKitNewsletter implements Newsletter{

    public function subscribe(string $email, string $list = null){
        // subscribe the user with ConvertKit-specific
        // API requests.
    }
}