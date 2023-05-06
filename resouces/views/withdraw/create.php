<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega ingreso</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Nuevo Deposito</h1>

    <form class="input-group" action="/incomes" method="post">

    <div class="row">
        <label for="payment_method">Metodo de pago:</label>
        <select name="payment_method" id="payment_method">
            <option value="1" selected>Tarjeta de credito</option>
            <option value="2">Cheque</option>
            <option value="3">Efectivo</option>
        </select>
    </div>

    <div class="row">
        <label for="type">Typo de ingreso:</label>
        <select name="type" id="type">
            <option value="1" selected>Pago nomina</option>
            <option value="2">Rembolso</option>
            <option value="3">Deposito</option>
        </select>
    </div>

    <div class="row">
        <label for="date">Fecha:</label>
        <input type="text" name="date" id="date">
    </div>   

    <div class="row">
        <label for="amount">Cantidad:</label>
        <input type="number" name="amount" id="amount">
    </div>

    <div class="row">
        <label for="description">Descripcion:</label>
        <textarea  cols=30 rows=5  name="description" id="description"></textarea>
    </div>    
        
        <input type="hidden" name="method" value="post">

    <div >
        <button class="btn_agregar" type="submit">Agregar</button>
    </div>
        

    </form>


</body>
</html>