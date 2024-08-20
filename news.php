<?php
require_once(dirname(__FILE__) . '/Models/News.php');
const NUM_NEWS = 5;
const IMAGE_PATH = 'images/press/';

$news = (new News())->all('desc', NUM_NEWS, 0);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">

    <title>News | サイト名</title>

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body id="pageTop">
    <header class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="navbar-header">
                <a href="index.php" class="navbar-brand"><img src="images/logo01.png" alt="LOGO"></a>
            </h1>
            <nav class="navbar-collapse collapse" id="navigation" role="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">ホーム<span>HOME</span></a></li>
                    <li><a href="about.php">会社概要<span>ABOUT</span></a></li>
                    <li><a href="news.php">ニュース<span>NEWS</span></a></li>
                    <li><a href="shop.php">ショップ<span>ONLINE SHOP</span></a></li>
                    <li><a href="contact.php">お問い合わせ<span>CONTACT</span></a></li>
                </ul>
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="keyword">
                        <span class="input-group-btn"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button></span>
                    </div>
                </form>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav>
                    <h1 class="page-header">News</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">News</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-xs-12 margin-top-md">
                <?php foreach ($news as $item) : ?>
                    <div class="well well-lg">
                        <div class="media">
                            <a class="pull-left">
                                <img class="media-object" src="<?= IMAGE_PATH . ($item['image'] ?: 'press.jpg') ?>" width="64" width="64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?= $item['title'] ?>
                                    <small><?= $date = date_create($item['posted_at'])->format('F d Y') ?></small>
                                </h4> <?= $item['message'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="row">
                    <div class="margin-top-md col-xs-6 col-md-12"><a href="#"><img class="img-responsive center-block" src="images/banner01.jpg" alt=""></a></div>
                    <div class="margin-top-md col-xs-6 col-md-12"><a href="#"><img class="img-responsive center-block" src="images/banner02.jpg" alt=""></a></div>
                    <div class="margin-top-md col-xs-6 col-md-12"><a href="#"><img class="img-responsive center-block" src="images/banner03.jpg" alt=""></a></div>
                    <div class="margin-top-md col-xs-6 col-md-12"><a href="#"><img class="img-responsive center-block" src="images/banner04.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagetop margin-top-md">
        <a href="#pageTop" class="center-block text-center" onclick="$('html,body').animate({scrollTop: 0}); return false;"><i class="fa fa-chevron-up center-block "></i>Page Top</a>
    </div>
    <footer class="margin-top-md" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <ul class="list-inline">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="news.php">NEWS</a></li>
                        <li><a href="shop.php">ONLINE SHOP</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                    <small>&copy; テキスト</small>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
