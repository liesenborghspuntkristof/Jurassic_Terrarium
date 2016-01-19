<?php

session_start();

require_once 'Business/MatrixService.php';


if (isset($_GET["action"]) && $_GET["action"] == "simulate") {
//the posted value from dimensions is inserted into the session variable

    $_SESSION["dimension"] = $_POST["dimension"];
    $plants = $_POST["startNrPlants"];
    $carnivores = $_POST["startNrCarnivore"];
    $herbivores = $_POST["startNrHerbivore"];

//If the amount of plants+Carnivores+Herbivores is higher than the amount of squares in the matrix
//then there is a message for the matrix being too full.
    if ($plants + $carnivores + $herbivores >= $_SESSION["dimension"] ** 2) {
        header("location: HomeMatrixController.php?error=toocrowded");
        exit(0);
    }    
    $matrixservice= new MatrixService();
    $matrix=$matrixservice->createStartMatrix($plants, $carnivores, $herbivores, $_SESSION["dimension"]);
    include_once 'Presentation/home.php';
    
}
 else {
     
    $_SESSION["dimension"] = 6;
    do{
    $plants = rand(0, 36);
    $carnivores = rand(0, 36);
    $herbivores = rand(0, 36);
        
    }
    while($plants + $carnivores + $herbivores >=36);
    $matrixservice= new MatrixService();
    $matrix=$matrixservice->createStartMatrix($plants, $carnivores, $herbivores, $_SESSION["dimension"]);
    include_once 'Presentation/home.php';
} 

include_once 'Presentation/home.php';