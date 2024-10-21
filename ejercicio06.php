<?php
   $nombre = "Anna"; 
   $array = array(1, 2, 3, "casa", $nombre);

   //Se obtiene el número de elementos 
   $longitud = count($array);

   //Recorre todos los elementos 
   for($i=0; $i<$longitud; $i++){ 
      //Se obtiene el valor de cada elemento 
      echo $array[$i]; 
      echo "<br>"; 
   }
?>