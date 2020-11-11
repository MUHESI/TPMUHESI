<?php

if (isset($_GET['page']) /*&& !empty($_GET['page'])*/) {
    $page = $_GET['page'];

    if ($page == "importation") {
        
        require('importation.php');
    }
    elseif ($page == "exportation") {
        require('exportation.php');
    }
    elseif($page=="rapport"){
        require('rapport.php');
    }
     elseif($page=="rapportFiltre"){
        require('rapportFiltre.php');
    }

}

else{
    //require('access.php');
}
?>
        