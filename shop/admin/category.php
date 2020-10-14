<link rel="stylesheet" type="text/css" 
      href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
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
                    <input type="text" class="form-control" id="txttitle" name="txttitle" placeholder="" />
            </div>
            <div class="form-group">
                    <label for="txtdetail">Detail</label>
                    <textarea class="form-control" id="txtdetail" name="txtdetail"  >
                    </textarea>
            </div>
            <div class="form-group">
                    <label for="filphoto">Select Photo</label>
                    <input type="file" class="form-control" id="filphoto" name="filphoto"  placeholder="" accepts="image/*" />
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
                        <tr>
                            <td>1</td>
                            <td>books</td>
                            <td></td>
                            <td>books are the goods to read</td>
                            <td>yes</td>
                            <td>
                                <a href="edit-category.php">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                                <a href="delete-category.php">
                                    <i class="fa fa-trash fa-2x"></i>
                                </a>
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
