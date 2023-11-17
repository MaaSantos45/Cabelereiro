<?php
    $connect = new mysqli("127.0.0.1","root","root","cabeleireiro");

    if ($connect->connect_error) {
        echo"<body>";
        echo"<h1 style='color: red;'>CONEXÃO NÂO REALIZADA</h1>";
        echo"</body>";
    }
    
        
?>