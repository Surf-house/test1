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
