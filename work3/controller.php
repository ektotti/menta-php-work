<?php 
namespace controller;
require_once 'pdo.php';
require_once 'info.php';

// formから値が飛んできているかチェック。
if(!isset($_POST['type'])) {
    header('location:index.php');
    return;
}

// submitのvalueによってinser,delete,updateの条件分岐をしていく
if($_POST['type']==='投稿') {
    $name = $_POST['name'];
    $content = $_POST['postContent'];
    $id = uniqid();
   
    \db\insert($id, $name, $content);
    
    \info\info("投稿が完了しました");
}
if($_POST['type']==='削除') {
    $id = $_POST['id'];
   
    \db\delete($id);
    
    \info\info("削除が完了しました");
}
?>