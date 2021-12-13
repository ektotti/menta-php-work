<?php
// このアプリ用のデータベース作成。
require_once 'pdo.php';
require_once 'view/info.php';
require_once 'view/form.php';
require_once 'view/home.php';
db\createDatabase();
?>

<?php 

\view\home();

?>