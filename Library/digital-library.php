<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>DCA Library</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    </head>
    <body>
        <div id="header"><?php include("includes/header.html"); ?></div>

        <div class="row">
            <div class="col s12 l10 offset-l1 card large">
                <div class="section no-pad-bot" id="index-banner">
                    <div class="container">
                        <br><br>
                        <h2><strong><font size="4">Linux Journal Digital</font></strong></h2>
						 <strong><font size="4"><a href="linux-journal-digital-2016.php">2016</a></font></strong><br>
						  <strong><font size="4"><a href="linux-journal-digital-2015.php">2015</a></font></strong><br>
						   <strong><font size="4"><a href="linux-journal-digital-2014.php">2014</a></font></strong><br>

                        <h2><strong><font size="4">Question Papers</font></strong></h2>
                            <strong><font size="4"><a href="2015-question-papers.php">2015</a></font></strong><br>
                            <strong><a href="2014-question-papers.php"><font size="4">2014</font></a></strong><br>
							<strong><font size="4"><a href="2013-question-papers.php">2013</a></font></strong><br>
							<strong><a href="https://sites.google.com/site/dcadigital/home/mcaquestions" target="_blank"><font size="4">Previous Question Papers</font></a></strong>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer"><?php include("includes/footer.html"); ?></div>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>$(document).ready(function () {
                $('.slider').slider({full_width: true});
            });
        </script>
    </body>
</html>
