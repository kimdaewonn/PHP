<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $myBlogID = $_GET['blogID'];
    

    $blogSql = "SELECT * FROM myblog WHERE myBlogID = {$myBlogID}";
    $blogResult = $connect -> query($blogSql);
    $blogInfo = $blogResult -> fetch_array(MYSQLI_ASSOC);

    // $commentSql = "SELECT * FROM myComment";
    // $commentResult = $connect -> query($commentSql);
    // $commentInfo = $commentResult -> fetch_array(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트 만들기</title>
    <?php include "../include/link.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->
    <?php include "../include/header.php" ?>

    <main id="main">
        <section id="blog" class="container">
            <div class="blog__inner">
                <div class="blog__title" style="background-image:url(../assets/img/blog/<?=$blogInfo['blogImgFile']?>">
                    <span class="blog__title__cate"><?=$blogInfo['blogCategory']?></span>
                    <h2 class="blog__title__h1">
                        <?=$blogInfo['blogTitle']?>
                    </h2>
                    <div class="blog__title__info">
                        <div>
                            <span class="author"><?=$blogInfo['blogAuthor']?></span>
                            <span class="date"><?=date('Y-m-d', $blogInfo['blogRegTime'])?></span>                            
                        </div>
                        <div>
                            <a href="" class="modify">수정</a>
                            <a href="" class="delete">삭제</a>
                        </div>
                    </div>
                </div>
                <div class="blog__contents">
                    <div class="blog__contents__ad">
                        <div></div>
                    </div>
                    <!-- blog__contents__ad -->

                    <div class="blog__contents__cont">
                        <?=$blogInfo['blogContents']?>
                    </div>
                    <!-- blog__contents__cont -->
                    <div class="blog__contents__comment">

                    </div>
                    <!-- blog__contents__comment -->
                </div>
                <!-- blog__contents -->
                <div class="blog__aside">
                    <div class="blog__aside__intro">
                        <div class="img">
                            <img src="../assets/img/banner_bg01.jpg" alt="나">
                        </div>
                        <p class="intro">
                            어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                        </p>
                    </div>
                    <!-- blog__aside__intro -->
                    <div class="blog__aside__cate">
                        <h3>카테고리</h3>
                        <?php include "../include/category.php" ?>
                    </div>
                    <div class="blog__aside__new">
                        <h3>최신글</h3>
                        <?php include "../include/blogNew.php" ?>
                    </div>
                    <div class="blog__aside__pop">
                        <h3>인기글</h3>
                        <?php include "../include/blogNew.php" ?>
                    </div>
                    <div class="blog__aside__comment">
                        <h3>최신댓글</h3>
                        <ul>
                            <li><a href="#">혁명적인 성능을 자랑하는 m2 칩</a></li>
                            <li><a href="#">혁명적인 성능을 자랑하는 m2 칩</a></li>
                            <li><a href="#">혁명적인 성능을 자랑하는 m2 칩</a></li>
                        </ul>                        
                    </div>
                </div>
                <div class="blog__relation"></div>
            </div>
        </section>

    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>