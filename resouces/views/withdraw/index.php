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

    <table>
        <tr>
            <th>Met</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Descripcion</th>
        </tr>
        <tbody>
            <?php foreach($results as $result): ?>
            <tr>
                <td><?= $result['payment_method'] ?></td>
                <td><?= $result['type'] ?></td>
                <td><?= $result['date'] ?></td>
                <td>$ <?= $result['amount'] ?></td>
                <td><?= $result['description'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   
        <a href="incomes/create">Crear nuevo ingreso</a>
    </div> 
    
    
</body>
</html>