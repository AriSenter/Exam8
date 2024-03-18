<?php

$connect = mysqli_connect('localhost', 'root', '', 'dbdepartment');

    if (!$connect) {
        die('Error connect to DataBase');
    }