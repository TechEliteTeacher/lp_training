<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechElite課題</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <?php if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php") { ?>
        <!-- TOPページ kv,メニュー -->
        <div class="kv">
            <div class="kv_content">
                <div class="header flex_center">
                    <img class="header_logo" src="./img/logo_white.png" alt="楽園雅苑">
                    <div class="nav flex_center">
                        <ul class="flex_center">
                            <li><a href="">お部屋</a></li>
                            <li><a href="">プラン</a></li>
                            <li><a href="">四季</a></li>
                            <li><a href="">アクセス</a></li>
                        </ul>
                        <a class="reservation_link" href="">予約</a>
                    </div>
                </div>
                <div class="kv_text">
                    <p>大自然と調和する、<br class="br_sp">極上の癒し。</p>
                    <p>
                        大分の自然環境と共に、<br>
                        身も心も癒やされる<br class="br_sp">至福のひとときを提供します。
                    </p>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <!-- 下層ページ メニュー -->
        <div class="under_page_header">
            <div class="header flex_center">
                <a href="./"><img class="header_logo" src="./img/logo_white.png" alt="楽園雅苑"></a>
                <div class="nav flex_center">
                    <ul class="flex_center">
                        <li><a href="">お部屋</a></li>
                        <li><a href="">プラン</a></li>
                        <li><a href="">四季</a></li>
                        <li><a href="">アクセス</a></li>
                    </ul>
                    <a class="reservation_link" href="">予約</a>
                </div>
            </div>
        </div>
    <?php } ?>