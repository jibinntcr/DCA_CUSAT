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
            <div class="col s12 l10 offset-l1 card">
                <div class="section no-pad-bot" id="index-banner">
                    <h4>Book Recommendation</h4>
                    <p>
                        <em>Any library users can make book recommendation irrespective of whether they are Faculties, Research Scholars or Students and all the recommendations will be subject to the approval of Head of the Department.</em><br />&#8203;
                    </p>
                    <div>
                        <form enctype="multipart/form-data" action="formSubmit.php" method="POST">
                            <div class="row container col s12">
                                <div class="input-field col s12">
                                    <input id="name" name="name" type="text" class="validate" required>
                                    <label for="name">Name of Author</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="isbn" name="isbn" type="text" class="validate" required>
                                    <label for="isbn">Publisher/ISBN</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="title" name="title" type="text" class="validate" required>
                                    <label for="title">Title</label>
                                </div>  
                                 <div class="input-field col s12">
                                     <input  type="submit" class="btn" value="Submit" name="Submit">
                                </div>  
                                
                            </div>
                        </form>
                    </div>

                    <a href="publishers-link.php" target="_blank">
                        <span class="btn">Find Your Book</span>
                    </a>
                    <div style="height: 10px; overflow: hidden;"></div></div></div>
        </div>
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
