<?php include 'inc/header.php';?>
<?php 
	$login = Session::get("cuslogin");
	if ($login == false) {
		header("Location:login.php");
	}
?>
<style>
.psuccess{width: 500px;min-height: 200px;text-align: center;border: 1px solid #ddd; margin: 0 auto; padding: 50px;}
.psuccess h2{border-bottom: 1px solid #ddd; margin-bottom: 75px; padding-bottom: 10px;}
.psuccess p{line-height: 25px;}

</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="psuccess">
    			<h2>Success.</h2>
                <?php
                    $cmrId = Session::get("cmrId");
                    $amount = $ct->payableAmount($cmrId);
                    if ($amount) {
                        $sum = 0;
                        while ($result = $amount->fetch_assoc()) {
                            $price = $result['price'];
                            $sum = $sum + $price;
                ?>
                <?php } }?>
                <p>Payment Successfull.</p>
                

                <p>Thanks for Purchase. Receive Your Order Successfully. We will contact you as soon as possible with delivary details. Here is your order details......<a href="orderdetails.php">Visit Here..</a></p>
    		</div>
 		</div>
 	</div>
	</div>
   <?php include 'inc/footer.php';?>