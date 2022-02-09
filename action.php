<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\PrimeNumber;
use App\classes\Register;

if (isset($_GET['pages'])){
    if ($_GET['pages'] == 'home'){

        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'series'){

        include 'pages/series.php';
    }
    elseif ($_GET['pages'] == 'register'){

        include 'pages/register.php';
    }
}
elseif (isset($_POST['btn'])){

    $prime = new PrimeNumber($_POST);
    $result = $prime->primeNumber();
    include 'pages/home.php';
}
elseif (isset($_POST['series_btn'])){

    $series = new Home($_POST);
    $result = $series->sumSeries();
    include 'pages/series.php';
}
elseif (isset($_POST['reg_btn'])){

    $register = new Register($_POST);
//    include 'pages/register.php';
}
else{

    header('Location: index.php');
}
