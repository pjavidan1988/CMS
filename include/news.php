<?php
function addNews($data,$img)
{
    $connection = config();
    $sql = "INSERT INTO news_tbl (title,text,img,news_cat,date) VALUES ('$data[title]','$data[text]','$img','$data[news_cat]','$data[date]')";
    mysqli_query($connection,$sql);
}

function newsCat()
{
    $connection = config();
    $sql = "SELECT * FROM news_cat";
    $row = mysqli_query($connection, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}
function listNewsAdmin()
{
    $connection = config();
    $sql = "SELECT * FROM news_tbl";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}
function selectNewsCat($catid)
{
    $connection = config();
    $sql = "SELECT * FROM news_cat WHERE id=$catid";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res['title'];
}

function deleteNews($id)
{
    $connection = config();
    $sql1="SELECT * FROM news_tbl WHERE id='$id'";
    $result=mysqli_query($connection,$sql1);
    $row=mysqli_fetch_assoc($result);
    $folder="img/news/".$row['title'];
    $file=$row['img'];

    unlink($file);
    rmdir($folder);

    $sql="DELETE FROM news_tbl WHERE id='$id'";
    mysqli_query($connection,$sql);
}

function showEditNews($id)
{
    $connection = config();
    $sql = "SELECT * FROM news_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function editNews($data,$id,$img,$oldPic)
{
    if($_FILES[$img]['name']!=''){
        $a=explode("/",$oldPic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic=uploader('img',"img/news/",$folder,"news");
    }
    else{
        $pic=$oldPic;
    }
    $connection = config();
    $sql = "UPDATE news_tbl SET title='$data[title]',text='$data[text]',news_cat='$data[news_cat]',img='$pic',date='$data[date]' WHERE id='$id'";
    mysqli_query($connection, $sql);
}

function listNewsDefault()
{
    $connection = config();
    $sql = "SELECT * FROM news_tbl";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}



