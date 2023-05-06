<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de ingresos</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Lista de ingresos</h1>

    <a class="a_ref" href="/"><img src="/Assets/nav_wallet.png" alt=""></a>
    <a class="a_ref" href="/menu-incomes"><img src="/Assets/nav_depositos.png" alt=""></a>

    <table>
        <tr>
            <th>ID</th>
            <th>Met</th>
            <th>Tip</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Descripcion</th>
        </tr>
        <tbody>
            <?php foreach($results as $result): ?>
            <tr>
                <td><?= $result['customer_id'] ?></td>
                <td><?= $result['payment_method'] ?></td>
                <td><?= $result['type'] ?></td>
                <td><?= $result['date'] ?></td>
                <td>$ <?= $result['amount'] ?></td>
                <td><?= $result['description'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>