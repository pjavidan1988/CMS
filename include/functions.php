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
    function uploader($file,$dir,$folder,$name){
        $file=$_FILES[$file];
        mkdir($dir.$folder);
        $filename=$file['name'];
        $array=explode(".",$filename);
        $ext=end($array);
        $newName=$name."-".rand().".".$ext;
        $from=$file['tmp_name'];
        $to=$dir.$folder."/".$newName;
        move_uploaded_file($from,$to);
        return $to;

    }


@$m=$_GET['m']?$_GET['m']:'home';
switch ($m){
    case 'home':
        include_once 'menu.php';
    case 'menu':
        include_once 'menu.php';
    case 'product_cat':
        include_once 'product_cat.php';
    case 'product':
        include_once 'product.php';
}
