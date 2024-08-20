<?php
require_once dirname(__FILE__) . '/News.php';

// 全件の取得
echo '<pre>';
var_dump((new News())->all('asc'));
echo '</pre>';
