<?php
use App\Controllers\WithdrawController;
use App\Controllers\IncomesController;

use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawTypeEnum;
use App\Enums\IncomeTypeEnum;

require "vendor/autoload.php";

$incomes_controller = new IncomesController();
$withdraw_controller = new WithdrawController();


//--------------------------index-----------------------------------
// ********** incomesController Usando prepare ********** //
//
//$incomes_controller->index();
//$withdraw_controller->index();
//------------------------------------------------------------------



//--------------------------create----------------------------------

//------------------------------------------------------------------



//-------------------------store-----------------------------------
// ********** incomesController Usando prepare ********** //
/*
$incomes_controller->store([
    "payment_method" => IncomeTypeEnum::Salary->value,
    "type" => IncomeTypeEnum::Deposit->value,
    "date" => date("2023-05-13 18:10:00"),
    "amount" => 8000,
    "description" => "Weekly pay deposit"
]);
*/

/*
$withdraw_controller->store([
    "payment_method" => PaymentMethodEnum::Cash->value,
    "type" => WithdrawTypeEnum::Purchase->value,
    "date" => date("2023-04-23 17:00:00"),
    "amount" => 10,
    "description" => "Bread"
]);
*/

//------------------------------------------------------------------




//--------------------------show-----------------------------------
// ********** incomesController Usando prepare ********** //
//
//$incomes_controller->show(13);
//$withdraw_controller->show(13);
//-----------------------------------------------------------------



//--------------------------update-----------------------------------
// ********** incomesController Usando prepare ********** //
/*
$incomes_controller->update([
    'payment_method' => 1,
    'type' => 3,
    'date' => '2023-05-13 18:00:00',
    'amount' => 8000,
    'description' => 'Weekly pay deposit'
], 17);
*/
/*
$withdraw_controller->update([
    'payment_method' => 3,
    'type' => 2,
    'date' => '2023-04-23 16:00:00',
    'amount' => 15,
    'description' => 'Bread'
], 15);
*/

//-----------------------------------------------------------------



//--------------------------destroy-----------------------------------
// ********** incomesController Usando prepare ********** //
//
//$incomes_controller->destroy(15);
//$withdraw_controller->destroy(15);
//-----------------------------------------------------------------


?>