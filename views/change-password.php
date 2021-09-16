<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Change Password</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    

  </head>
  <body class="hold-transition login-page">
    <div class="register-box">
      <div class="register-box-body">
        <form id="frmChange">
          
            <div class="form-group has-feedback">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
        
            <div class="form-group has-feedback">
                <label for="oldpassword">Old Password</label>
                <input type="password" class="form-control" id="oldpassword">
            </div>

          <div class="form-group has-feedback">
            <label for="newpassword">New Password</label>
            <input type="password" class="form-control" id="newpassword">
          </div>

          
        </form>
        <div class="row">
            <div class="col-xs-8">
              
            </div>
            <div class="col-xs-4">
            <button class="btn btn-primary btn-block btn-flat" id="btnChange"><i class="fa fa-save"></i> Change Password</button>
            </div>
          </div>

        

      </div>
    </div>

    <!-- jQuery -->
    <script src="../public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../public/js/bootbox.min.js"></script>

    <script type="text/javascript" src="scripts/changePass.js"></script>


  </body>
</html> 
