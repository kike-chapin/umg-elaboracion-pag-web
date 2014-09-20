<html>
    <head>
        <title>Procesa Datos</title>
        <meta charset="utf8"/>
    </head>
    <body>
        <h1>Procesamiento de formularios</h1>
        <?php
            if($_POST['contrasena'])
        ?>
        <p>El nombre Introducido es:</p>
        <h2><?php
            echo $_POST['nombre']," ",$_POST['apellidos'];
            ?></h2>
        <br>
        <p>Su genero es:</p>
        <h2>
        <?php
            echo $_POST["genero"];
        ?>
        </h2>
    </body>
    
</html>
