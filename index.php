<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">

    <title>サイト名</title>

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
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

    <div class="intro-header jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Our Selected <br />Collection</h1>
                        <h3>To Love A Commitment.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#" class="btn btn-default"><i class="fa fa-twitter fa-fw"></i> <span class="sns">Twitter</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default"><i class="fa fa-facebook fa-fw"></i> <span class="sns">Facebook</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default"><i class="fa fa-pinterest fa-fw"></i> <span class="sns">Pinterest</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" role="main">
        <section>
            <h2 class="titleType1"><i class="fa fa-moon-o"></i> Sale Lineup</h2>
            <div class="row margin-top-sm">
                <div class="margin-top-md col-sm-4 text-center">
                    <p><a href="detail02.php"><img class="img-responsive center-block" src="images/sale-img01.png" alt=""></a></p>
                    <p>商品名<br>商品テキスト</p>
                    <a href="detail02.php" class="btn btn-success"><i class="fa fa-caret-right"></i> More</a>
                </div>
                <div class="margin-top-md col-sm-4 text-center">
                    <p><a href="#"><img class="img-responsive center-block" src="images/sale-img02.png" height="162" width="266" alt=""></a></p>
                    <p>商品名<br>商品テキスト</p>
                    <a href="#" class="btn btn-success"><i class="fa fa-caret-right"></i> More</a>
                </div>
                <div class="margin-top-md col-sm-4 text-center">
                    <p><a href="#"><img class="img-responsive center-block" src="images/sale-img03.png" alt=""></a></p>
                    <p>商品名<br>商品テキスト</p>
                    <a href="#" class="btn btn-success"><i class="fa fa-caret-right"></i> More</a>
                </div>
            </div>
        </section>

        <section class="margin-top-md">
            <h2 class="titleType1"><i class="fa fa-moon-o"></i> Pick Up</h2>
            <div class="row">
                <div class="margin-top-md col-xs-6 col-md-3"><a href="#"><img class="img-responsive center-block" src="images/banner01.jpg" alt=""></a></div>
                <div class="margin-top-md col-xs-6 col-md-3"><a href="#"><img class="img-responsive center-block" src="images/banner02.jpg" alt=""></a></div>
                <div class="margin-top-md col-xs-6 col-md-3"><a href="#"><img class="img-responsive center-block" src="images/banner03.jpg" alt=""></a></div>
                <div class="margin-top-md col-xs-6 col-md-3"><a href="#"><img class="img-responsive center-block" src="images/banner04.jpg" alt=""></a></div>
            </div>

        </section>
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
