<?php 
namespace controller;
require_once 'pdo.php';
require_once 'info.php';


// クリックされたボタンのname属性によってinser,delete,updateの条件分岐をしていく
if(isset($_POST['create'])) {
    // formから値が来ていることを確認。
    if(empty($_POST['name']) | empty($_POST['postContent'])){
        header('location:index.php');
        return;
    }
    
    $name = $_POST['name'];
    $content = $_POST['postContent'];
    $id = uniqid();
   
    \db\insert($id, $name, $content);
    
    \info\info("投稿が完了しました");
}
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
   
    \db\delete($id);
    
    \info\info("削除が完了しました");
}
?>