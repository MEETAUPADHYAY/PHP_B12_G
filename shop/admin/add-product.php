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
            <h1>Product management</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <!-- Default box -->
      <div class="card">
      <div class="card-header bg-primary text-white">
          <h3 class="card-title">Add new product</h3>

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
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="txttitle">Title</label>
                        <input type="text" class="form-control" id="txttitle" name="txttitle" placeholder="" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="form-group">
                    <label for='sltcategoryid'>Select Category</label>
                    <select class="form-control" name="sltcategoryid" id='sltcategoryid'>
                      <option value=''>select</option>
                      <option value='1'>Boys</option>
                      
                    </select>
                      </div>
                </div>
            </div>
           <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                    <label for="txtprice">Price</label>
                    <input type="number" class="form-control" id="txtprice" name="txtprice" placeholder="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="txtquantity">Quantity</label>
                        <input type="number" class="form-control" id="txtquantity" name="txtquantity" placeholder="" />
                     </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="txtweight">Weight</label>
                        <input type="number" class="form-control" id="txtweight" name="txtweight" placeholder="" />
                     </div>
                </div>
           </div>
           <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="txtsize">Size</label>
                        <input type="text" class="form-control" id="txtsize" name="txtsize" placeholder="" />
                     </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="filphoto">Select Photo</label>
                        <input type="file" class="form-control" id="filphoto" name="filphoto"  placeholder="" />
                     </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <b>Is Live?</b>
                    <div class="form-group">
                      <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="rdoislive" value="1">
                        <label class="form-check-label">Yes</label>
                        
                        <input class="form-check-input ml-3" type="radio" name="rdoislive" value="0">
                        <label class="form-check-label">No</label>
                      </div>
                      
                    </div>
                </div>
           </div>
            <div class="form-group">
                    <label for="txtdetail">Detail</label>
                    <textarea class="form-control" id="txtdetail" name="txtdetail" rows=3  >
                    </textarea>
            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="reset" class="btn btn-default">Reset</button>
            </div>
            </form>
        </div>
      </div>
    </section>
  </div>
</div>
<?php require_once('inc/script.php'); ?>
<script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'txtdetail' );
</script>
</body>
</html>
