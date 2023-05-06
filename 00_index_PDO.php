<?php
use App\Controllers\WithdrawController;
use App\Controllers\IncomesController;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawTypeEnum;
use App\Enums\IncomeTypeEnum;

require "vendor/autoload.php";

$withdraw_controller = new WithdrawController();
$incomes_controller = new IncomesController();

//-------------------------store-----------------------------------
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

/*
// Usando prepare mas seguro 
$withdraw_controller->store([
    ":payment_method" => PaymentMethodEnum::CreditCard->value,
    ":type" => WithdrawTypeEnum::Purchase->value,
    ":date" => date("Y-m-d H:i:s"),
    ":amount" => 1000,
    ":description" => "Ahorro"
]);
*/
//------------------------------------------------------------------


//--------------------------index-----------------------------------
// $withdraw_controller->index()
//------------------------------------------------------------------

//--------------------------create----------------------------------
// 
//------------------------------------------------------------------

//--------------------------store-----------------------------------
$incomes_controller->store([
    "payment_method" => PaymentMethodEnum::Deposit->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 8300,
    "description" => "Pago por salario semanal"
]);
//-----------------------------------------------------------------

//--------------------------show-----------------------------------
// $withdraw_controller->show(8);
//-----------------------------------------------------------------

//--------------------------edit-----------------------------------
// 
//-----------------------------------------------------------------

//--------------------------update---------------------------------
// 
//-----------------------------------------------------------------

//--------------------------destroy--------------------------------
// $withdraw_controller->destroy(7);
//-----------------------------------------------------------------
?>