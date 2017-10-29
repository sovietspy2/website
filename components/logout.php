<?php
    if  (isset($_SESSION['name'])) {
        session_destroy();
        print '<div class="alert alert-success" role="alert"><p>You succesfully logged out (session destroyed)</p></div>';
    } else {
        print '<div class="alert alert-danger" role="alert"><p>Error no session</p></div>';
    }
