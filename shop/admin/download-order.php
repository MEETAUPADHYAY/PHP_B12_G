<?php
    require '../vendor/autoload.php';
    require_once('../inc/connection2.php');
    use Dompdf\Dompdf;    
    $dompdf = new Dompdf();
	$output = "<!doctype html><head></head><body><h1 style='text-align:center'>Order Bill</h1>";
	$sql = 'select * from bill where id=?';
	$statement = $db->prepare($sql);
	$statement->bindparam(1, $_REQUEST['billid']);
	$statement->execute();
	$row = $statement->fetch();
	extract($row);
    $PaymentStatus = array('unpaid', 'paid');
    $Orderstatus = array('', 'Confirmed', 'Dispatched', 'Delivered');
	$output.="<table border='2' width='100%' style='margin-bottom:10px' cellpadding=10>
		<tr>
			<td width='25%'>Order No</td>
			<td width='25%'>$id;</td>
			<td width='25%'>Order Date</td>
			<td width='25%'>" . date('D d-m-Y', strtotime($billdate)) . "</td>
		</tr>
		<tr>
			<td width='25%'>Customer Detail</td>
			<td width='25%'>
				$fullname<br/> Mobile $mobile'
			</td>
			<td width='25%'>Payment Mode</td>
			<td width='25%'>
	            $PaymentStatus[$paymentstatus];
			</td>
		</tr>
		<tr>
			<td width='25%'>Delivery Address</td>
			<td width='25%'>
				$address1<br/> $address2
			</td>
			<td width='25%'>Order status</td>
			<td width='25%'>
				$PaymentStatus[$orderstatus];
			</td>
		</tr>
		<tr>
			<td width='25%'>City</td>
			<td width='25%'><br/> $city <br/>  $pincode</td>
			<td width='25%'>Remarks</td>
			<td width='25%'>$remarks</td>
		</tr>
	</table>
	<table border=2 width='100%' style='margin-bottom:10px' cellpadding=10>
		<tr>
			<th width='25%'>Name</th>
			<th width='25%'>Price</th>
			<th width='25%'>Quantity</th>
			<th width='25%'>Total</th>
		</tr>";
		$sql = 'select title,c.price,c.quantity from product p,cart c where c.productid=p.id and billid=?';
		$statement = $db->prepare($sql);
		$statement->bindparam(1, $_REQUEST['billid']);
		$statement->execute();
		$GrandTotal = 0;
		while ($cartrow = $statement->fetch()) {
			$output.= "<tr>
				<td>{$cartrow['title']}</td>
				<td align=right>{$cartrow['price']}</td>
				<td align=right>{$cartrow['quantity']} </td>
				<td align=right>" . $cartrow['price'] * $cartrow['quantity'] . "</td>
			</tr>";
			$GrandTotal += ($cartrow['price'] * $cartrow['quantity']);
		} //end of while 
		$output .= "<tr>
			<td colspan=2>Grand total</td>
			<td colspan=2 align='right'>" . number_format($GrandTotal) . "
			</td></tr></table></body></html>";
		//echo $output;
        $dompdf->loadHtml($output);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        // Render the HTML as PDF
        $dompdf->render();  
        // Output the generated PDF to Browser
        $dompdf->stream("order id " . $_REQUEST['billid'] . ".pdf");
?>