<html>
    <body>
<h1>Задачи по массивам и циклам</h1>

<b>Работа с foreach</b>
  <!-- exercise 1 -->
<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>
<?php
$arr = array('html', 'css', 'php', 'js', 'jq');
foreach($arr as $item){
  echo "$item <br />";
}
?>
<!-- Finish -->

     <!-- exercise 2 -->
<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. 
Запишите ее в переменную $result.</p>

<?php
$arr = array(1, 20, 15, 17, 24, 35);
$sum = 0;
foreach($arr as $key =>$value){
  $sum +=$value;
}
echo "$sum <br />";
?>
    <!-- Finish -->

       <!-- exercise 3 -->
<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15. 
С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>
<?php
$a=2;
$sum1=0;
$arr1 = array(26, 17, 136, 12, 79, 15);
foreach($arr1 as $key1 =>$value1){
  $sum1 +=$value1**$a;
}
echo "$sum1 <br />";
?>
     <!-- Finish -->



<b>Работа с ключами</b><br />
  
  
  <!-- exercise 4 -->
<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.</p>
<!-- $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); -->

<?php
$arr2= array('green' =>'зеленый', 'red' =>'красный', 'blue' =>'голубой');
foreach($arr2 as $key2 =>$value2){
  
  
  echo "$value2 <br />";
}
?>
<p></p>

<?php
$arr2= array('green' =>'зеленый', 'red' =>'красный', 'blue' =>'голубой');
foreach($arr2 as $key2 =>$value2){
echo "$key2 <br />";
}
?>
           <!-- Finish -->

           <!-- exercise 5 -->
<p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
долларов.'.</p>
<?php
$arr3= array('200' => 'Коля', '300' => 'Вася', '400' => 'Петя');
foreach($arr3 as $key3 =>$value3){
  echo "$value3 salary - $key3 <br />";
}
?>
<!-- Finish -->


       <!-- exercise 6-->
  
<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
<!-- $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой'); -->
</p>
<?php


$en6=array();
$ru6=array();
$arr6 = array('green' =>'зеленый', 'red' =>'красный', 'blue' => 'голубой');
foreach($arr6 as $key6 =>$value6 ){

array_push($en6, $key6);

array_push($ru6, $value6);
}
 foreach($en6 as $value){
   echo " This is our result from EN array: $value <br />";
 } 
 foreach($ru6 as $value){
  echo " This is our result from RU array: $value <br />";
 }
 



                        // This is another method
// $en = array();
// $ru = array();
// $replacements = array('green' => "", 'red' => "", 'blue' => "");
// $replacements2 = array('1' => "зеленый", '2' => "красный", '3' => "голубой");


// $basket = array_replace($en, $replacements);
// print_r($basket);
// echo"Start from here <br />";
// var_dump($basket);

// $ru1 = array_replace($ru, $replacements2);
// print_r($ru1);
// echo"Start ru array <br />";
// var_dump($ru1);
                 
?>
      <!--  Finish -->


     <!-- exercise 7 -->
<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>
<?php 
$array7 = array(2, 5, 9, 15, 0, 4);
foreach($array7 as $value7){
  if($value7 >=3 && $value7 < 10){
  echo " $value7 <br />" ;
} 
}
?>
         <!-- Finish -->

   <!-- exercise 8 -->
<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'.
<br />
<?php
$array8 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$string = implode("", $array8);
echo "$string <br />";

?>
         <!-- Finish -->


<b>Циклы while и for</b> <br /> 

   <!-- exercise 9 -->

<p>9. Выведите столбец чисел от 1 до 100.</p>
<?php
$i=1;
  while($i<=100){
    echo " $i <br />";
    $i++;
  }
?>
       <!-- Finish -->



       <!-- exercise 10 -->
<p>10. Выведите столбец чисел от 11 до 33.</p>
<?php
$i=11;
 while($i<=33){
   echo "$i <br />";
   $i++;
 }
?>
       <!-- Finish -->


       <!-- exercise 11 -->
<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.</p>
<?php
$i=0;

while($i<=100){
  echo "$i <br />";
  $i+=2;
}
?>
       <!-- Finish -->
       
       
       <!-- exercise 12 -->
<p>12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
этого (итерации — это количество проходов цикла), и запишите его в переменную $num.</p>
<?php
$n = 1000;
$c = 2;
$result=true;
$num=1;
while($n>50 && $result==true ){
  $result=$n/=$c;
  $num++;
  echo "This is our variable n:$n<br />";
  echo " This is our result:$result <br />";
  echo"$num <br />";
if($result/$c<50){
  $result=false;
}
}
?>
        <!-- Finish -->


       <!-- exercise 13 -->
