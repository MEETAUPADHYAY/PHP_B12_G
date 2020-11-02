<?php  require_once('inc/header_part.php'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Admin Login</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="submit/verify_user.php" method="post">
        <div class="input-group mb-3">
          <input name="txtemail" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="txtpassword" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="btnsubmit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <div class="row mt-2">
          <div class="col-12">
              <a href="forgot-password.php" class="btn btn-danger btn-block">I forgot my password</a>
          <?php 
          if(isset($_REQUEST['message'])==true)
              echo "<div class='mt-3 alert alert-warning'>{$_REQUEST['message']}</div>";
          ?>
          </div>
         
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<?php require_once('inc/script.php'); ?>
</body>
</html>
