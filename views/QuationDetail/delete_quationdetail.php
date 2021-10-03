<?php 

echo "<br>Are you sure to delete this colum<br>
    <br>$QuationDetail_list->No"; 
?>

<form method="get" action="">
    <input type="hidden" name="controller" value="quationdetail" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
