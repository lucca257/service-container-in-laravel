<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use Illuminate\Http\Request;

class PayOrderControoler extends Controller
{
    public function store(){
        $paymentGateway = new PaymentGateway();
        dd($paymentGateway->charge(2500));
    }
}
