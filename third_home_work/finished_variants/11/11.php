<!-- Exercise 11 -->
<p>11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, 
что каждое новое предложение начиняется с большой буквы.<br>
Пример:<br><br>
Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';</p>

<?php
if(empty($_POST['des11'])){
    $_POST['des11'] = 0;
}
$words11 = $_POST['des11'];


$mode =2;
$array11 = explode('.', $words11);

foreach($array11 as $key11 => $value11){
    $value11 = trim($value11);
    $array11_2 = explode(' ', $value11);
    // переводим первый символ в верхний регистр
    $res = mb_convert_case($array11_2['0'],  $mode, "UTF-8");
    $array11_2['0'] = $res;
        
     
     $string11 = implode(" ", $array11_2);
    echo"$string11 <br />";
       
}
?>

<form action="11.php" method="POST">
<textarea rows = "5" cols = "50" name = "des11"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finished exercise 11 -->