<?php

namespace App\Http\Controllers\Checkout;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Xendit\Xendit;
use App\Http\Services\Checkout\CheckoutService as Service;

class CheckoutController extends BaseController {

    public function index() {
        return View::make("v1/checkout/checkout");
    }


    public function onSubmit() {
        return View::make("v1/checkout/try-checkout");
    }


    public function create(Request $req) {
        $service = new Service();
        $createdInvoice = $service->createInvoice($req->all());

        return $createdInvoice;
    }
}