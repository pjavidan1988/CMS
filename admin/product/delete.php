<?php
$id=$_GET['id'];
deleteProduct($id);
header("location:dashbord.php?m=product&p=list");
?>
