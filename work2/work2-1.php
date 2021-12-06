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
    <?php if(isset($_POST['inputnum'])) {
        $fizzNum = (int) $_POST['fizzNum'];
        $buzzNum = (int) $_POST['buzzNum'];
        playFizzBuzz($fizzNum,$buzzNum);
    } ?>

</body>
</html>

<?php 
function playFizzBuzz($fizzNum,$buzzNum) {
    
    // 引数で渡ってきた値のチェック。
    if(!checkValFromForm($fizzNum, $buzzNum)) {
        return;
    }

    // ループカウンタ変数を１〜100で設定して、入力されたfizzNumとbuzzNumで剰余算を行う
    // 割り切れる数を出力。fizzNumとbuzzNum両方で割り切れる場合はfizzbuzzとする。
    for($i = 1; $i < 100; $i++ ){
        if($i % $fizzNum === 0 && $i % $buzzNum === 0) {

            echo "fizzbuzz {$i}<br>";

        }elseif($i % $fizzNum === 0) {

            echo "fizz {$i}<br>";

        }elseif($i % $buzzNum === 0) {

            echo "buzz {$i}<br>";

        }
    }
}

// formで入力された値のチェックをする関数。
function checkValFromForm($fizzNum, $buzzNum) {
    $isOk = false;
    
    if(empty($fizzNum)|empty($buzzNum)) {

        echo '値を入力して下さい';

    }elseif(is_float($fizzNum)|is_float($buzzNum)) {

        echo '整数値を入力して下さい';

    }elseif(is_string($fizzNum)) {

        echo '整数値を入力して下さい';

    }else{
        $isOk = true;
    }

    return $isOk;

}
?>