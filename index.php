<html>
    <head>
        <h1> Welcome </h1>
    </head>
    <?php
       include "components/menu.php";

    if( isset( $_GET['page'] ) )
    {
        $page=$_GET['page'];
        include "components/".$page.".php";
    }
    ?>
</html>