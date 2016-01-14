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
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
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
                
            <header
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
                <h1>Day 1</h1>
                <div class="row">
                    <div class="col-lg-8"> 
                        <table class="table text-center">
                            <tbody>
                            <tr><td class="plant"> </td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>
                            <tr><td>1</td><td class="carni"> </td><td>3</td><td>4</td><td>5</td><td>6</td></tr>
                            <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>
                            <tr><td>1</td><td>2</td><td>3</td><td class="herbi"> </td><td>5</td><td>6</td></tr>
                            <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>
                            <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>
                            </tbody>
                        </table>
                        <section class="text-center">
                        <button type="button" class="btn btn-default" aria-label="Left Align">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"> </span><br>Previous
                        </button>
                        <button type="button" class="btn btn-default" aria-label="Left Align">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><br>Next 
                        </button> 
                        </section>
                    </div>
                    
                    
                    <div id="TerrariumNav" class="col-lg-2 col-lg-offset-1">
                        <a href class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Overview</a>
                        <br><br>
                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Create new terrarium
                        </button>
                    </div>
                </div>
            </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
