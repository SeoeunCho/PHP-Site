<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP class : 로그인</title>

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
        <section id="mainContent" class="gray">
            <h2 class="ir_so">메인 컨텐츠</h2>

            <article class="content-article">
                <div class="member-form">
                    <h3>로그인</h3>
                    
                    <div class="mt50">
                        <form name="login" action="loginSave.php" method="POST">
                            <fieldset>
                                <legend class="ir_so">로그인 입력폼</legend>
                                <div class="member-box">
                                    <div>
                                        <label for="youEmail">이메일</label>
                                        <input type="email" name="youEmail" id="youEmail" class="input_write" placeholder="Sample@naver.com" autocmplete="off" autofocus required>
                                    </div>
                                    <div>
                                        <label for="youPass">비밀번호</label>
                                        <input type="password" name="youPass" id="youPass" class="input_write" maxlength="20" placeholder="비밀번호를 적어주세요!" autocmplete="off" required>
                                    </div>
                                </div>
                            </fieldset>
                            <button id="loginBtn" class="btn_submit" type="submit">로그인</button>
                        </form>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //main -->

    <?php
        include "../include/footer.php";
    ?>
    <!-- //header -->
</body>
</html>