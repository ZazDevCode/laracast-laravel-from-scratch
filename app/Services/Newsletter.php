<?php

/*** User: Sascha Wernars */

namespace App\Services;

use MailchimpMarketing\ApiClient;

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 * @package app\services
 */

class Newsletter{
    public function subscribe(string $email, string $list = null){
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client()->lists->addListMember($list, [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }

    protected function client(){
        $mailchimp = new ApiClient();

        return $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => config('services.mailchimp.server')
        ]);
    }   
}