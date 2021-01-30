<?php
function addNewsCat($data){
    $connection=config();
    $sql="INSERT INTO news_cat (title) VALUES ('$data[title]')";
    mysqli_query($connection,$sql);
}
function listNewsCatAdmin(){
    $connection=config();
    $sql="SELECT * FROM news_cat";
    $row=mysqli_query($connection,$sql);
    if(mysqli_num_rows($row)>0){
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}
function deleteNewsCat($id){
    $connection=config();
    $sql="DELETE FROM news_cat WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function showEditNewsCat($id){
    $connection=config();
    $sql="SELECT * FROM news_cat WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function editNewsCat($data,$id){
    $connection=config();
    $sql="UPDATE news_cat SET title='$data[title]' WHERE id='$id'";
    mysqli_query($connection,$sql);
}

