<?php if(!$id == null): ?>
    <?php    //header("location: incomes/$id"); ?>
    <?php else: ?>
        <nav class="btns_mnu_container">
            <form class="input-id"  action="/m_incomes" method="post">
                <label for="id">Listar por id:</label>
                <input type="number" name="id" id="id_cc"> 
                <button type="submit">Listar</button>
            </form>

            <a class="a_ref" href="/incomes">Todos los Depositos</a>
            <a class="a_ref" href="/incomes/create">Hacer un deposito</a>
            <a class="a_ref" href="/incomes/create">Modificar un deposito</a>
           
            <form class="input-id"  action="/m_incomes" method="post">
                <div>
                    <label for="id">Eliminar por id:</label>
                    <input type="number" name="id" id="id"> 
                </div>
                
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre"> 
                </div>
                <div>
                    <button type="submit">Eliminar</button>
                </div>

               
            </form>
        </nav>
    <?php endif; ?>