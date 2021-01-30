<?php
$id=$_GET['id'];
deleteNewsCat($id);
header("location:dashbord.php?m=news_cat&p=list");
?>
