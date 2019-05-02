<!-- Exercise 7 -->
<p>7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. 
Все добавленные комментарии выводятся над текстовым полем.</p>
<hr>
<div> <?php
$text7 = file_get_contents('text7.txt');
$filename = "text7.txt";
var_dump($text7); 
?>  </div>

<?php
$somecontent = $_POST['des5'];
// Вначале давайте убедимся, что файл существует и доступен для записи.
if (is_writable($filename)) {

    // В нашем примере мы открываем $filename в режиме "записи в конец".
    // Таким образом, смещение установлено в конец файла и
    // наш $somecontent допишется в конец при использовании fwrite().
    if (!$handle = fopen($filename, 'a')) {
         echo "Не могу открыть файл ($filename)";
         exit;
    }

    // Записываем $somecontent в наш открытый файл.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Не могу произвести запись в файл ($filename)";
        exit;
    }
}
?>

<form action="7.php" method="POST">
<textarea rows = "5" cols = "50" name = "des5"></textarea>
<input type="submit" name="submit">
</form>

<!-- Finish exercise 7 -->
