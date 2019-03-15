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
