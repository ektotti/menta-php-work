<?php
$array = [
    0=>'グー', 
    1=>'チョキ',
    2=>'パー'
    ];

$pcChoice = array_rand($array, 1); 

function judge($myChoice, $pcChoice){
    switch(($myChoice - $pcChoice + 3)%3){
    case 0:
        echo "あいこ";
        break;
    case 2:
        echo "あなたの勝ちです";
        break;
    case 1:
        echo "あなたの負けです";
        break;
    }

}

?>

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
    <select name="myChoice" id="myChoice">
        <?php foreach($array as $key => $value): ?>
            <option value="<?php echo $key ?>"><?php echo $value ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="OK">
    </form>
    <?php 

    if(isset($_POST['myChoice'])){
        $myChoice = $_POST['myChoice'];
        echo "<div>自分:{$array[$myChoice]}</div>" ;
        echo "<div>相手:{$array[$pcChoice]}</div>" ;
        judge($myChoice, $pcChoice);
    }

    ?>
</body>
</html>