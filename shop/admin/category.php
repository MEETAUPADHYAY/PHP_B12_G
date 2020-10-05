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
				Content goes here
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
				<table class="table table-striped table-bordered">
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
                                <a href="#">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                                <a href="#">
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
</body>
</html>
