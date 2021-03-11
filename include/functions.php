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
        if(!file_exists($folder)){
            mkdir($dir.$folder);
        }
        $filename=$file['name'];
        $array=explode(".",$filename);
        $ext=end($array);
        $newName=$name."-".rand().".".$ext;
        $from=$file['tmp_name'];
        $to=$dir.$folder."/".$newName;
        move_uploaded_file($from,$to);
        return $to;

    }

include_once 'setting.php';
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
    case 'news':
        include_once 'news.php';
    case 'news_cat':
        include_once 'news_cat.php';
    case 'contact':
        include_once 'contact.php';
    case 'widget':
        include_once 'widget.php';
    case 'widget1':
        include_once 'widget1.php';
    case 'logo':
        include_once 'logo.php';
}
