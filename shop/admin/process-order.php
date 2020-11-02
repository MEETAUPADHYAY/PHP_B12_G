<?php  
	require_once('inc/header_part.php'); 
	require_once('../inc/connection2.php'); 
?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php require_once('inc/links.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Management</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <!-- Default box -->
      <div class="card">
      <div class="card-header bg-primary text-white">
          <h3 class="card-title">Order detail</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <?php 
            //get bill detail 
            $sql = "select * from bill where id=?";
            $statement = $db->prepare($sql);
            $statement->bindparam(1,$_REQUEST['billid']);
            $statement->execute();
            $row = $statement->fetch();
            extract($row);
        ?>
        <div class="card-body">
                  <form action="submit/process-order.php" method="post">
                  <input type="hidden" name="billid" value="<?php echo $_REQUEST['billid']; ?>">
  				  <table class="table table-striped table-bordered" width='100%'>
  				    <tr>
  				        <td width='25%'>Order No</td>
  				        <td width='25%'><?php echo $id; ?></td>
  				        <td width='25%'>Order Date</td>
  				        <td width='25%'><?php echo date("D d-m-Y",strtotime($billdate)); ?></td>
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
  				          <div class="form-group">
                                <select class="form-control" name="sltpaymentstatus" required>
                            <?php 
                                $PaymentStatus = array("unpaid","paid");
								$size = sizeof($PaymentStatus);       
								$index=0;
                                    while($index<$size)
                                    {
                                        if($index==$row['paymentstatus'])
                                                echo "<option selected='selected' value='$index'> $PaymentStatus[$index]</option>";
										else 
                                                echo "<option value='$index'> $PaymentStatus[$index]</option>";
                                        
                                        $index++;
								}
                            ?>
                                </select>
                            </div>
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
                          <div class="form-group">
                                <select class="form-control" name="sltorderstatus" required>
								<?php 
                                    $Orderstatus = array("","Confirmed","Dispatched","Delivered");
									$size = sizeof($Orderstatus);       
									$index=0;
                                    while($index<$size)
                                    {
                                        if($index==$row['orderstatus'])
                                            echo "<option value='$index' selected='selected'> $Orderstatus[$index]</option>";
                                        else 
                                            echo "<option value='$index'> $Orderstatus[$index]</option>";
                                        $index++;
									}
                                ?>
                                </select>
                            </div>
  				        </td>
  				    </tr>
                      <tr>
  				        <td width='25%'>City</td>
  				        <td width='25%'><?php echo "<br/> $city <br/> $pincode"; ?></td>
  				        <td width='25%'>Remarks</td>
  				        <td width='25%'><?php echo "$remarks"; ?></td>
  				    </tr>
  				  </table>
  				  <div>
  				      <p class=text-right>
  				          <button types="submit" class="btn btn-danger">Process Order</button>
  				          <a href="print-order.php?billid=<?php echo $_REQUEST['billid']; ?>" class="btn btn-info">Print</a>
  				      </p>
  				  </div>
  				  <table class="table table-striped table-bordered mt-5" width='100%'>
  				      <thead>
  				          <tr>
  				              <th width='25%'>Name</th>
  				              <th width='25%'>Price</th>
  				              <th width='25%'>Quantity</th>
  				              <th width='25%'>Total</th>
  				          </tr>
  				      </thead>
  				      <tbody>
  				      <?php 
  				          $sql = "select title,c.price,c.quantity from product p,cart c where c.productid=p.id and billid=?";
						$statement = $db->prepare($sql);
						$statement->bindparam(1,$_REQUEST['billid']);
						$statement->execute();
						$GrandTotal=0;
						while($cartrow=$statement->fetch())
						{
  				      ?>
  				          <tr>
  				              <td><?php echo $cartrow['title'] ?></td>
  				              <td align=right><?php echo $cartrow['price'] ?></td>
  				              <td align=right> <?php echo $cartrow['quantity'] ?></td>
  				              <td align=right><?php echo $cartrow['price'] * $cartrow['quantity'] ?></td>
  				          </tr>
  				     <?php 
  				          $GrandTotal+= ($cartrow['price']*$cartrow['quantity']);
						} //end of while 
  				        ?>  
  				          <tr>
  				              <td colspan=2>Grand total</td>
  				              <td colspan=2 align="right">
								<?php echo number_format($GrandTotal) ?>
  				              </td>
  				             
  				          </tr>
  				      </tbody>
  				      
  				  </table>
            </form>
        </div>
      </div>
    </section>
  </div>
</div>
<?php require_once('inc/script.php'); ?>
</body>
</html>
