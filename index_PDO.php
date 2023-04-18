<?php

use App\Controllers\WithdrawController;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawTypeEnum;

require "vendor/autoload.php";

$withdraw_controller = new WithdrawController();
/*
// Usando exec no muy seguro
$withdraw_controller->store([
    "payment_method" => PaymentMethodEnum::CreditCard->value,
    "type" => WithdrawTypeEnum::Purchase->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 1000,
    "description" => "Compra de comida semanal"
]);
*/



// Usando prepare mas seguro 
$withdraw_controller->store([
    ":payment_method" => PaymentMethodEnum::CreditCard->value,
    ":type" => WithdrawTypeEnum::Purchase->value,
    ":date" => date("Y-m-d H:i:s"),
    ":amount" => 1000,
    ":description" => "Compra de comida semanal"
]);

?>