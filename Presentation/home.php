<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title>Jurrasic Terrarium Home</title>
        <!-- Bootstrap -->
        <link href="Presentation/css/bootstrap.min.css" rel="stylesheet">
        <link href="Presentation/css/style.css" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,400' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>

    <body>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <header <div id="login">
                <form class="form-inline">

                    <div class="form-group">
                        <label for="Naam">Username</label>
                        <input type="text" class="form-control" id="naam" name="naam" placeholder="Naam">
                    </div>
                    <div class="form-group">
                        <label for="Naam">Wachtwoord</label>
                        <input type="password" class="form-control" id="naam" name="wachtwoord" placeholder="Wachtwoord">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
            <h1>Jurassic Terrarium</h1>
        </header>
        <div class="container">
            <div class="row">
                <h1>Simulation parameters</h1>
                <div class="col-lg-4 col-lg-offset-1">
                    <form class="form-horizontal" action="HomeMatrixController.php?action=simulate" method="POST">
                        <div class="form-group">
                            <label for="dimension" class="col-sm-6 form-control-label">Dimension:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="dimension" name="dimension" placeholder="dimension" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="startNrCarnivore" class="col-sm-6 form-control-label">Start amount carnivores: </label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="startNrCarnivore"name="startNrCarnivore" placeholder="Start amount carnivores">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="startNrPlants" class="col-sm-6 form-control-label">Start amount plants: </label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="startNrPlants"  name="startNrPlants" placeholder="Start amount plants">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="startNrHerbivore" class="col-sm-6 form-control-label">Start amount herbivores: </label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="startNrHerbivore" name="startNrHerbivore" placeholder="Start amount herbivores">
                            </div>
                        </div>

                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == "toocrowded") {
                            ?>
                            <p style="color: red">DINOSAUR ATTACK! The terrarium is too crowded, select lower parameters.</p>
                            <?php
                        }
                        ?>

                        <div class="form-group">
                            <div class="col-sm-offset-6 col-sm-6">
                                <button type="submit" class="btn btn-default">Simulate</button>
                                <button type="submit" class="btn btn-default">Random Simulatie</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <div id="TerrariumNav" class="col-lg-4 col-lg-offset-1">
                    <!--                <button type="button" class="btn btn-default btn-sm btn-block" aria-label="Left Align">
                           <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Create new terrarium
                       </button>-->
                </div>
            </div>
            <div class="text-center" >
                <h1>Day 1</h1>

                <table class="tables text-center">
                    <tbody>
                        <?php for ($i = 0; $i < $_SESSION['dimension']; $i++) { ?>
                            <tr><?php for ($j = 0; $j < $_SESSION['dimension']; $j++) { ?>
                                    <td class="<?php echo $matrix[$i][$j]; ?>"></td>
                                    <?php }
                                ?>
                            </tr>
                                <?php
                            }
                            ?>

                    </tbody>
                </table><br>
                <section>
                    <button type="button" class="btn btn-default prevnext" aria-label="Left Align">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"> </span>
                        <br>Previous
                    </button>
                    <button type="button" class="btn btn-default prevnext" aria-label="Left Align">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <br>Next
                    </button>
                    <a href="overview.php" class="btn btn-default prevnext">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <br>Overview</a>
                </section>
            </div>



        </div>
<?php // put your code here  ?>
    </body>

</html>