<?php 

echo "<br>Are you sure to delete this colum<br>
    <br>$quatation_list->No -> $quatation_list->Date  $quatation_list->EmID  
    $quatation_list->CusID $quatation_list->Deposit $quatation_list->Credit"; 
?>

<form method="get" action="">
    <input type="hidden" name="controller" value="quataion" />
    <input type="hidden" name="No" value="<?php echo $quatation_list->No; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
