<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hgroup>
        <h1>Fromulario enviado por el metodo GET</h1>
    </hgroup>
    <form name="envia-get_frm" action="envia-datos.php" method="get" enctype="application/x-www-form-urlencoded">
        <label>Ingresa tu Nombre:</label>
        <input type="text" name="nombre_txt"/>
        <br><br>
        <label>Ingresa tu Password:</label>
        <input type="password" name="pass_txt"/>
        <br><br>
        <input type="submit" name="enviar_btn" value="envia-GET"/>
    
    </form>
    
    <hgroup>
        <h1>Fromulario enviado por el metodo POST</h1>
    </hgroup>
    <form name="envia-post_frm" action="envia-datos.php" method="post" enctype="application/x-www-form-urlencoded">
        <label>Ingresa tu Nombre:</label>
        <input type="text" name="nombre_txt"/>
        <br><br>
        <label>Ingresa tu Password:</label>
        <input type="password" name="pass_txt"/>
        <br><br>
        <input type="submit" name="enviar_btn" value="envia-POST"/>
    
    </form>
</body>
</html>