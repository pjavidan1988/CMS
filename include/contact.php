<?php
function addContact($data)
{
    $connection = config();
    $sql = "INSERT INTO contact_tbl (name,lastname,text,subject,email,phone) VALUES ('$data[name]','$data[lastname]','$data[text]','$data[subject]','$data[email]','$data[phone]')";
    mysqli_query($connection,$sql);
}

function listContactAdmin()
{
    $connection = config();
    $sql = "SELECT * FROM contact_tbl";
    $row = mysqli_query($connection, $sql);
    if (mysqli_num_rows($row) > 0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}

function deleteContact($id)
{
    $connection = config();
    $sql="DELETE FROM contact_tbl WHERE id='$id'";
    mysqli_query($connection,$sql);
}

function showDetailContact($id)
{
    $connection = config();
    $sql = "SELECT * FROM contact_tbl WHERE id='$id'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    return $res;
}




