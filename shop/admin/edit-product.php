<?php  
    require_once('inc/header_part.php'); 
    require_once('../inc/connection2.php'); 
    extract($_REQUEST);
    $sql = "select * from product where id=?";
    $statement = $db->prepare($sql);
    $statement->bindparam(1,$productid);
    $statement->execute();
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
            <h1>Product management</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <!-- Default box -->
      <div class="card">
      <div class="card-header bg-primary text-white">
          <h3 class="card-title">Edit product</h3>

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
        <form action="submit/update-product.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="txttitle">Edit Title</label>
                        <input type="text" class="form-control" id="txttitle" name="txttitle" placeholder="" required value="<?php echo $title; ?>" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="form-group">
                    <label for='sltcategoryid'>change Category</label>
                    <select class="form-control" name="sltcategoryid" id='sltcategoryid' required>
                      <option value=''>select</option>
                      <option value='1'>Boys</option>
                      
                    </select>
                      </div>
                </div>
            </div>
           <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                    <label for="txtprice">Edit Price</label>
                    <input type="number" class="form-control" id="txtprice" name="txtprice" placeholder="" required value="<?php echo $price; ?>" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="txtquantity">Edit Quantity</label>
                        <input type="number" class="form-control" id="txtquantity" name="txtquantity" placeholder="" required value="<?php echo $stock; ?>" />
                     </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="txtweight">Edit Weight</label>
                        <input type="number" class="form-control" id="txtweight" name="txtweight" placeholder=""  value="<?php echo $weight; ?>" />
                     </div>
                </div>
           </div>
           <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="txtsize">Edit Size</label>
                        <input type="text" class="form-control" id="txtsize" name="txtsize" placeholder="" value="<?php echo $size; ?>" />
                     </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="filphoto">change Photo</label>
                        <input type="file" class="form-control" id="filphoto" name="filphoto" accept="image/*"  />
                     </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                  <img class="small" src="../images/product/<?php echo $photo; ?>" alt=""  />

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <?php 
                    $yes = "checked";
                    $no = null;
                    if($islive==0)
                    {
                        $yes = null;
                        $no = "checked";
                    }
                ?>
                    <b>Is Live?</b>
                    <div class="form-group">
                      <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="rdoislive" value="1" required <?php echo $yes; ?> />
                        <label class="form-check-label">Yes</label>
                        
                        <input class="form-check-input ml-3" type="radio" name="rdoislive" value="0" required <?php echo $no; ?>>
                        <label class="form-check-label">No</label>
                      </div>
                      
                    </div>
                </div>
           </div>
            <div class="form-group">
                    <label for="txtdetail">Edit Detail</label>
                    <textarea class="form-control" id="txtdetail" name="txtdetail" rows=3 required  ><?php echo $detail; ?>
                    </textarea>
            </div>
            <div class="form-group">
                  <button type="submit" name="btnsubmit" class="btn btn-primary">Save changes</button>
                  <button type="reset" class="btn btn-default">Reset</button>
            </div>
            <input type="hidden" name="oldphoto" value="<?php echo $photo; ?>" />
            <input type="hidden" name="productid" value="<?php echo $id; ?>" />
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
