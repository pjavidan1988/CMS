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

function editSettings($data){

    $connection=config();
    $sql="UPDATE setting_tbl SET title='$data[title]',description='$data[description]',copyright='$data[copyright]',
                       copyright_name='$data[copyright_name]',tel='$data[tel]',fax='$data[fax]',email='$data[email]',address='$data[address]',aboutus='$data[aboutus]',copyright_link='$data[copyright_link]',facebook='$data[facebook]',instagram='$data[instagram]',telegram='$data[telegram]',whatsapp='$data[whatsapp]',main_slider_title='$data[main_slider_title]',main_slider_title2='$data[main_slider_title2]',main_slider_text='$data[main_slider_text]'";
    mysqli_query($connection,$sql);
}
