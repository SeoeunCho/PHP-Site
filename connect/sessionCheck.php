<?php
    if( !isset($_SESSION['memberID']) ){
        Header("Location: ../pages/alert.php");
    }
?>