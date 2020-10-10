<?php  require_once('inc/header_part.php'); ?>
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
        <div class="card-body">
                  <form action="">
  				  <table class="table table-striped table-bordered" width='100%'>
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
  				          <div class="form-group">
                                <select class="form-control" name="" required>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
  				        </td>
  				    </tr>
                      <tr>
  				        <td width='25%'>Delivery Address</td>
  				        <td width='25%'></td>
  				        <td width='25%'>Order status</td>
  				        <td width='25%'>
                          <div class="form-group">
                                <select class="form-control" name="" required>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
  				        </td>
  				    </tr>
                      <tr>
  				        <td width='25%'>City</td>
  				        <td width='25%'></td>
  				        <td width='25%'>Remarks</td>
  				        <td width='25%'></td>
  				    </tr>
  				  </table>
  				  <div>
  				      <p class=text-right>
  				          <button types="submit" class="btn btn-danger">Process Order</button>
  				          <a href="print-order.php" class="btn btn-info">Print</a>
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
