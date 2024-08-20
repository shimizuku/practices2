<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">

    <title>Contact | サイト名</title>

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
                    <h1 class="page-header">Contact</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li class="active">送信内容確認</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 hidden-sm hidden-xs">
                <div class="contact-img">
                    <img src="images/contact.jpg">
                </div>
            </div>
            <div class="col-md-8">
                <h3 class="page-header">Message Confirmation</h3>
                <p>内容を修正される場合は「修正する」ボタンを、送信される場合は「送信する」ボタンを押してください。</p>
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>お名前</th>
                        <td>里中　サチ子</td>
                    </tr>
                    <tr>
                        <th>フリガナ</th>
                        <td>サトナカ　サチコ</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>abc@zz.com</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>03-1234-5678</td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td>ショッピングページにはスポーツ用品がありませんが、店舗での取り扱いはありますか？　子供用の野球スパイクを探しています。　また、靴をケアするためのブラシや撥水スプレーなどもあれば、合わせて購入したいです。</td>
                    </tr>
                </table>
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-10">
                            <button type="submit" name="send" class="btn btn-success btn-lg">送信する</button>
                            <button type="submit" class="btn btn-success btn-lg">修正する</button>
                        </div>
                    </div>
                </form>
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
    <script>
        $(document).ready(function() {
            $('th').css({
                width: '20%',
                minWidth: '80px'
            });
            $('.contact-img').css({
                marginTop: '40px',
                overflow: 'hidden',
                height: $('.col-md-8').height() - 55
            });
        });
    </script>
</body>

</html>
