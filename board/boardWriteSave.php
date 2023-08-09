<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardTitle = $_POST['boardTitle'];
    $boardContent = $_POST['boardContent'];

    //echo $boardTitle, $boardContent;

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContent = $connect -> real_escape_string($boardContent);
    $boardView = 1;
    $regTime = time();
    $memberID = $_SESSION['memberID'];

    //데이터 입력
    $sql = "INSERT INTO phpBoard(memberID, boardTitle, boardContent, boardView, regTime) 
            VALUES('$memberID', '$boardTitle', '$boardContent', '$boardView', '$regTime')";

    $result = $connect -> query($sql);
    
    // if( $result ){
    //     echo "gooooood";
    // } else {
    //     echo "bad";
    // }
?>

<script>
    location.href = "board.php";
</script>