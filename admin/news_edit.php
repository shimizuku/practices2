<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お知らせの編集 | サイト 管理</title>
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
            <h1>お知らせの編集</h1>
            <p>情報を入力し、「保存」ボタンを押してください。</p>
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th class="fixed">日付(任意)</th>
                        <td>
                            <div class="error">※日付は「0000-00-00」の形式で入力してください</div>
                            <input type="date" name="posted" value="2020-05-03">
                        </td>
                    </tr>
                    <tr>
                        <th class="fixed">タイトル</th>
                        <td>
                            <div class="error">※タイトルを入力してください</div>
                            <input type="text" name="title" size="80" value="さわやかシーズンに登山はいかが？">
                        </td>
                    </tr>
                    <tr>
                        <th class="fixed">お知らせの内容</th>
                        <td>
                            <div class="error">※お知らせ内容を入力してください</div>
                            <textarea name="message" cols="80" rows="5">お待たせしました！これまで在庫切れで入手が困難だったイチオシのトレッキングシューズが再入荷です。身体を動かすと気持ちのよい季節、さわやかな風を感じて登山はいかがでしょう？</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th class="fixed">画像(任意)</th>
                        <td>
                            <input type="file" name="image">
                            <div><img src="../images/press/press03.jpg" width="64" height="64" alt=""></div>
                        </td>
                    </tr>
                </table>
                <p>
                    <input type="submit" name="save" value="保存">
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
