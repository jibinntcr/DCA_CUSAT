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
                    <h4>Publishers Link</h4>
                    <a href="https://www.springer.com">www.springer.com</a><br />
                    <a href="https://www.crcpress.com">www.crcpress.com</a><br />
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
