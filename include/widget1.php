<?php
function addWidget1($data,$img)
{
    $connection = config();
    $sql = "INSERT INTO widget1_tbl (title,text,img) VALUES ('$data[title]','$data[text]','$img')";
    mysqli_query($connection,$sql);
}


function listWidget1()
{
    $connection = config();
    $sql = "SELECT * FROM widget1_tbl";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}

function showTextWidget1($id)
{
    $connection = config();
    $sql = "SELECT * FROM widget1_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}


function deleteWidget1($id)
{
    $connection = config();
    $sql1="SELECT * FROM widget1_tbl WHERE id='$id'";
    $result=mysqli_query($connection,$sql1);
    $row=mysqli_fetch_assoc($result);
    $folder="img/widget1/".$row['title'];
    $file=$row['img'];

    unlink($file);
    rmdir($folder);

    $sql="DELETE FROM widget1_tbl WHERE id='$id'";
    mysqli_query($connection,$sql);
}
//
function showEditWidget1($id)
{
    $connection = config();
    $sql = "SELECT * FROM widget1_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}
//
function editWidget1($data,$id,$img,$oldPic)
{
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldPic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic=uploader('img',"img/widget1/",$folder,"widget1");
    }
    else{
        $pic=$oldPic;
    }
    $connection = config();
    $sql = "UPDATE widget1_tbl SET title='$data[title]',text='$data[text]',img='$pic' WHERE id='$id'";
    mysqli_query($connection, $sql);
}

function listWidgetDefault1()
{
    $connection = config();
    $sql = "SELECT * FROM widget1_tbl";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}

