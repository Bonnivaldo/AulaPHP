<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "etec";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("erro na conexao: ".$conn->connect_error);
    }

?>