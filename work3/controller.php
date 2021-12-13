<?php 
namespace controller;
require_once 'pdo.php';
require_once 'view/info.php';
require_once 'view/form.php';
require_once 'view/home.php';


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
    
    \view\info("投稿が完了しました");
}
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
   
    \db\delete($id);
    
    \view\info("削除が完了しました");
}

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $editedPost = \db\fetchById($id);
    
    \view\home(true, $editedPost);
}

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $content = $_POST['postContent'];
   
    \db\update($id, $name, $content);
    
    \view\info("更新が完了しました");
}
?>