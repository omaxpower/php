<?php
    if(isset($_GET["enviar_btn"])){
        echo "Los datos los enviaste por el metodo GET, los datos son: <br /><br />El nombre es: ".$_GET["nombre_txt"]."<br />
        el password es: ".$_GET["pass_txt"];

    }else if(isset($_POST["enviar_btn"])){
        echo "Los datos los enviaste por el metodo POST, los datos son: <br /><br />El nombre es: ".$_POST["nombre_txt"]."<br />
        el password es: ".$_POST["pass_txt"];



    }
    
?>