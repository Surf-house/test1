<!-- Exercise 9 -->
<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.</p>

<?php
if(empty($_POST['des9'])){
    $_POST['des9'] ="";
}


$string9 = $_POST['des9'];
$result9 = strrev("$string9"); 
var_dump($result9);
?>

<form action="9.php" method="POST">
<textarea rows = "5" cols = "50" name = "des9"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finish exercise 9 -->
