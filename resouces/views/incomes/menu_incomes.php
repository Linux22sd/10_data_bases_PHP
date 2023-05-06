<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depositos</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <h1>Depositos</h1>

    <a class="" href="/"><img src="/Assets/nav_wallet.png" alt=""></a>
    <p class="message"></p>

    <nav class="btns_mnus">

        <a class="" href="/incomes"><img src="/Assets/btn_listar_registros.png" alt=""></a>

        <form class="form_btn_ctn"  action="/incomes/id" method="post">
            <div class="form_btn">
                <label for="id">Listar por id:</label>
                <input type="number" name="id" id="id" autocomplete="off"> 
                <input type="hidden" name="method" value="get">
            </div>
            <button type="submit"><img src="/Assets/btn_listar_id.png" alt=""></button>
        </form>

        <a class="" href="/incomes/create"><img src="/Assets/btn_crear_registro.png" alt=""></a>

        <form class="form_btn_ctn"  action="/incomes/edit" method="post">
            <div class="form_btn">
                <label for="id2">Modificar por id:</label>
                <input type="number" name="id2" id="id2" autocomplete="off"> 
                <input type="hidden" name="method" value="get">
            </div>
            <button type="submit"><img src="/Assets/btn_modificar_id.png" alt=""></button>
        </form> 
       
        <form class="form_btn_ctn" action="/incomes/delete" method="post">
            <div class="form_btn">    
                <label for="id3">Eliminar por id:</label>
                <input type="number" name="id3" id="id3" autocomplete="off"> 
                <input type="hidden" name="method" value="delete">
            </div>
            <button type="submit"><img src="/Assets/btn_borrar_id.png" alt=""></button>
        </form>
      
    </nav>
</body>
</html>