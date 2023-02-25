<?php

namespace App\Billing;

use Illuminate\Support\Str;


class BankPaymentGateway
{
  private $currency;
  private $discount;
  public function __construct($currency)
  {
      $this->currency = $currency;
      $this->discount = 0;
  }

  public function charge($amount){
    return [
        'amount'=>$amount - $this->discount,
        'confirmation_order'=>Str::random(),
        'currency'=>$this->currency,
        'discount'=>$this->discount,
    ];
  }

  public function setDiscount($discount){
    $this->discount = $discount;
  }
}
