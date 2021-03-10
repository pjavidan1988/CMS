<?php
function addWidget($data,$img)
{
    $connection = config();
    $sql = "INSERT INTO widget_tbl (title,text,img) VALUES ('$data[title]','$data[text]','$img')";
    mysqli_query($connection,$sql);
}


function listWidget()
{
    $connection = config();
    $sql = "SELECT * FROM widget_tbl";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}

function showTextWidget($id)
{
    $connection = config();
    $sql = "SELECT * FROM widget_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}


function deleteWidget($id)
{
    $connection = config();
    $sql1="SELECT * FROM widget_tbl WHERE id='$id'";
    $result=mysqli_query($connection,$sql1);
    $row=mysqli_fetch_assoc($result);
    $folder="img/widget/".$row['title'];
    $file=$row['img'];

    unlink($file);
    rmdir($folder);

    $sql="DELETE FROM widget_tbl WHERE id='$id'";
    mysqli_query($connection,$sql);
}
//
function showEditWidget($id)
{
    $connection = config();
    $sql = "SELECT * FROM widget_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}
//
function editWidget($data,$id,$img,$oldPic)
{
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldPic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic=uploader('img',"img/widget/",$folder,"widget");
    }
    else{
        $pic=$oldPic;
    }
    $connection = config();
    $sql = "UPDATE widget_tbl SET title='$data[title]',text='$data[text]',img='$pic' WHERE id='$id'";
    mysqli_query($connection, $sql);
}

function listWidgetDefault()
{
    $connection = config();
    $sql = "SELECT * FROM widget_tbl";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}

