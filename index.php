<?php

     $baris = 0;
     $kolom = 0;
     $data = array();

    function setMatrix($input){

        $GLOBALS['baris'] = $input*20;
        $GLOBALS['kolom'] = $input;

        for ($i=0; $i < $GLOBALS['baris']; $i++) { 
            # code...
            for($i = 0; $i < $GLOBALS['baris']; $i++){
                  for ($j=0; $j < $GLOBALS['kolom']; $j++) { 
                      # code...
                      if($i == $j){
                        $GLOBALS['data'][$i][$j] = "$i.$j";
                      } else {
                        $GLOBALS['data'][$i][$j] = "null";
                      }
                  }
             }
        }
    }

    function showMatrix(){

        echo "<table>";
        for($i = 0; $i < $GLOBALS['baris']; $i++){
            echo "<tr>";
              for ($j=0; $j < $GLOBALS['kolom']; $j++) { 
                  # code...
                  echo "<td>".@$GLOBALS['data'][$i][$j]."</td>";
              }
            echo "</tr>";
         }

         echo "</table>";
    }

    setMatrix(5);
    showMatrix();
?>