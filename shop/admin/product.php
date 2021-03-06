<?php  
    require_once('inc/verify_login.php'); 
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
            <h1>Product Management</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <!-- Default box -->
      <div class="card">
      <div class="card-header bg-primary text-white">
          <h3 class="card-title">Existing Products</h3>

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
        <?php 
               if(isset($_REQUEST['message'])==true) 
                  alert($_REQUEST['message']);
        ?>
        <p class='text-right'>
          <a class='btn btn-success m-2' href='add-product.php'>Add Product</a>
        </p>
				<table id="myTable" class="table table-bordered table-striped table-hover" width="100%">
				    <thead>
				        <th width='7%'>Sr No</th>
				        <th width='15%'>Category</th>
				        <th width='30%'>Title</th>
				        <th width='20%'>Price</th>
				        <th width=''>Photo</th>
				        <th width='15%'>Operations</th>
				    </thead>
				    <tbody>
				    <?php 
				        $count = 1;
				        $sql = "select p.id,p.title,price,p.photo,c.title 'ctitle' from product p, category c where categoryid=c.id and p.isdeleted=0 order by id desc";
				        $statement = $db->prepare($sql);
				        $statement->setFetchMode(PDO::FETCH_ASSOC);
				        $statement->execute();
				        while($row = $statement->fetch())
				        {
				      
				    ?>
				        <tr>
				            <td><?php echo $count++; ?></td>
				            <td><?php echo $row['ctitle']; ?></td>
				            <td><?php echo $row['title']; ?></td>
				            <td><?php echo $row['price']; ?></td>
				            <td>
				              <img src="../images/product/<?php echo $row['photo']; ?>" alt="" class="medium" />
				            </td>
				            <td>
                            <a href="view-product-detail.php?productid=<?php echo $row['id'] ?>">
                                    <i class="fa fa-eye fa-2x mr-2"></i>
                                </a>
                                <a href="edit-product.php?productid=<?php echo $row['id'] ?>">
                                    <i class="fa fa-edit fa-2x mr-2"></i>
                                </a>
                                <a href="delete-product.php?productid=<?php echo $row['id'] ?>">
                                    <i class="fa fa-trash fa-2x"></i>
                                </a>
				            </td>
				        </tr>
                <?php } //end of while ?>
				        
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
