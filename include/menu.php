<?php
    function addMenu($data){
        $connection=config();
        $sql="INSERT INTO menu_tbl (title,url,status,chid,sort) VALUES ('$data[title]','$data[url]','$data[status]','$data[parent]','$data[sort]')";
        mysqli_query($connection,$sql);
    }
    function subMenu(){
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE chid='0'";
        $row=mysqli_query($connection,$sql);
        while($res=mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
        return $result;
    }
    function listMenuAdmin(){
        $connection=config();
        $sql="SELECT * FROM menu_tbl";
        $row=mysqli_query($connection,$sql);
        if(mysqli_num_rows($row)>0){
            while ($res = mysqli_fetch_assoc($row)) {
                $result[] = $res;
            }
            return $result;
        }
    }
    function selectParentMenu($chid){
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE id=$chid";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res['title'];
    }
    function deleteMenu($id){
        $connection=config();
        $sql="DELETE FROM menu_tbl WHERE id='$id'";
        $row=mysqli_query($connection,$sql);
    }
    function showEdit($id){
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE id='$id'";
        $row=mysqli_query($connection,$sql);
        $res=mysqli_fetch_assoc($row);
        return $res;
    }
    function editMenu($data,$id){
        $connection=config();
        $sql="UPDATE menu_tbl SET title='$data[title]',url='$data[url]',sort='$data[sort]',chid='$data[parent]',status='$data[status]' WHERE id='$id'";
        mysqli_query($connection,$sql);
    }
    function listMenuDefault(){
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC";
        $row=mysqli_query($connection,$sql);
        if(mysqli_num_rows($row)>0){
            while($res=mysqli_fetch_assoc($row)){
                $result[]=$res;
            }
            return $result;
        }
    }
    function listSubMenuDefault($id){
        $connection=config();
        $sql="SELECT * FROM menu_tbl WHERE status='1' AND chid='$id' ORDER BY sort ASC";
        $row=mysqli_query($connection,$sql);
        if(mysqli_num_rows($row)>0){
            while($res=mysqli_fetch_assoc($row)){
                $result[]=$res;
            }
            return $result;
        }
    }
