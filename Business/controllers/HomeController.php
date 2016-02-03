<?php

class HomeController extends Controller {
    /* public function __construct() {
      parent::__construct();
      $overview = new test;
      $this->days = $overview->simulate();
      } */

    public function index() {

        $_POST["dimension"] = 6;
        $_POST["startNrPlants"] = rand(0, 36);
        $_POST["startNrCarnivore"] = rand(0, 36);
        $_POST["startNrHerbivore"] = rand(0, 36);

        while ($_POST["startNrPlants"] + $_POST["startNrCarnivore"] + $_POST["startNrHerbivore"] >= 36) {
            $_POST["startNrPlants"] = rand(0, 36);
            $_POST["startNrCarnivore"] = rand(0, 36);
            $_POST["startNrHerbivore"] = rand(0, 36);
        };


        $matrix = new test();
        $_SESSION['days'] = $matrix->simulate();
        $days = $_SESSION['days'];
        $_SESSION['daynumber'] = 0;
        $daynumber = $_SESSION['daynumber'];
        $day = $days[$daynumber];
        include 'Presentation/home.php';
    }

    public function logIn() {
        
    }

    public function generateWithParams() {

        //the posted value from dimensions is inserted into the session variable

        $_SESSION["dimension"] = $_POST["dimension"];
        $_SESSION["startNrPlants"] = $_POST["startNrPlants"];
        $_SESSION["startNrCarnivores"] = $_POST["startNrCarnivore"];
        $_SESSION["startNrHerbivores"] = $_POST["startNrHerbivore"];

        //If the amount of plants+Carnivores+Herbivores is higher than the amount of squares in the matrix
        //then there is a message for the matrix being too full.
        if ($_SESSION["startNrPlants"] + $_SESSION["startNrCarnivores"] + $_SESSION["startNrHerbivores"] >= pow($_SESSION["dimension"], 2)) {

            include 'Presentation/home.php';

        } else {
            $matrix = new test();
            $_SESSION['days'] = $matrix->simulate();
            $days = $_SESSION['days'];
            $_SESSION['daynumber'] = 0;
            $daynumber = $_SESSION['daynumber'];
            $day = $days[$daynumber];
            include 'Presentation/home.php';

            //header("location: ../Presentation/home.php");
        }
    }

    public function showUserOverview() {
       $days = $_SESSION['days'];
       include 'Presentation/overview.php';
    }

    public function showToday() {
        
    }

    public function showNextDay() {
        $_SESSION['daynumber'] = $_SESSION['daynumber'] + 1;
        $daynumber = $_SESSION['daynumber'];
        $days = $_SESSION['days'];
        $day = $days[$daynumber];
        include 'Presentation/home.php';
    }

    public function showPreviousDay() {
        $_SESSION['daynumber'] = $_SESSION['daynumber'] - 1;
        $daynumber = $_SESSION['daynumber'];
        $days = $_SESSION['days'];
        $day = $days[$daynumber];
        include 'Presentation/home.php';
    }

}
