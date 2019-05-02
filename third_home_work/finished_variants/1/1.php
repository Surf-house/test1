<!-- Exercise 1 -->
<p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
</p>
<form action="1" method="POST">
<textarea rows = "5" cols = "50" name = "des1"></textarea>
<hr>
<textarea rows = "5" cols = "50" name = "des2"></textarea>
<input type="submit" name="submit">
</form>

<?php
$a=false;
$b=false;

if(isset($_POST['des1']) && ($_POST['des2']) ){
    getCommonWords($a, $b);
}

function getCommonWords($a, $b){
          
    $array1=array();
    $array3=array();
    $array1=explode(" ", $_POST['des1']);
    echo "<pre>";
    var_dump($array1 );
    echo "<hr>";
    $array2=array();
    $array2=explode(" ", $_POST['des2']);
    var_dump($array2);
    foreach($array1 as $a){
        foreach($array2 as $b){
            if($a == $b){
                array_push($array3, $a);  
            }  
        }
    }
    echo "<hr>";
    echo "We have the same values: ";
    var_dump($array3);
}
?>
 <!-- Finish exercise1 -->
