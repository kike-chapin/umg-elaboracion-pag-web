<!doctype html/>
<html>
    <head>
        <title>Formulario PHP</title>
        <meta charset="utf8"/>
    </head>
    <body>
        <h1>Ejemplo de formulario</h1>
        <form action="miprimerpagina.php" method="post">
            <p>Ingrese su nombre:</p>
            <input type="text" name="nombre"/><br>
            <p>Ingrese su Apellido:</p>
            <input type="text" name="apellidos"/><br>
            <p>Ingrese su Genero:</p>
            <input type="radio" name="genero" value="femenino"/>femenino<br>
            <input type="radio" name="genero" value="masculino"/>masculino<br>
            <p>Ingrese su Contraseña:</p>
            <input type="password" name="contraseña"/><br>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
