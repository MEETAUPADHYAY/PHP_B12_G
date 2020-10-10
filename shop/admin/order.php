</head>
<?php  require_once('inc/header_part.php'); ?>
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
          <h3 class="card-title">Recent Orders</h3>

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
			<table class="table table-bordered table-striped table-hover" width='100%'>
			    <thead>
			        <tr>
			            <th>Date</th>
			            <th>Amount</th>
			            <th>Payment status</th>
			            <th>order status</th>
			            <th>City</th>
			            <th></th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>Fri 09-oct-2020</td>
			            <td>25000</td>
			            <td>Paid</td>
			            <td>Confirmed</td>
			            <td>Bhavnagar</td>
			            <td>
			                <a href=""><i class='fa fa-eye'></i></a> &nbsp;
			            </td>
			        </tr>
                    <tr>
			            <td>Thu 08-oct-2020</td>
			            <td>12500</td>
			            <td>COD</td>
			            <td>Delivered</td>
			            <td>Surat</td>
			            <td>
			                <a href="process-order.php"><i class='fa fa-eye'></i></a> &nbsp;
			            </td>
			        </tr>
			    </tbody>
			</table>
        </div>
      </div>
    </section>
  </div>
</div>
<?php require_once('inc/script.php'); ?>
</body>
</html>
