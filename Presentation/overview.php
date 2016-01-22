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
        <link href="/Jurassic_Terrarium/Presentation/css/style.css" rel="stylesheet" type="text/css"/>
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

        <div class="container">
            <a href ="home.php" class="btn btn-default btn-sm" >
                <span class=" glyphicon glyphicon-home" aria-hidden="true"></span> Home
            </a>
            <h1>Overview</h1>

            <?php 
            $daynumber = 1;
            foreach ($days as $day) { 
                ?>
                <div class="overview">
                    <table class="tables">
                        <thead><h2>Day: <?php echo $daynumber ?></h2></thead>
                    
                    <tbody>
                            <?php for ($i = 0; $i < $_SESSION['dimension']; $i++) { ?>
                                <tr><?php
                                    for ($j = 0; $j < $_SESSION['dimension']; $j++) {
                                        ?><td class="<?php echo $day[$i][$j]['type'] ?>"> </td><?php }
                                    ?>
                                </tr><?php }
                                ?>
                    </tbody>
                </table>
            </div>

            <?php
            $daynumber++;
            }
            ?>
        </div>
    </body>
</html>
