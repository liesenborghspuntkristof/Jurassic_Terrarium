<?php
session_start();
$_SESSION["dimension"] = $_POST["dimension"];
$plants = $_POST["startNrPlants"];
$carnivores = $_POST["startNrCarnivore"];
$herbivores = $_POST["startNrHerbivore"];

if ($plants + $carnivores + $herbivores > $_SESSION["dimension"] ** 2) {
    header('location:index_tmp.php?toocrowded=true');
    exit(0);
}



for ($i=0; $i<$plants; $i++)
   $simMatrix[] = "P";
for ($i=0; $i<$carnivores; $i++)
   $simMatrix[] = "C";
for ($i=0; $i<$herbivores; $i++)
   $simMatrix[] = "H";
for ($i=$plants+$carnivores+$herbivores; $i<$_SESSION["dimension"] ** 2; $i++) 
   $simMatrix[] = null;

shuffle($simMatrix);
$simMatrix = array_chunk($simMatrix, $_SESSION["dimension"]);

for ($i=0; $i < $_SESSION["dimension"]; $i++) 
   for ($j=0; $j < $_SESSION["dimension"]; $j++)     
       if ($simMatrix[$i][$j]) {
          $_SESSION["simData"][] = array(
              'dimension' => $_SESSION["dimension"],
              'day' => 0,
              'positionx' => $i,
              'positiony' => $j,
              'type' => $simMatrix[$i][$j],
              'life' => 1, );
       }       
       
       
       
       
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>       
        <?php       
        echo '<pre>';
        print_r($simMatrix);
        print_r($_SESSION["simData"]); 
        echo '</pre>'        
        ?>
    </body>
</html>