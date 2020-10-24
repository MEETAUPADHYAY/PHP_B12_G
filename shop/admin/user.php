<?php  
    require_once('inc/header_part.php'); 
    require_once('../inc/connection2.php'); 
?>
<link rel="stylesheet" type="text/css" 
      href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

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
            <h1>Users Management</h1>
          </div>    
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <!-- Default box -->
      <div class="card">
      <div class="card-header bg-primary text-white">
          <h3 class="card-title">Users</h3>

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
  		    <table class="table table-bordered table-striped" id="myTable">
  		        <thead>
  		            <tr>
  		                <th>Email</th>
  		                <th>Mobile</th>
  		                <th>Total shopping</th>
  		                <th>is Live</th>
  		                <th>history</th>
  		            </tr>
  		        </thead>
  		        <tbody>
  		        <?php 
  		            $sql = "select id,email,mobile,status from customer order by id desc";
  		            $statement = $db->prepare($sql);
  		            $statement->setFetchMode(PDO::FETCH_ASSOC);
  		            $statement->execute();
  		            while($row = $statement->fetch())
  		            {
  		            extract($row)
  		        ?>
  		            <tr>
  		                <td><?php echo $email; ?></td>
  		                <td><?php echo $mobile; ?></td>
  		                <td><?php echo rand(10000,50000); ?></td>
  		                <td>
  		                  <?php 
  		                      if($status == 1)
  		                          echo "Yes";
  		                      else 
  		                          echo "No";
  		                  ?>
  		                </td>
  		                <td>
  		                    <a href="order.php?id=<?php echo $id; ?>"><i class='fa fa-eye'></i></a>
  		                </td>
  		            </tr>
                  <?php } ?>
  		        </tbody>
  		    </table>
        </div>
      </div>
    </section>
  </div>
</div>
<?php require_once('inc/script.php'); ?>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
</script>
<script>
  //datatable plugins activation code
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>
</body>
</html>
