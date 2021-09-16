<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Me</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    

  </head>
  <body class="hold-transition login-page">
    <div class="register-box">
      <div class="register-box-body">
        <form id="frmRegister">
          <div class="form-group has-feedback">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" >
          </div>
          <div class="form-group has-feedback">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName">
          </div>
          <div class="form-group has-feedback">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group has-feedback">
            <label for="email2">Confirm Email</label>
            <input type="email" class="form-control" id="email2">
          </div>
          <div class="form-group has-feedback">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password">
          </div>

          
        </form>
        <div class="row">
            <div class="col-xs-8">
              
            </div>
            <div class="col-xs-4">
            <button class="btn btn-primary btn-block btn-flat" id="btnSave"><i class="fa fa-save"></i> Register Me</button>
            </div>
          </div>

        

      </div>
    </div>

    <script src="../public/js/jquery-3.1.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/bootbox.min.js"></script>

    <script type="text/javascript" src="scripts/user.js"></script>


  </body>
</html> 
