<?php

function phpAlert($msg) {
    echo ('<script type="tect/javascript">alert("' . $msg . '");</script>');
}

class HomeController extends Controller {

    private $matrixservice;

    public function __construct() {
        parent::__construct();
        $this->matrixservice = new MatrixService();
    }

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
        $days = $matrix->simulate();
        $daynumber = 0;
        $day = $days[$daynumber];
        include 'Presentation/home.php';
    }

    public function logIn() {
        
    }

    public function generateWithParams() {
        phpAlert("in functie");


//the posted value from dimensions is inserted into the session variable

        $_SESSION["dimension"] = $_POST["dimension"];
        $_SESSION["startNrPlants"] = $_POST["startNrPlants"];
        $_SESSION["startNrCarnivores"] = $_POST["startNrCarnivore"];
        $_SESSION["startNrHerbivores"] = $_POST["startNrHerbivore"];

//If the amount of plants+Carnivores+Herbivores is higher than the amount of squares in the matrix
//then there is a message for the matrix being too full.
        if ($_SESSION["startNrPlants"] + $_SESSION["startNrCarnivores"] + $_SESSION["startNrHerbivores"] >= pow($_SESSION["dimension"], 2)) {

            include 'Presentation/home.php';
            ;
        } else {
            $matrix = new test();
            $days = $matrix->simulate();
            $daynumber = 0;
            $day = $days[$daynumber];
            include 'Presentation/home.php';

            //header("location: ../Presentation/home.php");
        }
    }

    public function showUserOverview() {
        $overview = new test();
        $matrices = $overview->simulate();
        header("location: ../Presentation/overview.php");
    }

    public function showToday() {
        
    }

    public function showNextDay() {
        
    }

    public function showPreviousDay() {
        
    }

}
