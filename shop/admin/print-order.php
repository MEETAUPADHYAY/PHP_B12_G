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
          		  <table border='2' width='100%' style='margin-bottom:10px' cellpadding=10>
  				    <tr>
  				        <td width='25%'>Order No</td>
  				        <td width='25%'></td>
  				        <td width='25%'>Order Date</td>
  				        <td width='25%'></td>
  				    </tr>
  				    <tr>
  				        <td width='25%'>Customer Detail</td>
  				        <td width='25%'></td>
  				        <td width='25%'>Payment Mode</td>
  				        <td width='25%'>
  				        </td>
  				    </tr>
                      <tr>
  				        <td width='25%'>Delivery Address</td>
  				        <td width='25%'></td>
  				        <td width='25%'>Order status</td>
  				        <td width='25%'>
                          
  				        </td>
  				    </tr>
                      <tr>
  				        <td width='25%'>City</td>
  				        <td width='25%'></td>
  				        <td width='25%'>Remarks</td>
  				        <td width='25%'></td>
  				    </tr>
  				  </table>
  				 
  				  <table border=2 width='100%' style='margin-bottom:10px' cellpadding=10>
  				          <tr>
  				              <th width='25%'>Name</th>
  				              <th width='25%'>Price</th>
  				              <th width='25%'>Quantity</th>
  				              <th width='25%'>Total</th>
  				          </tr>
  				     
  				          <tr>
  				              <td>T-shirt</td>
  				              <td>500</td>
  				              <td>2</td>
  				              <td>1000.0</td>
  				          </tr>
  				          <tr>
  				              <td>jeans</td>
  				              <td>1000</td>
  				              <td>2</td>
  				              <td>2000.0</td>
  				          </tr>
  				          <tr>
  				              <td colspan=2>Grand total</td>
  				              <td colspan=2 class=text-right>3000.0</td>
  				             
  				          </tr>
  				          
  			</table>
</body>
</html>
