<?php
function addWidget1($data)
{
    $connection = config();
    $sql = "INSERT INTO widget1_tbl (title,title2,text) VALUES ('$data[title]','$data[title2]','$data[text]')";
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



function deleteWidget1($id){
        $connection=config();
        $sql="DELETE FROM widget1_tbl WHERE id='$id'";
        mysqli_query($connection,$sql);
}


function showEditWidget1($id)
{
    $connection = config();
    $sql = "SELECT * FROM widget1_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}

function editWidget1($data,$id)
{
    $connection=config();
    $sql="UPDATE widget1_tbl SET title='$data[title]',title2='$data[title2]',text='$data[text]' WHERE id='$id'";
    mysqli_query($connection,$sql);
}

function listWidget1Default()
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

