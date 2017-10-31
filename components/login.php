<?php

if (isset($_POST['name']) && isset($_SESSION['name'])==false) {

    $name = $_POST['name'];
    $pass = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "data";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT  data FROM user WHERE username = ".$name." AND password = ".$pass.";
    $result = $conn->query($sql);

    print $result;
    
    $conn->close();
}


print '<form class="form-inline my-2 my-lg-0" action="login.php" method="post">
      <input class="form-control mr-sm-2" name="name" type = "text" placeholder = "name" >
      <input class="form-control mr-sm-2" name="password" type = "password" placeholder = "pass" >
      <button class="btn btn-outline-success my-2 my-sm-0" type = "submit" > Enter</button >
    </form >';