<?php
    include "../connect/connect.php";
    include "../connect/session.php";
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
                <h3>문의하기</h3>
                <p>스터디, 강의에 대한 궁금한 사항은 언제든지 문의주세요!</p>
                <section class="section-contact">
                    <h4 class="ir_so">문의하기 컨텐츠 작성</h4>
                    <div class="contact">
                        <form action="contactSave.php" name="contact" method="post">
                            <fieldset>
                                <legend class="ir_so">문의하기 작성 영역입니다.</legend>  
                                <div>
                                    <label for="contactFrom">FROM</label>
                                    <input type="text" name="contactFrom" id="contactFrom" class="title-text" placeholder="메일 주소를 입력해주세요!" >
                                </div>
                                <div>
                                    <label for="contactTo">TO</label>
                                    <input type="text" name="contactTo" id="contactTo" class="title-text" value="ddalim0014@gmail.com" disabled>
                                </div>
                                <div>
                                    <label for="contactSubject">SUBJECT</label>
                                    <input type="text" name="contactSubject" id="contactSubject" class="title-text" placeholder="제목을 입력해주세요!" >
                                </div>
                                <div>
                                    <label for="contactContent">CONTENT</label>
                                    <textarea name="contactContent" id="contactContent" rows="13" placeholder="자세하고 구체적인 내용을 적어주세요!"></textarea>
                                </div>
                            </fieldset>
                            <button class="btn" type="submit" value="보내기">보내기</button>
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