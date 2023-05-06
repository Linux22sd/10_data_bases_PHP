<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar por id</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Eliminar por id</h1>

    <table>
        <tr>
            <td>id</td>
            <td><?= $results['customer_id'] ?> </td>
        </tr>
                 
        <tr>
            <th>Met</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Descripcion</th>
        </tr>
        <tbody>
            
            <tr>
                <td><?= $results['payment_method'] ?></td>
                <td><?= $results['type'] ?></td>
                <td><?= $results['date'] ?></td>
                <td>$ <?= $results['amount'] ?></td>
                <td><?= $results['description'] ?></td>
            </tr>
            
        </tbody>
    </table>
    <h2>El regrisro con el id <?= $results['customer_id'] ?> ha sido eliminado</h2>
   
        <a href="create">Crear nuevo ingreso</a>
    </div> 
    
    
</body>
</html>