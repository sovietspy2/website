<?php
    if (isset($_SESSION['name'])) {
        print '<div class="jumbotron">
        <h1>Weclome '.$_SESSION['name'].' </h1> 
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                                                                         responsive, mobile-first projects on the web.</p> 
      </div>';
    } else {
        print 'no content here!+';
    }


?>