<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<?php
 $a = 0;
 $b = 0;
 $c = 0;
 $D = 0; //Дискриминант
 $x1 = 0; //Корни
 $x2 = 0;
?>

    <h1>Решение квадратного уравнения</h1>
    <form action="index.php" method="post">
    a =  <input type="text" name="a" value="<?php echo $a; ?>"><br><br>
    b =  <input type="text" name="b" value="<?php echo $b; ?>"><br><br>
    c =  <input type="text" name="c" value="<?php echo $c; ?>"><br><br>
    <button>Найти решение</button> <a href="history.html">История</a><br><br>
    </form>

<?php
if(isset( $_POST['a'])) { //Вывод на экран при нажатии кнопки

    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $c = intval($_POST['c']);

    // вывод квадратного уравнения
    echo $a."x^2 + ".$b."x + ".$c." = 0"."<br><br>";
    echo "D = ".floatval($D = $b*$b-4*$a*$c)."<br><br>";

    if($D > 0) { //два корня
        $x1 = (-$b + sqrt($D))/(2*$a);
        $x2 = (-$b - sqrt($D))/(2*$a);
        echo "x1 = ".$x1."<br><br> x2 = ".$x2;
    } elseif ($D == 0) { //один корень
        $x1 = -$b/(2*$a);
        echo "x = ". $x1;
    } else {
        echo "Решений нет";
    }

}



?>

</body>
</html>