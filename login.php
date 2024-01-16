<?php
if(isset($_SESSION['loggedId'])){
?>
  <script>window.location.href = 'index.php'</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> login Form | gym_php </title>
    <link rel="stylesheet" href="assets/css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Login <a href="index.php">HOME</a> </div> 
    <div class="content">
      <form action="codes/login_form.php" method="post">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="admin">
          <input type="radio" name="gender" id="dot-2" value="user">
          <input type="radio" name="gender" id="dot-3" value="guest">
          <span class="gender-title">Roles</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Admin</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">User</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Guest</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="login" value="Login">
          <span>Not a member <a href="admin_user.php">Register</a></span>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
