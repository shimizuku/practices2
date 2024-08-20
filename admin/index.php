<?php
require_once(dirname(__FILE__) . '/../Models/News.php');
require_once(dirname(__FILE__) . '/../util.inc.php');

const IMAGE_PATH = '../images/press/';
$news = (new News())->all('desc');

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お知らせ一覧 | サイト 管理</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body id="admin_index">
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
            <h1>お知らせ一覧</h1>
            <p><a href="news_add.php">お知らせの追加</a></p>
            <table>
                <tr>
                    <th>日付</th>
                    <th>タイトル／お知らせ内容</th>
                    <th>画像(64x64)</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
                <?php foreach ($news as $item) : ?>
                    <tr>
                        <td class="center"><?= $item['posted_at'] ?></td>
                        <td>
                            <span class="title"><?= $item['title'] ?></span>
                            <?= $item['message'] ?>
                        </td>
                        <td class="center">
                            <img src="<?= IMAGE_PATH . ($item['image'] ?: 'press.jpg') ?>" width="64">
                        <td class="center"><a href="news_edit.php?id=<?= $item['id'] ?>">編集</a></td>
                        <td class="center"><a href="news_delete.php?id=<?= $item['id'] ?>">削除</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </main>
        <footer>
            <p>&copy; テキスト</p>
        </footer>
    </div>
</body>

</html>
