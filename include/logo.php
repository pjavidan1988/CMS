<?php
function add_logo($img)
{
    $connection = config();
    $sql = "INSERT INTO logo_tbl (img) VALUES ('$img')";
    mysqli_query($connection,$sql);
}


function listLogo()
{
    $connection = config();
    $sql = "SELECT * FROM logo_tbl";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}

function showEditLogo($id)
{
    $connection = config();
    $sql = "SELECT * FROM logo_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function editLogo($id,$img,$oldPic)
{
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldPic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic=uploader('img',"img/logo/",$folder,"logo");
    }
    else{
        $pic=$oldPic;
    }
    $connection = config();
    $sql = "UPDATE logo_tbl SET img='$pic' WHERE id='$id'";
    mysqli_query($connection, $sql);
}

function logo(){
    $connection=config();
    $sql="SELECT * FROM logo_tbl";
    $row=mysqli_query($connection,$sql);
    if(mysqli_num_rows($row)>0){
        $res = mysqli_fetch_assoc($row);
        return $res;
    }
}

