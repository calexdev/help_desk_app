<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'help_desk';

    $mysqli = new mysqli($server, $user, $password, $database);

    if(mysqli_connect_errno()) trigger_error(mysqli_connect_errno());

?>