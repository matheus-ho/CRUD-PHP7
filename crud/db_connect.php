<?php

$connect = mysqli_connect("localhost", "root", "", "crud");
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error()):
    echo "Falha na conexão";
endif;