<p>13. Вывести таблицу умножения</p>
<?php
 $numbers = range(1,9);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table border="1">
  <?php foreach ($numbers as $numberRow): ?>
  
      <tr>
        <?php foreach($numbers as $numberCol): ?>
          <td><?=$numberRow * $numberCol ?></td>
        <?php endforeach; ?>
      </tr>

  <?php endforeach; ?>
  </table>

</body>
</html>


       <!-- Finish -->


    <!-- exercise14 -->
<p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>
<?php
$result=FALSE;
$array14=array(4, 2, 5, 19, 13, 0, 10);
foreach($array14 as $e){
  if($e==2 || $e==3 || $e==4){
    $result=TRUE;
  } 
  
}
 
if($result==TRUE){
  echo "There are numbers in array";
}
if($result==FALSE){
  echo "With out numbers in array";
}
?>
      <!-- Finish -->


      <!-- exercise 15 -->
<p>15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10.</p>

<?php
$sum15=0;
$a15=0;
$array15 =array(4, 2, 5, 19, 13, 0, 10);

foreach($array15 as $key15 => $value15 ){
  $a15++;
  $sum15 +=$key15 - $a15;
  
}
echo "Amount of elements in array:";
echo  abs($sum15) ;

          //  simpler method 
//  $result15 = count($array15);
// echo " From count function: $result15 <br />";
?>
      <!-- Finish -->



<!-- exercise 16 -->
<p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9</p>
<?php

$arrayq = array( "first" => array (1, 2, 3),
"second" => array(4, 5, 6),
"third" => array(7, 8, 9)
);
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
   <table border="1">
     <tr>
     <?php foreach($arrayq["first"] as $value16f):?>
     <td><?=$value16f?></td>
     <?php endforeach; ?>
      </tr>
      <tr>
      <?php foreach($arrayq["second"] as $value16s):?>
      <td><?=$value16s?></td>
    <?php endforeach; ?>
     </tr>
     <tr>
     <?php foreach($arrayq["third"] as $value16t):?>
     <td><?=$value16t?></td>
    <?php endforeach; ?>
      </tr>
   </table>
 </body>
 </html>


    <!-- Finish -->


        <!-- exercise17 -->
<p>17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
<?php
$array17s = array('January', 'February','March', 'April');
$array17 = array('January', 'February','March', 'April', 'May', 'June', 
'July', 'August', 'September', 'October', 'November', 'December');
foreach($array17 as $value17){
  if($value17 == 'March'){
    $month='March';
    echo"<b>$month </b><br />";
  }
  if($value17 !='March'){
  echo"$value17 <br />";
}
}
?>

       <!-- Finish -->





        <!-- exercise 18 -->
<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</p>
<?php
$array18 = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <?php foreach($array18 as $key18 => $value18){
      if($key18<=4){
       echo "$value18 <br />";
}
      if($key18>=5){
        echo" <b>$value18  </b><br />";
      }
}
 ?>
</body>
</html>

         <!-- Finish -->





     <!-- exercise19 -->
<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
<?php 
$array19 = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach($array19 as $value19){
  if($value19=='Friday'){
    $day='Friday';
    echo"<b>$value19</b><br /> ";
  }
  if($value19!='Friday'){
    echo"$value19 <br />";
  }
} 
?>
      <!-- Finish -->

        <!-- exercise 20 -->
<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</p>

 <?php
 for ($i = 1; $i < 21; $i++)
     {
         for($j=0; $j<$i;  $j++){
         $str=$i;
         echo "x";
     }
 echo'<br>';
 }
 ?>
        <!-- Finish -->

     <!-- exercise 21 -->
<p>21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555</p>
<?php
for($i21 =1; $i21 <=9; $i21++)
  {
   for($j21=0; $j21<$i21; $j21++){
     $str21=$i21;
     echo"$i21";
   }
   echo'<br>';
}
?>
  <!-- Finish -->

        <!-- exercise 22 -->
<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>
<?php
for ($i22 = 2; $i22 <=10 ; $i22+=2)
    {
        for($j22=0; $j22<$i22;  $j22++){
        $str=$i22;
        echo "x";
    }
echo'<br>';
}
?>

       <!-- Finish -->
  
       <!-- exercise 23 -->
<p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.</p>
По желанию можете сделать проверку на корректность введения данных пользователем.

<form action="second.1.php" method="POST">
<input type="text" name="window">
<input type="submit" name="Submit">
</form>

