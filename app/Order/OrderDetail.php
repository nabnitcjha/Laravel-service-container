<?php

namespace App\Order;

use Illuminate\Support\Str;
use App\Billing\BankPaymentGateway;


class OrderDetail
{
  private $bankPaymentGateway;
  public function __construct(BankPaymentGateway $bankPaymentGateway)
  {
      $this->bankPaymentGateway = $bankPaymentGateway;
  }

  public function all(){
    $this->bankPaymentGateway->setDiscount(500);

    return [
        'name'=>'sonu jha',
        'address'=>'nepal'
    ];
  }
}
