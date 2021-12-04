<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題②</title>
</head>
<body>
    <h1>FizzBuzz問題</h1>
    <form action="" method="post">
        <div>FizzNum: <input type="text" name="fizzNum" placeholder="整数値を入力して下さい"></div>
        <div>BuzzNum:<input type="text" name="buzzNum" placeholder="整数値を入力して下さい"></div>
        <input type="submit" name="inputnum" value="実行">
    </form>
    <br>
    <div>【出力】</div>
    <br>
    <?php if(isset($_POST['inputnum'])){
        $fizzNum = (int) $_POST['fizzNum'];
        $buzzNum = (int) $_POST['buzzNum'];
        playFizzBuzz($fizzNum,$buzzNum);
    } ?>

</body>
</html>

<?php 
function playFizzBuzz($fizzNum,$buzzNum){
    
    // 引数で渡ってきた値のチェック。
    if(!checkValFromForm($fizzNum, $buzzNum)){
        return;
    }

    // 2つのループ処理で$unionNumに$fizzNumと$buzzNumの
    // 和集合を配列として保持。
    
    for($i = 1; $i < 100 / $fizzNum; $i++){
        $unionNum[]=$fizzNum * $i;
    }
    
    for($i = 1; $i < 100 / $buzzNum; $i++){
        if(in_array($buzzNum * $i, $unionNum)){
            continue;
        }else{
            $unionNum[]=$buzzNum * $i;  
        }
    }
    
    // 出力が小さい順になるようにソート。
    sort($unionNum);


    foreach($unionNum as $outputnum){
        if($outputnum % $fizzNum === 0 && $outputnum % $buzzNum === 0){

            echo "fizzbuzz {$outputnum}<br>";

        }elseif($outputnum % $fizzNum === 0){

            echo "fizz {$outputnum}<br>";

        }elseif($outputnum % $buzzNum === 0){

            echo "buzz {$outputnum}<br>";

        }
    }

}

function checkValFromForm($fizzNum, $buzzNum){
    $isOk = false;
    
    if(empty($fizzNum)|empty($buzzNum)){
        echo '値を入力して下さい';
    }elseif(is_float($fizzNum)|is_float($buzzNum)){
        echo '整数値を入力して下さい';
    }elseif(is_string($fizzNum)){
        echo '整数値を入力して下さい';
    }else{
        $isOk = true;
    }

    return $isOk;

}

?>