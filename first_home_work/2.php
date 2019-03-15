<!-- // 15 exercise -->
 
 <?php  

if ( isset($_GET['action']) ) {
    switch ($_GET['action']) {
        case 'plus':
            $answer = $_GET['a'] + $_GET['b'];
            break;
        case 'minus':
            $answer =$_GET['a'] - $_GET['b'];
            break;
        case 'multiply':
            $answer = $_GET['a'] * $_GET['b'];
            break;
        
        case 'divide':
            $answer = $_GET['a'] / $_GET['b'];
            if($_GET['b']<=0){
                echo "You can't divide to 0";
            }
            break;      
        case '%':
            $answer = $_GET['a'] % $_GET['b'];
            break;
    }
}
 ?>

<h1>Calculator</h1>

<form action="2.php" method="GET">
    <input type="text" name="a" value="" size="14px">
    <input type="text" name="b" value="" size="14px">
   
    <br>
    <input type="submit" value="minus"  name="action">
    <input type="submit" value="plus"   name="action">
    <input type="submit" value="divide" name="action">
    <br>
    <input type="reset"  value="C"        name="erase">
    <input type="submit" value="%"        name="action">
    <input type="submit" value="multiply" name="action">
    Result: <input type="text" name="ans" value="<?php echo $answer; ?>"><br><br><br>
    </form>


      <!-- exercise 16 -->

<?php

if($_POST['first'] >= $_POST['second']){
switch ($_POST['action']){
    case 'submit' :
    $bigger= $_POST['first'];
    break;
    
}   
}else{
    $bigger=$_POST['second'];
}
?>
<h1> Exercise 16</h1>
<form action="2.php" method="POST">
<input type="text" value="" name="first">
<input type="text" value="" name="second">
<input type="submit" name="action" value="submit">
The bigger value is:<input type="text" name="result" value="<?php echo $bigger; ?>"><br>
</form>

<!-- exercise 17 -->
<h1>Exercise 17</h1>

<?php
$a='78';
$b=78;
if($a==$b){
    echo  "$a==$b <br />";
}
?>
 <!-- exercise 18 -->
<h1>Exercise 18</h1>
<?php
$a='78';
$b=78;
if($a===$b){
    echo "$a===$b <br />";
}else{
    echo "In this case $a!==$b ";
}
?>
    
       <!-- exercise 19 -->
    
<h1>Exercise 19</h1>
<?php
var_dump("$a==$b <br />");
?>

       <!-- exercise 20 -->
<h1>Exercise 20</h1>
<?php

$bar = (boolean) 20;   // $bar - это булев тип

var_dump($bar);
?>

        <!-- exercise 21 -->
        
<h1>Exercise 21</h1>
<?php
$a=(boolean)0;
var_dump($a);
?>

        <!-- exercise 22 -->
    <h1>Exercise 22</h1>
        
<?php
$a=(boolean)-21;
var_dump($a);
?>
         
         <!-- exercise 23 -->
         
    <h1>Exercise 23</h1>
<?php 
$a='Hello world';
echo $a .      "<br />";
var_dump ($a ."<br />");
print($a .    "<br />");
?>

         <!-- exercise 24 -->
         
         <h1>Exercise 24</h1>
<?php
// First type of comments
/*Second type of comments
*/
 #Third type of comments
 ?>


          <!-- exercise 25 -->
          Приведите пример, чем отличается &lt;?php от &lt;?=.</p>
          <h1>Exercise 25</h1>
&lt;?php 

&lt;?=.

          <!-- exercise 26 -->
<p>Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12 
    двумя разными способами объявления констант.</p>
          <h1>Exercise 26</h1>
<?php
define("DAYS_COUNT", "7");   
// const DAYS_COUNT = 7;    
var_dump(DAYS_COUNT);  

         
// define("MONTH_COUNT", "12");
 const MONTH_COUNT = 7;
 var_dump(MONTH_COUNT);
?>



          <!-- exercise 27 -->

          <h1>Exercise 27</h1>
          <p>Open terminal and run a php file</p>
         