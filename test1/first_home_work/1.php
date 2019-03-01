<?php

// 1 exercise
// echo "This is 1 exercise<br />";
$age = "1";
//    2exercise
$name = "Aleaxander";

//    3 exercise
echo "Age is: $age <br />";
//    4 exercise
echo  "My name is: $name <br />";

//    5 exercise
if ($age >=18 && $age <=59){
    echo "You have to work hard <br />";
} 
//    6 exercise
if($age >=59){
  echo   "Now don't have to work and can go to retired <br />";
}
//    7 exercise
elseif($age<18 && $age >0){
    echo "Do not hurry go to work, make something funn <br />";
}
//    8 exercise
if ($age <=0){
    echo "You entered undefined value, please try again!! <br />";
}
//    9 exercise
$day = 44;
//    10 exercise
switch ($day){
    case !isset($day):
    var_dump($day);
    echo " Change your day value because it does not work <br />";
    break;

    case $day <=5 && $day >=1:
    echo "today you have to go to work <br />";
    
    break;
//    11 exercise

   case $day >=6 && $day <=7:
   echo " today you have a day without work, this is great!!! <br />";
   break;

//    12 exercise

    case $day <=0 || $day >7:
    echo "Enter another value";
    break;
}
?>
 
 
 <!-- 13 exercise  -->
<form acrion="1.php" method="POST">
<p>Long of distance in kilometers: <input type="text" name="3" /> </p>
<p>Time which car spends at hours: <input type="text" name="4" /> </p>
<p><input type="submit" /> </p>
</form>

<?php
$speed_hours=$_POST[3]/$_POST[4];
$speed_seconds=($_POST[3]*1000) /($_POST[4]*60*60);

echo "Speed of car at hours : $speed_hours km/hour and at seconds:$speed_seconds meter/second";
?>

   <!-- 14 exercise -->
<?php
$foo ='bar';
$bar =10;
$foo=$bar;

echo "$foo[0]";
?>  
        
    