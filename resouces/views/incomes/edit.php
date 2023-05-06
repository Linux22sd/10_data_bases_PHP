<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar ingreso</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Actualizar ingreso</h1>
    
    <a class="a_ref" href="/"><img src="/Assets/nav_wallet.png" alt=""></a>
    <a class="a_ref" href="/menu-incomes"><img src="/Assets/nav_depositos.png" alt=""></a>

    <h2>ID <?= $results['customer_id'] ?></h2>

    <form class="input-group" action="/incomes" method="post">
    <div class="row">
        <label for="payment_method">Metodo de pago:</label>
        <select name="payment_method" id="payment_method">
            <option value="1">Tarjeta de credito</option>
            <option value="2">Cheque</option>
            <option value="3">Efectivo</option>
        </select>
    </div>

    <div class="row">
        <label for="type">Typo de ingreso:</label>
        <select name="type" select="<?= $results['type'] ?>" id="type">
            <option value="1">Pago nomina</option>
            <option value="2">Rembolso</option>
            <option value="3">Deposito</option>
        </select>
    </div>

    <div class="row">
        <label for="date">Fecha:</label>
        <input type="text" name="date" value="<?= $results['date'] ?>" id="date">
    </div>   

    <div class="row">
        <label for="amount">Cantidad:</label>
        <input type="number" name="amount" value="<?= $results['amount'] ?>" id="amount">
    </div>

    <div class="row">
        <label for="description">Descripcion:</label>
        <textarea  cols=30 rows=5  name="description" id="description" ><?= $results['description'] ?></textarea>
    </div>    
        <input type="hidden" name="method" value="put">
        <input type="hidden" name="id2" value="<?= $results['customer_id'] ?>" >
    <div >
        <button class="btn_agregar" type="submit">Actualizar</button>
    </div>
    </form>

</body>
</html>