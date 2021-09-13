<?php

    $link = mysqli_connect("hostname", "username","password", "databasename");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>
