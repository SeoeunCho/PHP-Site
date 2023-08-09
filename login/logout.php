<?php
    include "../connect/session.php";

    unset($_SESSION['memberID']);
    unset($_SESSION['youEmail']);
    unset($_SESSION['youName']);
?>

<script> 
    location.href="../pages/main.php";
</script>