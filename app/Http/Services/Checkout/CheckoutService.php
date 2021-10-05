<?php

namespace App\Http\Services\Checkout;

use Xendit\Xendit;

class CheckoutService {

    function __construct() {
        Xendit::setApiKey(env('API_KEY'));
    }

    public function createInvoice($args) {
        $date = new \DateTime();
        $redirectUrl = '';
        $defParams = [
            'external_id' => 'lar8-checkout-demo-' . $date->getTimestamp(),
            'payer_email' => 'invoice+demo@xendit.co', 
            'description' => 'Laravel 8 Checkout Demo', 
            'failure_redirect_url' => $redirectUrl, 
            'success_redirect_url' => $redirectUrl
        ];

        $data = json_decode(json_encode($args), true);
        $defParams['failure_redirect_url'] = $data['redirect_url'];
        $defParams['success_redirect_url'] = $data['redirect_url'];
        $params = array_merge($defParams, $data);

        Xendit::setApiKey(env('API_KEY'));

        $createdInvoice = \Xendit\Invoice::create($params);
        logger($createdInvoice);
        return $createdInvoice;
    }
}