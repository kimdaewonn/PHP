<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $category = $_GET['category'];
    $categorySql = "SELECT * FROM myBlog WHERE blogDelete = 0 AND blogCategory = '$category' ORDER BY myBlogID DESC LIMIT 10";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;?>
    
<!DOCTYPE html>
<html lang="ko">
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
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main">
      <section id="blog" class="container">
            <div class="blog__title" style="background-image:url(../assets/img/blog/<?=$blogInfo['blogImgFile']?>)">
                <span class="blog__title__cate"><?=$blogInfo['blogCategory']?></span>
                <h2 class="blog__title__h1">
                    제목이 들어갈거구
                </h2>
                <div class="blog__title__info">
                    <div>
                        <span class="author"><?=$blogInfo['blogAuthor']?>김대원</span>
                        <span class="date"><?=date('Y-m-d', $blogInfo['blogRegTime'])?>2022-10-20</span>
                    </div>
                    <div>
                        <a href="#" class="modify">수정</a>
                        <a href="#" class="delete">삭제</a>
                    </div>
                </div>
            </div>
            <div class="blog__inner">
            <div class="blog__contents">
                <div class="blog__contents__card"></div>
            </div>
            <div class="blog__aside">
                <div class="blog__aside__intro">
                    <div class="img">
                        <img src="../assets/img/card_bg01.jpg" alt="나">
                    </div>
                    <p class="intro">
                        어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                    </p>
                </div>
                <div class="blog__aside__intro"></div>
                <div class="blog__aside__cate">
                    <h3>카테고리</h3>
                    <?php include "../include/category.php" ?>
                    <ul>
                        <li><a href="blogCategory.php?category=apple">apple</a></li>
                        <li><a href="blogCategory.php?category=samsung">samsung</a></li>
                        <li><a href="blogCategory.php?category=toss">toss</a></li>
                    </ul>
                </div>
                <div class="blog__aside__new">
                    <h3>최신글</h3>
                    <ul>
<?php
  $blogNewSql = "SELECT * FROM myBlog WHERE blogDelete = 0 ORDER BY myBlogID DESC LIMIT 4";
  $blogNewResult = $connect -> query($blogNewSql);

  forEach($blogNewResult as $blogNew){ ?>
    <li><a href="#"><span><img src="../assets/img/icon_256.png" alt="d"></span><em>혁신적인 성능을 자랑하는 M2 칩신적인 성능을 자랑하는 M2 칩신적인 성능을 자랑하는 M2 칩신적인 성능을 자랑하는 M2 칩신적인 성능을 자랑하는 M2 칩신적인 성능을 자랑하는 M2 칩신적인 성능을 자랑하는 M2 칩신적인 성능을 자랑하는 M2 칩신적인 성능을 자랑하는 M2 칩신적인 성능을 자랑하는 M2 칩</em></a></li>
<?php }?>
                    </ul>
                </div>
                <div class="blog__aside__pop">
                    <h3>인기글</h3>
                    <ul>
                    <li><a href="#"><span><img src="../assets/img/icon_256.png" alt="d"></span><em>혁신적인 성능을 자랑하는 M2 칩</em></a></li>
                        <li><a href="#"><span></span><em>혁신적인 성능을 자랑하는 M2 칩</em></a></li>
                        <li><a href="#"><span></span><em>혁신적인 성능을 자랑하는 M2 칩</em></a></li>
                        <li><a href="#"><span></span><em>혁신적인 성능을 자랑하는 M2 칩</em></a></li>
                    </ul>
                </div>
                <div class="blog__aside__comment">
                    <h3>최신 댓글</h3>
                    <ul>
                        <li><a href="#"><img src="../assets/img/icon_256.png" alt="d" alt="">혁신적인 성능을 자랑하는 M2 칩</a></li>
                        <li><a href="#">혁신적인 성능을 자랑하는 M2 칩</a></li>
                        <li><a href="#">혁신적인 성능을 자랑하는 M2 칩</a></li>
                        <li><a href="#">혁신적인 성능을 자랑하는 M2 칩</a></li>
                    </ul>
                </div>
            </div>
            <div class="blog__relation"></div>
            </div>
            
      </section>
    </main>
    <!-- main -->
    
    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>