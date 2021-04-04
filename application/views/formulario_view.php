<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Validar formularios con Codeigniter</title>
    </head>
    <body>
<!--Creamos un formulario que nos lleve al controlador formulario_controller/recibirFormulario-->
        <form action="<?=base_url("index.php/formulario_controller/recibirFormulario")?>" method="post">
            <label for="">Nombre</label>
            <input type="text"  name="nombre"/>
            <br>
            <label for="">Email</label>
            <input type="email" name="email"/>
            <br>
            <label for="">Password</label>
            <input type="password" name="password"/>
            <br>
            <input type="submit" name="submit" value="Enviar"/>
        </form>
        <h2><?php if(isset($mensaje)) echo $mensaje; ?></h2>
        <?=validation_errors();?><!--mostrar los errores de validación-->
    </body>
</html>

