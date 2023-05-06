
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposito por id</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Deposito por id</h1>

    <a class="a_ref" href="/"><img src="/Assets/nav_wallet.png" alt=""></a>
    <a class="a_ref" href="/menu-incomes"><img src="/Assets/nav_depositos.png" alt=""></a>

    <table>
        <tr>
            <th>ID</th>
            <th>Met</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Descripcion</th>
        </tr>
        <tbody>
           
            <tr>
                <td><?= $results['customer_id'] ?></td>
                <td><?= $results['payment_method'] ?></td>
                <td><?= $results['type'] ?></td>
                <td><?= $results['date'] ?></td>
                <td>$ <?= $results['amount'] ?></td>
                <td><?= $results['description'] ?></td>
            </tr>
            
        </tbody>
    </table>
    
</body>
</html>