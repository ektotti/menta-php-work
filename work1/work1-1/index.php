<?php 
if(isset($_POST['answer'])){
    $judge = $_POST['answer'] === '東京'? '正解':'不正解';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題①−1</title>
</head>
<body>
    <div>日本の首都は？</div>
    <form method="POST">
    <input type="text" name="answer">
    <input type="submit" value="OK">
    </form>
    <?php if(!empty($judge)){
        echo $judge;
    } ?>
</body>
</html>