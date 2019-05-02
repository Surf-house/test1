<!-- Exercise 8 -->
<p>8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. 
Все добавленные комментарии выводятся над текстовым полем. 
Реализовать проверку на наличие в тексте запрещенных слов, матов. 
При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>

<hr>
<div> <?php
$filename = "text8.txt";
$text8 = file_get_contents('text8.txt');
echo "$text8 <br />";
?> </div>

<?php
 $string=$_POST['des8'];
$somecontent=(strip_tags($string, '<br>'));
$variant = (empty($somecontent));
if ($variant) {
    echo "Enter some text below";
    
}
// Вначале давайте убедимся, что файл существует и доступен для записи.
if (is_writable($filename)) {

    // В нашем примере мы открываем $filename в режиме "записи в конец".
    // Таким образом, смещение установлено в конец файла и
    // наш $somecontent допишется в конец при использовании fwrite().
    if (!$handle = fopen($filename, 'a')) {
         echo "Не могу открыть файл ($filename)";
         exit;
    }
}

$bad_words = array("fuck", "sheet", "niger");
$change_words   = array("....", "not good ", "black people");

$newsomecontent = str_replace($bad_words, $change_words, $somecontent, $count);
if($count <=0){
   fwrite($handle, $newsomecontent);      
}

if ($count >0){
    echo "Invalid coment, you should be more polite <br />";
    }
?>

<form action="8.php" method="POST">
<textarea rows = "5" cols = "50" name = "des8"></textarea>
<input type="submit" name="submit">
</form>
<!-- Finish exercise 8 -->
