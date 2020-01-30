<?php include '../includes/conn.php';?>
<?php

if(isset($_POST['submit'])){

  header("Location: dashboard.php");

}

?> 
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="login.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <body>
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <h1 class="display-3 text-capitalize font-weight-bold rounded">
                    <span class="text-warning text-monospace">
                      <i class = "text-center">The Squad</i>
                    </span>
                  </h1>
              <div class="card card-signin my-5">
                <div class="card-body">
                  <h5 class="card-title text-center">Sign In</h5>
                  <!-- form start -->
                  <form class="form-signin" method="POST" action="index.php">
                    <div class="form-label-group">
                      <input type="text" id="inputText" class="form-control" placeholder="Username" required autofocus>
                      <label for="inputEmail">Username</label>
                    </div>
      
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                    </div>
      
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Remember password</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name = "submit">Sign in</button>
                    <hr class="my-4">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body></body>

</html>