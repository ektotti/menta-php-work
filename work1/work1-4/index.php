<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題①−4</title>
</head>
<body>
    <form method="POST">
        <select name="userChoice" id="userChoice">
                <option value=0>グー</option>
                <option value=1>チョキ</option>
                <option value=2>パー</option>
        </select>
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>

<?php

function battle($user){
    $items = ['グー', 'チョキ', 'パー'];
    $pc = array_rand($items, 1); 
    $judge = '';
    $win = 'あなたの勝ちです';
    $lose = 'あなたの負けです・・・・';

    echo "<div>自分：".$items[$user]."</div>";
    echo "<div>相手：".$items[$pc]."</div>";

    switch($user){
    case $pc:
        $judge = "あいこ";
        break;
    case 0:
        $judge = $pc === 1? $win : $lose;
        break;
    case 1:
        $judge = $pc === 2? $win : $lose;
        break;
    case 2:
        $judge = $pc === 0? $win : $lose;
        break;
    }

    echo $judge;
}

if(isset($_POST['submit'])){
    $user = (int) $_POST['userChoice'];
    battle($user);
}
?>