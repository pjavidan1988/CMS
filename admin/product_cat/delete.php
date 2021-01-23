<?php
$id=$_GET['id'];
deleteProductCat($id);
header("location:dashbord.php?m=product_cat&p=list");
?>
