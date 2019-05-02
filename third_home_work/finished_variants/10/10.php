<!-- Exercise 10 -->
<p>10. Написать функцию, которая считает количество уникальных слов в тексте. 
Слова разделяются пробелами. Текст должен вводиться с формы.</p>

<?php
if(empty($_POST['des10'])){
    $_POST['des10'] = "";
}
$words10 = $_POST['des10'];
$array10 = explode(' ', $words10);
$result10 = count(array_unique($array10));

var_dump($array10);
echo "<hr>";
if($result10>1){
    echo "We have this quantity of unique words: " . "  $result10";
}


?>

<form action="10.php" method="POST">
<textarea rows = "5" cols = "50" name = "des10"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finish exercise 10 -->
