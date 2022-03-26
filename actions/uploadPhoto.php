<?php

    session_start();

    include_once '../classes/user.php';

    $user_id = $_SESSION['user_id'];
    $image_name = $_FILES['photo']['name']; // image_name = name of the uploaded file
    $tmp_name = $_FILES['photo']['tmp_name']; // tmp_name = temporary path of the uploaded file

    $user = new User;
    $user -> uploadPhoto($user_id, $image_name, $tmp_name);