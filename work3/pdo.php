<?php 
namespace db;
use PDO;

function createDatabase() {
    $db = new PDO('mysql:host = localhost;','root','root');
    $db->exec('CREATE DATABASE IF NOT EXISTS test_bbs;');
    $db->exec('CREATE TABLE IF NOT EXISTS test_bbs.post(
    `id` varchar(13) primary key,
    `name` VARCHAR(10) default "root" ,
    `content` VARCHAR(140) NOT NULL);
    ');
}

function insert($id, $name, $content) {
    $db = new PDO('mysql:host = localhost;dbname=test_bbs','root','root');
    $statement = $db->prepare('insert into test_bbs.post(`id`,`name`, `content`) values(:id, :name, :content);');
    $statement->execute(
        [
            ':id'=>$id,
            ':name'=>$name,
            ':content'=>$content,
        ]
        );
}

function delete($id) {
    $db = new PDO('mysql:host = localhost;dbname=test_bbs','root','root');
    $statement = $db->prepare('delete from post where id = :id; ');
    $statement->execute(
        [
            ':id'=>$id
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