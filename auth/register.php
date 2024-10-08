<?php
include_once('guest.php');
include_once('app/User.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = new User();
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    if($user->register()){
        echo "User registered successfully";
    }else{
        echo "User registration failed";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 pt-4">
        <div class="card">
            <div class="card-title">
            <h2 class="text-center mt-2">Registration Form</h2>
            </div>
            <div class="card-body">
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="register">Submit</button>
                <a href="login.php" class="btn btn-dark">Login</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
