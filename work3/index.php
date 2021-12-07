<?php
// このアプリ用のデータベース作成。
require_once 'pdo.php';
db\createDatabase();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>work3</title>
        <style>
            ul{
                list-style: none;
                border: 5px double teal;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1>掲示板</h1>
        <section class="create">
            <h2>新規投稿</h2>
            <?php //formからの入力をcontroller.phpで受けて条件分岐。そしてdbの操作 ?> 
            <form action="controller.php" method="POST">
                <div>
                    <label for="name">name:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="postContent" style="display:block;">投稿:</label>
                    <textarea name="postContent" id="postContent" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" name="type" value="投稿">
            </form>
        </section>
        <section clas="show">
            <h2>投稿内容一覧</h2>
            <?php 
            $posts = db\fetchAll();
            if($posts):
                foreach($posts as $post):
            ?>
                <ul>
                    <li><?php echo "No:".$post['id'] ?></li>
                    <li><?php echo "名前:".$post['name'] ?></li>
                    <li><?php echo "投稿内容:".$post['content'] ?></li>
                </ul>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    </body>
</html>