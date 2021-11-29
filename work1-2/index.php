develop
<?php
$fruits = ['apple', 'orange', 'strawberry'];

function judge($answer, $fruits){
    $result = in_array($answer, $fruits);
    $judge = $result? $answer.'は配列$fruitsに含まれています': $answer.'は配列$fruitsに含まれていません';
    echo $judge;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題①−2</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="answer">
    <input type="submit" value="OK">
    </form>
    <?php 

    if(isset($_POST['answer'])){
        $answer = $_POST['answer'];
        judge($answer, $fruits);
    }

    ?>
</body>
</html>
=======
index.php
master
