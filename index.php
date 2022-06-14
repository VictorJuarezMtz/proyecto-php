<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>video juegos !!</title>
</head>
<body>
    <!-- cabecera-->
    <div id="logo"> 
<a href="index.php"> 
    blog de video juegos !!
</a>
    </div>
    <!-- menu -->
<header id="encabezado">
    
<nav id="menu">
        <ul>
            <a href="index.php">inicio</a>
        </ul>
        <ul>
            <a href="index.php">categoria 1</a>
        </ul>
        <ul>
            <a href="index.php">categoria 2</a>
        </ul>
        <ul>
            <a href="index.php">categoria 3</a>
        </ul>
        <ul>
            <a href="index.php">categoria 4</a>
        </ul>
        <ul>
            <a href="index.php">categoria 5</a>
        </ul>
        <ul>
            <a href="index.php">categoria 6</a>
        </ul>
    </nav>
</header>
<div id="contenedor">

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

                <input type="submit" value="registrar">
            </form>
        </div>


        

    </aside>
    <!-- barra principal-->

    <div id="principal">
        <h1>Ultima entradas</h1> 

        <article class="entrada">
            <h2>titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque nihil maxime laudantium reiciendis distinctio quia vitae culpa numquam aliquam ad ducimus nisi soluta voluptatibus et quis cupiditate, a consectetur.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus exercitationem velit recusandae ab porro magni facilis, ad atque deleniti sit inventore cumque magnam odit temporibus quasi est obcaecati at! Temporibus!
            </p>

            <h2>titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque nihil maxime laudantium reiciendis distinctio quia vitae culpa numquam aliquam ad ducimus nisi soluta voluptatibus et quis cupiditate, a consectetur.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus exercitationem velit recusandae ab porro magni facilis, ad atque deleniti sit inventore cumque magnam odit temporibus quasi est obcaecati at! Temporibus!
            </p>

        </article>

    </div>


</div>
    <!-- pie-->
    <footer id="pie">
        <p>desarrollado por victor juarez martinez &copy; 2022 </p>

    </footer>

    
</body>
</html>