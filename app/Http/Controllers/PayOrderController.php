<?php

namespace App\Http\Controllers;

use App\Billing\BankPaymentGateway;
use App\Order\OrderDetail;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetail $orderDetail, BankPaymentGateway $bankPaymentGateway){
        // $paymentGateway = new PaymentGateway();
        $order = $orderDetail->all();
        return $bankPaymentGateway->charge('50');
    }
}
