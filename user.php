<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
  

    <title>crud operation</title>

  </head>
  <style>
    .containermy-5{
      background-color:darkgrey;
      margin-top: 1%;
      margin-left: 20%;
      height: 27pc;
      width: 40%;
      display: flex;
      align-items: center;
      justify-content: center;

    }
    .form-control{
      height: 2pc;
      width: 20pc;
      border-color: blue;
     
    }
    .btn-primary{
      background-color:darkorange;

    }
   #logo{

      font-size: xx-large;
     
    

    }
    .header{
      background-color: royalblue;
      width: 100%;
      height: 10%;
    }
    .tittle{
      display: flex;
      justify-content: center;
      align-items: center;
      
    }
    .soft{
      color: white;
    }
    .phrase{
      margin-top: -70%;
      margin-left: 30px;
      font-size: xx-large;
      font-weight: 50%;
      color: black;

    }
    .footer{
      background-color: black;
      height: 50px;
    }
    .fry{
      display: flex;
      justify-content: center;
      align-items: center;
      color: blanchedalmond;
      font-size: xx-large;
      font-weight: 50px;

    }
    
  </style>

  <body>
    <div class="header">
      <div class="soft">
  <div id="logo">
            অর্পণ
        </div>
        <h1 class="tittle">Krypto web</h1>
      </div>
    </div>
  <div class="containermy-5">
    <p1 class="phrase">Register now</p1>
  <form method="post">
  <div class="form-group">
  <label>Name</label><br>
    <input type="text" class="form-control" 
    placeholder="Enter your name" name="name" autocomplete="off">
  </div><br>
  <div class="form-group">
  <label>Email</label><br>
    <input type="email" class="form-control" 
    placeholder="Enter your email" name="email" autocomplete="off">
  </div><br>
  <div class="form-group">
  <label>Mobile</label><br>
    <input type="text" class="form-control" 
    placeholder="Enter your mobile number" name="mobile" autocomplete="off">
  </div><br>
  <div class="form-group">
  <label>Password</label><br>
    <input type="text" class="form-control" 
    placeholder="Enter your password" name="password" autocomplete="off">
  </div><br>




 
  <button type="submit" class="btn-primary" name="submit">Submit</button>
 
</form>
</div>
<div class="footer">
  <p2 class="fry">@copyright2021</p2>
</div>
  
  </body>
</html>

<?php

    include('connect.php');

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $insert = "INSERT INTO crud(name, email, mobile, password) VALUES('$name', '$email', '$mobile', '$password')";
        $result = mysqli_query($con, $insert);

        if ($result == true) {
            echo "Created";
        } else {
            echo "An error occured";
        }
    }

?>