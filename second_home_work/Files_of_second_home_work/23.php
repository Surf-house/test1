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
