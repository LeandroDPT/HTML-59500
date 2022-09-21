<?php

    print_r($_POST);
    echo "<br>";
    echo "NomBrE: ";
    echo $_POST['nombre'];
    echo "<br><br>";

    echo "Gracias por visitar la pagina";

    $i=10;
    for($i; $i>0 ;$i--){
        echo "<br>";
        echo $i;
    }
?>

