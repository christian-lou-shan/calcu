<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $cookie_name1 = "num";
    $cookie_value1 = "";
    $cookie_name2 = "op";
   $cookie_value2 = "";

   if(isset($_POST['num'])) {
    $num = $_POST['input'] . $_POST['num'];
   } else {
    $num = "";
   }
   if(isset($_POST['op'])) {
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
    $num = "";
    }
    if(isset($_POST['equal'])) {
       $num = $_POST['input'];
        switch($_COOKIE['op']) {
            case "+":
                $result = $_COOKIE['num'] + $num;
                break;
            case "-":
                $result = $_COOKIE['num'] - $num;
                break;
            case "*":
                $result = $_COOKIE['num'] * $num;
                break;
            case "/":
            $result = $_COOKIE['num'] / $num;
            break;
        }
        $num = $result;
    }
    ?>


<div class="container">
    <div class="calc-body">
        <div class="calc-screen">
            <div class="calc-operation"><?php echo @$num ?></div>
            <div class="calc-typed"><?php echo @$num ?></div>
        </div>
        <div class="calc-button-row">
            <form action="" method="post">
                <input type="hidden" name="input" value="<?php echo @$num ?>">
                <input type="submit" class="button" name="num" value="7">
                <input type="submit" class="button" name="num" value="8">
                <input type="submit" class="button" name="num" value="9">
                <input type="submit" class="button c" name="op" value="C"> <br>
                <input type="submit" class="button" name="num" value="4">
                <input type="submit" class="button" name="num" value="5">
                <input type="submit" class="button" name="num" value="6">
                <input type="submit" class="button l" name="op" value="-"><br>
                <input type="submit" class="button" name="num" value="1">
                <input type="submit" class="button" name="num" value="2">
                <input type="submit" class="button" name="num" value="3">
                <input type="submit" class="button l" name="op" value="*"><br>
                <input type="submit" class="button" name="num" value="0">
                <input type="submit" class="button" name="equal" value="=">
                <input type="submit" class="button l" name="op" value="/">
                <input type="submit" class="button l" name="op" value="+"><br>
            </form>
        </div>
    </div>
</div>
</body>
</html>
