<?php
    function addProduct($data,$img)
    {
        $connection = config();
        $sql = "INSERT INTO product_tbl (title,text,procat,img) VALUES ('$data[title]','$data[text]','$data[procat]','$img')";
        mysqli_query($connection,$sql);
    }

    function proCat()
    {
        $connection = config();
        $sql = "SELECT * FROM product_cat";
        $row = mysqli_query($connection, $sql);
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
    function listProductAdmin()
    {
        $connection = config();
        $sql = "SELECT * FROM product_tbl";
        $row = mysqli_query($connection, $sql);
        if (mysqli_num_rows($row) > 0) {
            while ($res = mysqli_fetch_assoc($row)) {
                $result[] = $res;
            }
            return $result;
        }
    }
    function selectProCat($catid)
    {
        $connection = config();
        $sql = "SELECT * FROM product_cat WHERE id=$catid";
        $row = mysqli_query($connection, $sql);
        $res = mysqli_fetch_assoc($row);
        return $res['title'];
    }

    function deleteProduct($id)
    {
        $connection = config();
        $sql1="SELECT * FROM product_tbl WHERE id='$id'";
        $result=mysqli_query($connection,$sql1);
        $row=mysqli_fetch_assoc($result);
        $folder="img/product/".$row['title'];
        $file=$row['img'];

        unlink($file);
        rmdir($folder);

        $sql="DELETE FROM product_tbl WHERE id='$id'";
        mysqli_query($connection,$sql);
    }

    function showEditProduct($id)
    {
        $connection = config();
        $sql = "SELECT * FROM product_tbl WHERE id='$id'";
        $row = mysqli_query($connection, $sql);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }

    function editProduct($data, $id,$img,$oldPic)
    {
        if($_FILES[$img]['name']!=''){
            $pic=uploader('img',"img/product/",$data['title'],"product");
        }
        else{
            $pic=$oldPic;
        }
        $connection = config();
        $sql = "UPDATE product_tbl SET title='$data[title]',text='$data[text]',procat='$data[procat]',img='$pic' WHERE id='$id'";
        mysqli_query($connection, $sql);
    }
//
//    function listMenuDefault()
//    {
//        $connection = config();
//        $sql = "SELECT * FROM product_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC";
//        $row = mysqli_query($connection, $sql);
//        if (mysqli_num_rows($row) > 0) {
//            while ($res = mysqli_fetch_assoc($row)) {
//                $result[] = $res;
//            }
//            return $result;
//        }
//    }
//
//    function listSubMenuDefault($id)
//    {
//        $connection = config();
//        $sql = "SELECT * FROM product_tbl WHERE status='1' AND chid='$id' ORDER BY sort ASC";
//        $row = mysqli_query($connection, $sql);
//        if (mysqli_num_rows($row) > 0) {
//            while ($res = mysqli_fetch_assoc($row)) {
//                $result[] = $res;
//            }
//            return $result;
//        }
//    }

