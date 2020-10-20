<?php  
    require_once('inc/header_part.php'); 
    require_once('../inc/connection2.php'); 
    extract($_REQUEST);
    $sql = "select p.*,c.title 'ctitle' from product p, category c where p.id=? and categoryid=c.id";
    $statement = $db->prepare($sql);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute(array($productid));
    $row = $statement->fetch();
    extract($row);
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
            <h1>Product Management</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <!-- Default box -->
      <div class="card">
      <div class="card-header bg-primary text-white">
          <h3 class="card-title">Products Detail</h3>

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
                <p class="text-right">
                    <a href="product.php" class="btn btn-info">BACK</a>
                </p>
				<table class="table table-bordered table-striped table-hover" width="100%">
				    <thead>
				        <th width='30%'>Sr No</th>
				        <th width='70%'>Category</th>
				    </thead>
				    <tbody>
				        <tr>
				            <td>Title</td>
				            <td><?php echo $title ?></td>
				        </tr>
				        <tr>
				            <td>Category</td>
				            <td><?php echo $ctitle ?></td>
				        </tr>
				        <tr>
				            <td>Price</td>
				            <td><?php echo $price ?></td>
				        </tr>
				        <tr>
				            <td>Stock</td>
				            <td><?php echo $stock ?></td>
				        </tr>
				        <tr>
				            <td>Weight</td>
				            <td><?php echo $weight ?></td>
				        </tr>
				        <tr>
				            <td>Size</td>
				            <td><?php echo $size ?></td>
				        </tr>
				        <tr>
				            <td>Photo</td>
				            <td>
                    <img src="../images/product/<?php echo $row['photo']; ?>" alt=""  />
				            </td>
				        </tr>
				        <tr>
				            <td>Detail</td>
				            <td><?php echo $detail ?></td>
				        </tr>
				        <tr>
				            <td>is Live</td>
				            <td>
				              <?php 
				                if($islive==1)
				                  echo "Yes";
				                else 
				                  echo "No";
				              ?>
				            </td>
				        </tr>
                       
								        
                    </tbody>
				</table>
                <p class="text-right mt-3">
                 <a href="product.php" class="btn btn-info">BACK</a>
                </p>
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
