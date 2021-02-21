
<?php


$login==true;
$server= "localhost";
$uname = "root";
$pwd= "Itzmejoy@123";
$database ="php_tutorial";

$con = mysqli_connect($server,$uname,$pwd,$database);
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql= "select * from users where usename='$username'";
    $reseult = mysqli_query($con, $sql);
    $num = mysqli_num_rows($reseult);
    if ($num == 1){

      while($row=mysqli_fetch_assoc($reseult)){
        if(password_verify($password,$row['password'])){
        $login =true;
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        // session_write_close();
        header("Location: /loginsystem/welcome.php");
        exit();
        }
        else{
          echo "Invalide Credentials";
        }
    }
    

 }
 
 }




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginsystem</title>
</head>
<body>
    <!doctype html>
<html lang="en">
  <head>

  <!-- /* <style>
body {
  background-image: url('/store.jpg');
  
}

.container {
  text-color : rgb(95, 27, 22);
}


input{
  width: 80%;
  margin: .50% 0%;
  font-size: 15px;
  padding: 12px;
  text-size-adjust: none;
  border-radius: inherit;
  outline: none;
  border-block-color: revert;
}

</style> */ -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
  <body>
  <!-- <div style="background-image: url('/store.jpg);"> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">isecure</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/loginsystem">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/loginsystem/signup.php">signup</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/loginsystem/login.php">login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/loginsystem/logout.php">logout</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/loginsystem/welcome.php">welcome</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    

      <div class="container my-4">
          <h1 class="text-center">login on our site</h1>
    <form style="display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;" action="/loginsystem/login.php" method="POST">
        <div class="mb-3 col-md-6">
          <label for="username" class="form-label">username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="username" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3 col-md-6">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="password">
        </div>
          <div id="emailHelp" class="form-text">Make sure both password are matched</div>
        <button type="submit" class="btn btn-primary">login</button>
      </form>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html>