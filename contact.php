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
                        <li class="active">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6299.864744913921!2d139.68220367403163!3d35.87640853263106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018eaaa0d11c49d%3A0xd32fddc2d9e587b0!2z5ZCJ56Wl5a-6!5e0!3m2!1sja!2sjp!4v1724113797520!5m2!1sja!2sjp" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    〒169-0000<br>住所
                </p>
                <p><i class="fa fa-phone"></i> 03-1234-5678</p>
                <p><i class="fa fa-envelope-o"></i> info@info.com
                </p>
                <p><i class="fa fa-clock-o"></i>
                    月-金曜日: 9:00 AM to 5:00 PM</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 hidden-sm hidden-xs contactleft">
                <div class="contact-img">
                    <img src="images/contact.jpg">
                </div>
            </div>
            <div class="col-md-8">
                <h3 class="page-header">Send Message</h3>
                <form action="" method="post" class="form-horizontal" novalidate>
                    <div class="form-group">
                        <label for="inputname" class="col-sm-3 control-label">お名前<span>(必須)</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputname" name="name" value="" autofoucus>
                            <p class="help-block">(例)山田　太郎</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputkana" class="col-sm-3 control-label">フリガナ<span>(必須)</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputkana" name="kana" value="">
                            <p class="help-block">(例)ヤマダ　タロウ ※全角カタカナ</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputemail" class="col-sm-3 control-label">メールアドレス<span>(必須)</span></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputemail" name="email" value="">
                            <p class="help-block">(例)abc@zz.com ※半角英数字</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputtel" class="col-sm-3 control-label">電話番号</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="inputtel" name="phone" value="">
                            <p class="help-block">(例)03-1234-3214　※ハイフンあり　半角数字</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputmessage" class="col-sm-3 control-label">お問い合わせ内容<span>(必須)</span></label>
                        <div class="col-sm-9">
                            <textarea rows="10" cols="100" class="form-control" name="inquiry" id="message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <button type="submit" class="btn btn-success btn-lg">内容を確認して送信</button>
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
</body>

</html>
