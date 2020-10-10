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
            <h1>Change Password</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-8 offset-2">
            <div class="col-lg-8 offset-2">
            <div class="card">
      <div class="card-header bg-primary text-white">
          <h3 class="card-title">change existing password</h3>

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
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="txtcurrentpassword">Current Password</label>
                    <input type="password" class="form-control" id="txtcurrentpassword" name="txtcurrentpassword" placeholder="" />
            </div>
            <div class="form-group">
                    <label for="txtnewpassword">New Password</label>
                    <input type="password" class="form-control" id="txtnewpassword" name="txtnewpassword" placeholder="" />
            </div>
            <div class="form-group">
                    <label for="txtnewpassword2">Confirm new Password</label>
                    <input type="password" class="form-control" id="txtnewpassword2" name="txtnewpassword2" placeholder="" />
            </div>
            
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  <button type="reset" class="btn btn-default">Reset</button>
            </div>
            </form>
        </div>
      </div>
            </div>
        </div>
        
    </section>

    
  </div>
</div>
<?php require_once('inc/script.php'); ?>
</body>
</html>
