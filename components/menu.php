<?php
if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    $var = $_POST['name'];
}
if (isset($_SESSION['name'])) {
    $name =  $_SESSION['name'];
} else {
    $name = 'Anonymus';
}

print '<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">'.$name.'</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=info">Info</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php?page=logout">Logout</a>
      </li>
    </ul>';
if (isset($_SESSION['name'])==false) {
    print '<form class="form-inline my-2 my-lg-0" action="index.php" method="post">
      <input class="form-control mr-sm-2" name="name" type = "text" placeholder = "name" >
      <button class="btn btn-outline-success my-2 my-sm-0" type = "submit" > Enter</button >
    </form >';
}
print '</div>
</nav>';

if( isset( $_GET['page'] ) )
{
    $page=$_GET['page'];
    include "components/".$page.".php";
}
?>