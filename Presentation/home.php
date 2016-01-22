<!DOCTYPE html>
<!--
@Author: Annemie Roelants & Inneke Van Mechelen
-->

<html>

    <head>
        <meta charset="UTF-8">
        <title>Jurrasic Terrarium Home</title>
        <!-- Bootstrap -->
        <link href="/Jurassic_Terrarium/Presentation/css/bootstrap.min.css" rel="stylesheet">
        <link href="/Jurassic_Terrarium/Presentation/css/style.css" rel="stylesheet" type="text/css" />
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

        <header>
            <div id="login">
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
        <div class="wrapper">
            <div class="row container">
                <h1>Simulation parameters</h1>
                <div class="col-lg-6 col-lg-offset-1">
                    <form class="form-horizontal" action="Home/generateWithParams" method="POST">
                        <div class="form-group">
                            <label for="dimension" class="col-sm-6 form-control-label">Dimension:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="dimension" name="dimension" placeholder="dimension" value="" max="20"> * Max 20 breed
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="startNrCarnivore" class="col-sm-6 form-control-label">Start amount carnivores: </label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="startNrCarnivore" name="startNrCarnivore" placeholder="Start amount carnivores">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="startNrHerbivore" class="col-sm-6 form-control-label">Start amount herbivores: </label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="startNrHerbivore" name="startNrHerbivore" placeholder="Start amount herbivores">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="startNrPlants" class="col-sm-6 form-control-label">Start amount plants: </label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="startNrPlants"  name="startNrPlants" placeholder="Start amount plants">
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
                                <a href="../../Jurassic_Terrarium/" class="btn btn-default">Random Simulatie</a>
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
            <div class="text-center">
                <h1>Day 1</h1>

                <table class="tables text-center">
                    <tbody>
                        <?php for ($i = 0; $i < $_SESSION['dimension']; $i++) { ?>
                            <tr><?php for ($j = 0; $j < $_SESSION['dimension']; $j++) { ?>

                                    <td class="<?php echo $day[$i][$j]['type']; ?>"></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table><br>

                <section>
                    <form method="post" action="C:/xampp/htdocs/Jurassic_Terrarium/Business/controllers/Home/showPreviousDay">
                        <button  type="submit" class="btn btn-default prevnext" aria-label="Left Align">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"> </span>
                            <br>Previous
                        </button>
                    </form>
                    <form method="post" action="C:/xampp/htdocs/Jurassic_Terrarium/Business/controllers/Home/showNextDay">
                        <button type="submit" class="btn btn-default prevnext" aria-label="Left Align">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <br>Next
                        </button>
                    </form>
                    <form method="post" action="Home/showUserOverview">
                        <button type="submit" class="btn btn-default prevnext">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <br>Overview
                        </button>
                    </form>
                </section>
            </div>
        </div>

    </body>

</html>