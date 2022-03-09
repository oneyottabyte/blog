<?php

$mysql = new mysqli('localhost:3307', 'root', 'root', 'blog');
$mysql->set_charset('utf8');

    if($mysql == TRUE){
        echo "banco conectado";
    }else{
        echo 'erro';
    }
