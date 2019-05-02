<!-- Exercise 13 -->
13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';<br>
<br>
Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите  в виде списка в порядке уменьшения количества:<br><br>

Пример вывода:<br>
яблоко – 12<br>
черешня – 8<br>
груша – 5<br>
слива - 3<br>
</p>
<?php
$word ="";
echo "<hr>";
if(empty($_POST['des13'])){
    $_POST['des13'] ="";   
}

$array13 = explode(" ", $_POST['des13']);
sort($array13, SORT_NUMERIC);
$array13_1=(array_count_values($array13));

asort($array13_1);
$array13_1 = array_reverse($array13_1);

foreach($array13_1 as $key13 => $value13){
    if($key13==""){
        echo "Enter some words below";
    }if($key13!==""){
       echo "$key13 -- $value13 <br />";
    }  
}
?>

<form action="13.php" method="POST">
<textarea rows = "5" cols = "50" name = "des13"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finish exercise 13 -->
