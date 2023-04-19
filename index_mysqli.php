<?php
use App\Controllers\IncomesController;
use App\Enums\PaymentMethodEnum;
use App\Enums\IncomeTypeEnum;

require "vendor/autoload.php";

$incomes_controller = new IncomesController();

$incomes_controller->store([
    "payment_method" => PaymentMethodEnum::Deposit->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 8300,
    "description" => "Pago por salario semanal"
]);

?>