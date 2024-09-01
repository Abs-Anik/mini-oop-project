<?php
include_once('guest.php');
include_once('app/User.php');
// session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = new User();
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    if($user->login()){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;
        header('Location: Dashboard.php');
        exit();
    }else{
        echo "Unable to login";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
            <h2 class="text-center mt-2">Login Form</h2>
            </div>
            <div class="card-body">
                <form action="login.php" method="POST">
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="register.php" class="btn btn-dark">Register</a>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

</body>
</html>
