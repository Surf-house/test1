<!-- exercise 28 -->
<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>

       <table>
       <?php
       for($i = 0; $i < 10; $i++) {
         echo'<tr>';
         for($j = 0; $j < 10; $j++) 
           echo '<td>',$j?$i?$i*$j:$j:$i,'</td>';
         echo'</tr>';
       }
       ?>
       </table>


     <!-- Finish -->
