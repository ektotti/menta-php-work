<?php 
namespace view;

function home($fromEdit = false, $editedPost = []) {?>

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
    
    <?php //form関数の中で投稿と更新の画面を出し分ける。$fromEditをフラグとする。 ?>
    <?php \view\form($fromEdit, $editedPost) ?>

    <?php //更新の画面では必要ないので条件分岐で出し分け ?>
    <?php if(!$fromEdit): ?> 
        <section clas="show">
            <h2>投稿内容一覧</h2>
            <?php $posts = \db\fetchAll();
            if($posts):
                for($i = 0; $i < count($posts); $i++):
            ?>
                <ul>
                    <li><?php echo "No:".$i+1 ?></li>
                    <li><?php echo "名前:".$posts[$i]['name'] ?></li>
                    <li><?php echo "投稿内容:".$posts[$i]['content'] ?></li>
                    <form action="controller.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $posts[$i]['id']; ?>">
                        <input type="submit" name="edit" value="編集">
                        <input type="submit" name="delete" value="削除">
                    </form>
                </ul>
                <?php endfor; ?>
            <?php endif; ?>
        </section>
    <?php endif; ?> 
    </body>
</html>

<?php } ?>