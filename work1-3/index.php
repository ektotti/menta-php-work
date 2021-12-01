<?php 
$question = [
    "問題"=>"日本の首都は？" 
];

$answer = [
    "回答1"=>"大阪", 
    "回答2"=>"北海道", 
    "回答3"=>"箱根" ,
    "回答4"=>"東京" 
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題①-3</title>
</head>
<body>
    <div>
        <span><?php echo key($question); ?></span> 
        <span><?php echo $question['問題']; ?></span>
    </div>
    <ul style="list-style:none; padding:0;">
        <?php foreach($answer as $key=>$value): ?>
        <li>
        <span><?php echo $key; ?></span> 
        <span><?php echo $value; ?></span>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
