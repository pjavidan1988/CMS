<?php

function settings(){
    $connection=config();
    $sql="SELECT * FROM setting_tbl";
    $row=mysqli_query($connection,$sql);
    if(mysqli_num_rows($row)>0){
        $res = mysqli_fetch_assoc($row);
        return $res;
    }
}

function editSettings($data,$logo,$oldPic){
    if($_FILES[$logo]['name']!=''){
        $a=explode("/",$oldPic);
        $total=count($a);
        $folder=$a[$total-2];
        $pic=uploader($logo,"img/logo/",$folder,"logo");
    }
    else{
        $pic=$oldPic;
    }
    $connection=config();
    $sql="UPDATE setting_tbl SET title='$data[title]',description='$data[description]',copyright='$data[copyright]',
                       copyright_name='$data[copyright_name]',tel='$data[tel]',fax='$data[fax]',email='$data[email]',address='$data[address]',aboutus='$data[aboutus]',copyright_link='$data[copyright_link]',facebook='$data[facebook]',instagram='$data[instagram]',telegram='$data[telegram]',whatsapp='$data[whatsapp]',logo='$pic'";
    mysqli_query($connection,$sql);
}
