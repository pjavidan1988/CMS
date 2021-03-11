<?php
function addPage($data)
{

    $connection = config();
    $sql = "INSERT INTO page_tbl (title,keywords,description,body) VALUES ('$data[title]','$data[keywords]','$data[description]','$data[body]')";
    mysqli_query($connection,$sql);
}


function listPageAdmin()
{

    $connection = config();
    $sql = "SELECT * FROM page_tbl";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}

function deletePage($id)
{
        $connection=config();
        $sql="DELETE FROM page_tbl WHERE id='$id'";
        mysqli_query($connection,$sql);
}

function showBodyPage($id)
{
    $connection = config();
    $sql = "SELECT * FROM page_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function showDescriptionPage($id)
{
    $connection = config();
    $sql = "SELECT * FROM page_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function showEditPage($id)
{

    $connection = config();
    $sql = "SELECT * FROM page_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function editPage($data,$id)
{
    $connection = config();
    $sql = "UPDATE news_tbl SET title='$data[title]',text='$data[text]',news_cat='$data[news_cat]',img='$pic',date='$data[date]' WHERE id='$id'";
    mysqli_query($connection, $sql);
}

//function listNewsDefault()
//{
//    $connection = config();
//    $sql = "SELECT * FROM news_tbl";
//    $row = mysqli_query($connection, $sql);
//    if (mysqli_num_rows($row) > 0) {
//        while ($res = mysqli_fetch_assoc($row)) {
//            $result[] = $res;
//        }
//        return $result;
//    }
//}



