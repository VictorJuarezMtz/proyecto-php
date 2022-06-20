 <!-- barra lateral-->
 <aside id="sidebar">
    <div id="login" class="bloque">
            <h3>identificate</h3>
            <form action="login.php" method="POST">
                <label for="email">email</label>
                <input type="text" name="email" id="email">
                <label for="pw">password</label>
                <input type="password" name="pw" id="pw">

                <input type="submit" value="entrar">
            </form>
        </div>
        
        <div id="register" class="bloque">
            <h3>registrate</h3>
            <form action="registro.php" method="POST">
                <label for="nombre">nombre</label>
                <input type="text" name="nombre" id="nombre">

                <label for="apellidos">apellidos</label>
                <input type="text" name="apellidos" id="apellidos">

                <label for="email">email</label>
                <input type="text" name="email" id="email">
                
                <label for="pw">password</label>
                <input type="password" name="pw" id="pw">

                <input type="submit" name="submit" value="registrar">
            </form>
        </div>


        

    </aside>