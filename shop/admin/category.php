<?php  
  require_once('inc/header_part.php'); 
  require_once("../inc/connection.php");  
?>
<link rel="stylesheet" type="text/css" 
      href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

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
            <h1>Category Management</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <!-- Default box -->
      <div class="card">
      <div class="card-header bg-primary text-white">
          <h3 class="card-title">Add new category</h3>

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
            <form action="submit/insert-category.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="txttitle">Title</label>
                    <input type="text" class="form-control" id="txttitle" name="txttitle" placeholder="" required />
            </div>
            <div class="form-group">
                    <label for="txtdetail">Detail</label>
                    <textarea class="form-control" id="txtdetail" name="txtdetail" required  >
                    </textarea>
            </div>
            <div class="form-group">
                    <label for="filphoto">Select Photo</label>
                    <input type="file" class="form-control" id="filphoto" name="filphoto"  placeholder="" accepts="image/*" required />
            </div>
            <b>Is Live?</b>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdoislive" value="1">
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdoislive" value="0">
                <label class="form-check-label">No</label>
              </div>
             
            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary" name='btnsubmit'>Save</button>
                  <button type="reset" class="btn btn-default">Reset</button>
            </div>
            <?php 
               if(isset($_REQUEST['message'])==true) 
                  alert($_REQUEST['message']);
            ?>  
            </form>
        </div>
      </div>
    </section>

    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h3 class="card-title">Existing categories</h3>

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
				<table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th width='7%'>Sr no</th>
                            <th>title</th>
                            <th>photo</th>
                            <th>detail</th>
                            <th width='7%'>is live?</th>
                            <th width='10%'>task</th>
                        </tr>
                    </thead>
                    <tbody>
      <?php 
          $sql = "select * from category where isdeleted=0 order by id desc";
          //insert update delete select all queries can be executed using library function mysqli_query
		  $count=1;
          $category = mysqli_query($link,$sql) or die(mysqli_error($link));
		  while($row = mysqli_fetch_assoc($category))
		  //fetch one row(record ) from $category variable and store it as associative array in $row 
          {
      ?>
                        <tr>
                            <td><?php echo $count++; ?> </td>
                            <td><?php echo $row['title'] ?></td>
                            <td>
                            <a data-fancybox="gallery" href="../images/category/<?php echo $row['photo']; ?>" >
                              <img src="../images/category/<?php echo $row['photo']; ?>" class="img-fluid small" />
                              </a>
                            </td>
                            <td><?php echo $row['detail'] ?></td>
                            <td>
                                <?php 
                                    if($row['islive']=="1")
                                      echo "Live";
                                    else 
                                      echo "Not Live";
                                ?>
                            </td>
                            <td>
                                <a href="edit-category.php?id=<?php echo $row['id']; ?>">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                                <a href="delete-category.php?id=<?php echo $row['id']; ?>">
                                    <i class="fa fa-trash fa-2x"></i>
                                </a>
                            </td>
                        </tr>
        <?php 
		  }
		?> 
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
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js">
</script>
<script>
  //datatable plugins activation code
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>
</body>
</html>
