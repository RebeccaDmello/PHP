<?php
	$product_description = filter_input(INPUT_POST, 'product_description');
	$list_price = filter_input(INPUT_POST, 'list_price');
	$discount_percent = filter_input(INPUT_POST, 'discount_percent');
	
	// validate Product Description
    if ($product_description == '') {
        $error_msg = 'Product Description must be a valid name.'; 
    } 
    // validate List Price
    else if ( $list_price === FALSE )  {
        $error_msg = 'List Price must be a valid number.'; 
    } else if ( $list_price <= 0) {
        $error_msg = 'List Price  must be greater than zero .';
    }
       // validate Discount Percent
    else if ( $discount_percent === FALSE) {
        $error_msg = 'Discount Percent must be a valid whole number.';
    } else if ($discount_percent < 0) {
        $error_msg = 'Discount Percent must be a greater than 0.';
    } else if (!filter_var($discount_percent, FILTER_VALIDATE_INT)) {
        $error_msg = 'Discount Percent must be a valid whole number.';
    } 
    // set error message to empty string if no invalid entries
    else {
        $error_msg = ''; }
    // if an error message exists, go to the index page
    if ($error_msg != '') {
        include('index.php');
        exit();
    }	
	//Calculation
        $discount = $list_price * $discount_percent * .01;
        $discount_price = $list_price - $discount;
        $sales_tax = $discount_price * 0.08;
        $sales_total = $discount_price + $sales_tax;    
        //Formatting 
        $list_price_f = "$".number_format($list_price, 2);
        $discount_percent_f = $discount_percent."%";
        $discount_f = "$".number_format($discount, 2);
        $discount_price_f = "$".number_format($discount_price, 2);
        
        $sales_tax_f = "$".number_format($sales_tax, 2);
        $sales_total_f = "$".number_format($sales_total, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br><br>
        
         <label>Sales Tax Rate:</label>
         <span> 8% </span><br>
         
          <label>Sales Tax Amount:</label>
          <span><?php echo $sales_tax_f; ?></span><br>
          
           <label>Sales Total:</label>
           <span><?php echo $sales_total_f; ?></span><br>
    </main>
</body>
</html>