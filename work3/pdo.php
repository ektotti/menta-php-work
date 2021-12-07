<?php 
namespace db;
use PDO;

function createDatabase() {
    $db = new PDO('mysql:host = localhost;','root','root');
    $db->exec('CREATE DATABASE IF NOT EXISTS test_bbs;');
    $db->exec('CREATE TABLE IF NOT EXISTS test_bbs.post(
    `id` int auto_increment primary key,
    `name` VARCHAR(10) default "root" ,
    `content` VARCHAR(140) NOT NULL);
    ');
}

function insert($name, $content) {
    $db = new PDO('mysql:host = localhost;dbname=test_bbs','root','root');
    $statement = $db->prepare('insert into test_bbs.post(`name`, `content`) values(:name, :content); ');
    $statement->execute(
        [
            ':name'=>$name,
            ':content'=>$content
        ]
        );
}

function fetchAll() {
    $db = new PDO('mysql:host = localhost;dbname=test_bbs','root','root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $statement = $db->prepare('select * from test_bbs.post;');
    $statement->execute();
    return $statement->fetchAll();
}
?>