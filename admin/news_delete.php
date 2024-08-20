<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お知らせの削除 | サイト 管理</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <header>
        <div class="inner">
            <span><a href="index.php">サイト 管理</a></span>
            <div id="account">
                admin
                [ <a href="logout.php">ログアウト</a> ]
            </div>
        </div>
    </header>
    <div id="container">
        <main>
            <h1>お知らせの削除</h1>
            <p>以下のお知らせを削除します。</p>
            <p>よろしければ「削除」ボタンを押してください。</p>
            <form action="" method="post">
                <table>
                    <tr>
                        <th class="fixed">日付</th>
                        <td>
                            2020-05-03
                        </td>
                    </tr>
                    <tr>
                        <th class="fixed">タイトル</th>
                        <td>
                            さわやかシーズンに登山はいかが？
                        </td>
                    </tr>
                    <tr>
                        <th class="fixed">お知らせ内容</th>
                        <td>
                            お待たせしました！これまで在庫切れで入手が困難だったイチオシのトレッキングシューズが再入荷です。身体を動かすと気持ちのよい季節、さわやかな風を感じて登山はいかがでしょう？
                        </td>
                    </tr>
                    <tr>
                        <th class="fixed">画像</th>
                        <td><img src="../images/press/press03.jpg" width="64" height="64" alt=""></td>
                    </tr>
                </table>
                <p>
                    <input type="submit" name="delete" value="削除">
                    <input type="submit" name="cancel" value="キャンセル">
                </p>
            </form>
        </main>
        <footer>
            <p>&copy; テキスト</p>
        </footer>
    </div>
</body>

</html>
