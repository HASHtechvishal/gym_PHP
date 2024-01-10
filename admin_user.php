<?php require 'config/function.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registration Form | gym_php </title>
    <link rel="stylesheet" href="assets/css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration <a href="index.php">HOME</a></div>
    <div class="content">
      <?php alertMessage(); ?>
      <form action="codes/login_form.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id="fName" name="fName" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="uName" name="uName" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="number" name="number" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="cPass" name="cPass" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="role" id="dot-1" value="admin">
          <input type="radio" name="role" id="dot-2" value="user">
          <input type="radio" name="role" id="dot-3" value="guest">
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
          <input type="submit" name="save" value="Register">
          <span>Already joined <a href="login.php">login</a></span>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
