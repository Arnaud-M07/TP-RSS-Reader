<?php
    if(empty($_COOKIE)){
        header('location:/controllers/parameters-ctrl.php');
    } else {
        header('location:/controllers/home-ctrl.php');
    }
    die;