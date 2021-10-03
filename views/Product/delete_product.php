<?php 

echo "<br>Are you sure to delete this colum<br>
    <br>$product_list->ProductID -> $product_list->ProductName  $product_list->Size  
    $product_list->Detail $product_list->MinimumOrder $product_list->CatID"; 
?>

<form method="get" action="">
    <input type="hidden" name="controller" value="product" />
    <input type="hidden" name="No" value="<?php echo $product_list->No; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
