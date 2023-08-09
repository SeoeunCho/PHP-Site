<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP class</title>

    <?php
        include "../include/link.php";
    ?>
</head>
<body>
    <div id="skip">
        <a href="#main">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="main">
        <section id="mainContent">
            <h2 class="ir_so">메인 컨텐츠</h2>

            <article class="content-article">
                <h3>게시판 수정하기</h3>
                <p>게시글의 제목과 내용을 수정할 수 있습니다.</p>
                <section class="section-board">
                    <h4 class="ir_so">게시판 컨텐츠 수정</h4>

                    <div class="board-modify">
                        <form action="boardModifySave.php" name="boardModify" method="post">
                            <fieldset>
                                <legend class="ir_so">게시판 수정 영역입니다.</legend>

<?php
    $boardID = $_GET['boardID'];

    $sql = "SELECT b.boardTitle, b.boardContent, m.youName FROM phpBoard b JOIN phpMember m ON (b.memberID = m.memberID) WHERE b.boardID = {$boardID}";
    $result = $connect -> query($sql);

    if( $result ){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        echo "<div style='display:none'><label for='boardID'>번호</label>";
        echo "<input type='text' name='boardID' id='boardID' value='".$_GET['boardID']."'></div>";
        echo "<div><label for='boardTitle'>제목</label>";
        echo "<input type='text' name='boardTitle' id='boardTitle' value='".$info['boardTitle']."'></div>";
        echo "<div><label for='boardContent'>내용</label>";
        echo "<textarea name='boardContent' id='boardContent' rows='13'>".$info['boardContent']."</textarea></div>";
        echo "<div><label for='boardPass'>비밀번호</label>";
        echo "<input type='password' name='boardPass' id='boardPass' placeholder='로그인 비밀번호를 입력해주세요!!' autocomplete='off' required></div>";
    } 
?>
                                <!-- <div>
                                    <label for="boardID">번호</label>
                                    <input type="text" name="boardID" id="boardID">
                                </div>    
                                <div>
                                    <label for="boardTitle">제목</label>
                                    <input type="text" name="boardTitle" id="boardTitle" class="title-text" >
                                </div>
                                <div>
                                    <label for="boardContent">내용</label>
                                    <textarea name="boardContent" id="boardContent" rows="13"></textarea>
                                </div>
                                <div>
                                    <label for="boardPass">비밀번호</label>
                                    <input type="password" name="boardPass" id="boardPass" placeholder="로그인 비밀번호를 입력해주세요!!" autocomplete="off" required>
                                </div> -->
                            </fieldset>
                            <button class="btn" type="submit" value="저장하기">저장하기</button>
                        </form>
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //header -->

    <?php
        include "../include/footer.php";
    ?>
    <!-- //header -->
</body>
</html>