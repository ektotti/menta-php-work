<?php 
namespace controller;
require_once 'pdo.php';
require_once 'info.php';

// formから値が飛んできているかチェック。
if(empty($_POST['name']) | empty($_POST['postContent'])) {
    header('location:index.php');
    return;
}

// submitのvalueによってinser,delete,updateの条件分岐をしていく
if($_POST['type']==='投稿') {
    $name = $_POST['name'];
    $content = $_POST['postContent'];
   
    \db\insert($name, $content);
    
    \info\info("投稿が完了しました");
}
?>