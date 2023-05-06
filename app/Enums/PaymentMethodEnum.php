<?php

namespace App\Enums;

enum PaymentMethodEnum : int {

    case CreditCard = 1;
    case Check = 2;
    case Cash = 3;
    

}

?>