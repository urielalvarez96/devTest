<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dev Test</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <link rel="stylesheet" href="../public/css/styles.css">


  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-box-body">
        <p class="login-box-msg">Enter your credentials</p>
        <form method="post" id="frmAcceso">
          <div class="form-group has-feedback">
            <input type="text" id="logina" name="logina" class="form-control" placeholder="User">
            <span class="fa fa-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="clavea" name="clavea" class="form-control" placeholder="Password">
            <span class="fa fa-key form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
            <a href="register.php">Register me!</a><br>
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Enter</button>
            </div>
          </div>
        </form>


        

      </div>
    </div>

    <script src="../public/js/jquery-3.1.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/bootbox.min.js"></script>

    <script type="text/javascript" src="scripts/login.js"></script>


  </body>
</html> 
