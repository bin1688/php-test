<?php
	$operatingSys = $_POST['os'];
	$numberOfCopy = $_POST['numCopies'];
	$subtotal = $numberOfCopy * 35;
	$tax = $subtotal * 0.07;
	$shippingHandling = $numberOfCopy * 1.25;
	$total = $subtotal + $tax + $shippingHandling;

	
	print ("<p>Operating System: $operatingSys</p>");
	print ("<p>Number of Copies: $numberOfCopy</p>");
	print ("<p>Sub-Total:$".number_format($subtotal,2)."</p>");
	print ("<p>Sales Tax:$".number_format($tax,2)."</p>");
	print ("<p>Shipping and Handling:$".number_format($shippingHandling,2)."</p>");
	print ("<p></p>");
	print ("<p><h2>TOTAL: $".number_format($total,2)."</h2></p>");
  
  ?>
  
<html>
<head>
	<title>Operating System</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>Operating System Order Form</h1>
	<p>To order operating system, please complete the following order form: </p>
	<p>
		<form action = "" method = "POST" >
			<table>
			<tr>
				<td>Choose your operating system:</td>
				<td>
					<select name = "os">
						<option>Linux</option>
						<option>Macintosh</option>
						<option>Windows</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Number of copies:</td>
				<td><input type = "text" size = "5" name = "numCopies" value="0" /></td>
			</tr>
			</table>
			
			<p>
			<input type = "submit" value = "Submit Your Order" />
			</p>
		</form>
		
	</p>
	
		
</body>
</html>
