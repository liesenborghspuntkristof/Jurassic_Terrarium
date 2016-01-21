<?php


class HomeController extends Controller{

private $matrixservice;

    public function __construct()
    {
        parent::__construct();
        $this->matrixservice= new MatrixService();
    }

    public function index(){

        $_SESSION["dimension"] = 6;
        $plants = rand(0, 36);
        $carnivores = rand(0, 36);
        $herbivores = rand(0, 36);

        while($plants + $carnivores + $herbivores >= 36){
            $plants = rand(0, 36);
            $carnivores = rand(0, 36);
            $herbivores = rand(0, 36);
    };


        $this->matrixservice->createStartMatrix($plants, $carnivores, $herbivores, $_SESSION["dimension"]);

        header ("location: Presentation/home.php");

    }
    public function logIn(){

    }

    public function generateWithParams(){


//the posted value from dimensions is inserted into the session variable

            $_SESSION["dimension"] = $_POST["dimension"];
            $plants = $_POST["startNrPlants"];
            $carnivores = $_POST["startNrCarnivore"];
            $herbivores = $_POST["startNrHerbivore"];

//If the amount of plants+Carnivores+Herbivores is higher than the amount of squares in the matrix
//then there is a message for the matrix being too full.
            if ($plants + $carnivores + $herbivores >= pow($_SESSION["dimension"] , 2)) {

                header("location: ../Presentation/home.php");
            }else {

                $this->matrixservice->createStartMatrix($plants, $carnivores, $herbivores, $_SESSION["dimension"]);

                header("location: ../Presentation/home.php");
            }
        }

    public function showUserOverview(){
        $overview = new test();
        $matrices=$overview->simulate();
        header("location: ../Presentation/overview.php");
    }
    public function showToday(){

    }
    public function showNextDay(){

    }
    public function showPreviousDay(){

    }
}