<?php
@$sum23=$_POST['window'];
if(filter_var($sum23, FILTER_VALIDATE_INT)){
  var_dump(filter_var($sum23, FILTER_VALIDATE_INT));
  $string = $sum23;
$sum = 0;
do {
    $sum += $string % 10;
}
while ($string = (int) $string / 10);
echo "Sum of our digits: $sum <br />";
}else{
  echo "You enter the wrong thing, please try again";    
}
?>
            <!-- Finish -->

           <!-- exercise24 -->
<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
какой ­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.</p>

<form action="second.1.php" method="POST">
<p>Enter your digit, which should to check<input type="text" name="window24"></p>
<input type="submit" name="Submit" >
</form>

<?php

@$sum24 = $_POST['window24'];
echo substr_count(442158755745, "$sum24");
?>
           <!-- Finish -->


       <!-- exercise 25 -->
<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p>
<?php
$array25 = array('1'=> rand(1,100), '2'=>rand(1,100),'3'=> rand(1,100),'4'=> rand(1,100),'5'=> rand(1,100));
var_dump($array25);
echo "<br />";
foreach($array25 as $key25 => $value25){
$min = min($array25);
$max = max($array25);

}
echo "$min and $max <br />";

$max_val = max($array25);
$min_val = min($array25);
$max_key = array_search($max_val, $array25);
$min_key = array_search($min_val, $array25);
$array25[$min_key] = $max_val;
$array25[$max_key] = $min_val;
foreach($array25 as $value25){
  echo "$value25 <br />";
}
?>
   <!-- Finish -->

   <!-- exercise 26 -->
<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</p>

<?php
$result26=0;
$array26 =array(rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100));
var_dump($array26);
echo" Our full array<hr>";

foreach($array26 as $key26=>$value26){
   
  if($value26>0 && $value26%2 ==0){
    $array[]=$value26;
    echo"$value26  <br />";
  }

  if($value26>0 && $value26%2 >=1){
    $array_azygous[]=$value26; 
  }  
}
foreach($array as $value){
  $result*=$value;
}  
echo "<hr>";
var_dump($array);
echo " There are  sum of numbers which we can divide on two :$result <br />";
echo "<hr>";
echo "There are azygous numbers: <br />";
var_dump($array_azygous);
?>

         <!-- Finish -->



         <!-- exercise 27 -->
<p>27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. 
Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). 
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, 
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. 
В каждой ячейке должно находиться случайное число. <br><br>
<?php
define("RAND_START", 1);
define("RAND_END", 20);


$colors = array('red','yellow','blue','gray','maroon','brown','green');
$rand_colors =array_rand($colors, 7);

$r=$colors[$rand_colors[0]];
$g=$colors[$rand_colors[1]];
$b=$colors[$rand_colors[2]];
$d=$colors[$rand_colors[3]];
$c=$colors[$rand_colors[4]];
$v=$colors[$rand_colors[5]];
$n=$colors[$rand_colors[6]];


$colEnd = rand(RAND_START, RAND_END);
$rowEnd = rand(RAND_START, RAND_END);

$numbersColumn=range(1,$colEnd);
$numbersRow = range(1,$rowEnd);

?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <?php foreach ($numbersRow as $numberRow): ?>
    <tr>
    <?php foreach($numbersColumn as $numberCol): 
    ?>

<?php foreach($colors as $value)
{ 
  $value1=$value;
  $q=$numberRow * $numberCol;
}   
 
  if($q%2 ==0 || $q>=20){
    $value1=$g;
  }
  if($q%2 == 1 ){
    $value1=$d;
  }
  if($q%3==1){
    $value1=$b;
  }
  if($q%3 == 0){
    $value1=$r;
  }
  if($q%5 ==0 && $q<25){
    $value1=$c;
  }
  if($q%9==0){
    $value1=$v;
  }
  if($q%20==0){
    $value1=$n;
  }
 ?>

      <td style="background:<?=$value1?>"><?=$numberRow * $numberCol?></td>
      
<?php endforeach; ?>
    </tr>
<?php endforeach; ?>
   </table>
</body>
</html>
 <!-- Finish -->



     <!-- exercise 28 -->
<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>

       <table>
       <?php
       for($i = 0; $i < 10; $i++) {
         echo'<tr>';
         for($j = 0; $j < 10; $j++) 
           echo '<td>',$j?$i?$i*$j:$j:$i,'</td>';
         echo'</tr>';
       }
       ?>
       </table>


     <!-- Finish -->
<hr>

<p>
<b>&copy; 2014-2016 <a href="http://php-academy.kiev.ua/" target="_blank">PHP Academy</a></b>
</p>

</body>
</html>



















