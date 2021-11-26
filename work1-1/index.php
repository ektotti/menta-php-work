<?php 
$currentUrl = $_SERVER['REQUESR_URI'];
if(isset($_POST['ans'])){
    $judge = $_POST['ans'] === '東京'? '正解':'不正解';
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
    <form action="<?php echo $currentUrl; ?>" method="POST">
    <input type="text" name="ans">
    <input type="submit" value="OK">
    </form>
    <?php if(!empty($judge)){
        echo $judge;
    } ?>
</body>
</html>