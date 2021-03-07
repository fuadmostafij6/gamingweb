<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="s.css">
</head>
<body>
    
<h3 class="text-center form-title">Register</h3>


        <form action="signup.php" method="post">
          <div class="form-group">
            <label style="color:white;">Username</label>
            <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $_SESSION['username']; ?>">
          </div>
          <div class="form-group">
            <label style="color:white;">Email</label>
            <input type="text" name="email" class="form-control form-control-lg" value="<?php echo $_SESSION['email'];; ?>">
          </div>
          <div class="form-group">
            <label style="color:white;">Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label style="color:white;">Password Confirm</label>
            <input type="password" name="passwordConf" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="signup-btn" class="btn btn-lg btn-block">Update</button>
          </div>
        </form>








</body>
</html>




