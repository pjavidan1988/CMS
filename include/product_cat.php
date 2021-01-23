<?php
    function addProductCat($data){
        $connection=config();
        $sql="INSERT INTO product_cat (title,status,sort) VALUES ('$data[title]','$data[status]','$data[sort]')";
        mysqli_query($connection,$sql);
    }
    function listProductCatAdmin(){
        $connection=config();
        $sql="SELECT * FROM product_cat";
        $row=mysqli_query($connection,$sql);
        if(mysqli_num_rows($row)>0){
            while ($res = mysqli_fetch_assoc($row)) {
                $result[] = $res;
            }
            return $result;
        }
    }
    function deleteProductCat($id){
        $connection=config();
        $sql="DELETE FROM product_cat WHERE id='$id'";
        $row=mysqli_query($connection,$sql);
    }
    function showEditProductCat($id){
        $connection=config();
        $sql="SELECT * FROM product_cat WHERE id='$id'";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }
    function editProductCat($data,$id){
        $connection=config();
        $sql="UPDATE product_cat SET title='$data[title]',sort='$data[sort]',status='$data[status]' WHERE id='$id'";
        mysqli_query($connection,$sql);
    }
