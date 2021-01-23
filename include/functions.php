<?php
session_start();
    function config(){
        $server="localhost";
        $user="root";
        $password="";
        $db="CMS2";
        $connect=mysqli_connect($server,$user,$password,$db);
        mysqli_set_charset($connect, "utf8");
        mysqli_query($connect,"SET NAMES 'utf8'");
        return $connect;
    }
$m=$_GET['m'];
switch ($m){
    case 'menu':
        include_once 'menu.php';
    case 'product_cat':
        include_once 'product_cat.php';
    case 'product':
        include_once 'product.php';
}
