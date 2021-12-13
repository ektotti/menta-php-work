<?php
// このアプリ用のデータベース作成。
require_once 'pdo.php';
require_once 'view/info.php';
require_once 'view/form.php';
require_once 'view/home.php';
db\createDatabase();
?>

<?php 

// 画面を関数として呼び出すように変更。
\view\home();

?>