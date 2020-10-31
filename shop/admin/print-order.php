<?php
require_once('../inc/connection2.php');
?>
<html>

<head>
	<title></title>
	<style>
		/*  code to hide button in print */
		@media print {
			#printbutton {
				display: none;
			}
		}
	</style>
</head>

<body style='padding:20px'>
	<h1 style='text-align:center'>Order Bill</h1>
	<p style='text-align:right'>
		<button id="printbutton" type=button onclick="print();">Print</button>
	</p>
	<?php
	//get bill detail 
	$sql = "select * from bill where id=?";
	$statement = $db->prepare($sql);
	$statement->bindparam(1, $_REQUEST['billid']);
	$statement->execute();
	$row = $statement->fetch();
	extract($row);
	?>
	<table border='2' width='100%' style='margin-bottom:10px' cellpadding=10>
		<tr>
			<td width='25%'>Order No</td>
			<td width='25%'><?php echo $id; ?></td>
			<td width='25%'>Order Date</td>
			<td width='25%'><?php echo date("D d-m-Y", strtotime($billdate)); ?></td>
		</tr>
		<tr>
			<td width='25%'>Customer Detail</td>
			<td width='25%'>
				<?php
				echo "$fullname<br/> Mobile $mobile";
				?>
			</td>
			<td width='25%'>Payment Mode</td>
			<td width='25%'>
				<?php
				$PaymentStatus = array("unpaid", "paid");
				echo $PaymentStatus[$paymentstatus];
				?>
			</td>
		</tr>
		<tr>
			<td width='25%'>Delivery Address</td>
			<td width='25%'>
				<?php
				echo "$address1<br/> $address2";
				?>
			</td>
			<td width='25%'>Order status</td>
			<td width='25%'>
				<?php
				$Orderstatus = array("", "Confirmed", "Dispatched", "Delivered");
				echo $PaymentStatus[$orderstatus];
				?>
			</td>
		</tr>
		<tr>
			<td width='25%'>City</td>
			<td width='25%'><?php echo "<br/> $city <br/> $pincode"; ?></td>
			<td width='25%'>Remarks</td>
			<td width='25%'><?php echo "$remarks"; ?></td>
		</tr>
	</table>

	<table border=2 width='100%' style='margin-bottom:10px' cellpadding=10>
		<tr>
			<th width='25%'>Name</th>
			<th width='25%'>Price</th>
			<th width='25%'>Quantity</th>
			<th width='25%'>Total</th>
		</tr>
		<?php
		$sql = "select title,c.price,c.quantity from product p,cart c where c.productid=p.id and billid=?";
		$statement = $db->prepare($sql);
		$statement->bindparam(1, $_REQUEST['billid']);
		$statement->execute();
		$GrandTotal = 0;
		while ($cartrow = $statement->fetch()) {
		?>
			<tr>
				<td><?php echo $cartrow['title'] ?></td>
				<td align=right><?php echo $cartrow['price'] ?></td>
				<td align=right> <?php echo $cartrow['quantity'] ?></td>
				<td align=right><?php echo $cartrow['price'] * $cartrow['quantity'] ?></td>
			</tr>
		<?php
			$GrandTotal += ($cartrow['price'] * $cartrow['quantity']);
		} //end of while 
		?>
		<tr>
			<td colspan=2>Grand total</td>
			<td colspan=2 align="right">
				<?php echo number_format($GrandTotal) ?>
			</td>

		</tr>

	</table>
</body>
</html>