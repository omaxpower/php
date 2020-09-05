<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    #number {
        width: 3em;
    }
    </style>
</head>
<body>

<h1 align="center">Tabla de multiplicar 1 a N</h1>

<div class="container" align="center">
<form method="post" action="" ><b<r>

Elija un valor para N: 
<input type="number" name="ene" id="number"><br><br>

<input type="submit" name="mostrar"><br>

</form>

</div>>

<table border="2" align="center">
            <?php
            $N = $_POST['ene'] ?? '';
            echo "<tr>";
            for ($cabecera="0";$cabecera<=$N;$cabecera++){
                echo "<th>";
                echo $cabecera;
                echo "</th>";
            }
            echo "</tr>";
            for ($x = 1; $x <=$N; $x++){
                echo "<tr>";
                echo "<th>";
                echo $x;
                echo "</th>";
                for ($y=1;$y<=$N;$y++){                      
                    $multiplicacion=$x*$y;                    
                    echo "<td>";                      
                    echo $multiplicacion;                      
                    echo "</td>";              
                }              
                echo "</tr>";          
            }      
    ?>      
    </table>
    
</body>
</html>