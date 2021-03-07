<?php include 'controllers/authController.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="s.css">
  <title>GamePalace-Login</title>
  <!-- form title -->
 <!-- or Login -->

<?php if (count($errors) > 0): ?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
    <li>
      <?php echo $error; ?>
    </li>
    <?php endforeach;?>
  </div>
<?php endif;?>
</head>
<body style="background-image: url('617631.jpg');   background-repeat: no-repeat; background-position: center;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title" style="color:white; box-shadow:2px 2px 3px purple;  background: transparent;" >Login</h3>
        <form action="login.php" method="post">
          <div class="form-group">
            <label style="color:white; background:black;border-radius:5px;padding:5px">Username or Email</label>
            <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $username; ?>">
          </div>
          <div class="form-group">
            <label style="color:white; background:black;border-radius:5px;padding:5px">Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="login-btn" class="btn btn-lg btn-block">Login</button>
          </div>
        </form>
        <p style="color:white;">Don't yet have an account? <a href="signup.php">Sign up</a></p>
      </div>
    </div>
  </div>
</body>
</html>