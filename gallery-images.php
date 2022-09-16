<?php
include('admin/includes/config.php');
$id = $_GET['id'];
$sql = "SELECT * from gallerimages where galleryID ='$id' ";
$query = $dbh->prepare($sql);
$query->execute();
$userArr = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0) {
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- <title>Gallery</title> -->
        <meta charset="utf-8">
        <title>Gallery | DCA CUSAT</title>

        <link href="img/favi.jpg" rel="icon">

        <meta name="format-detection" content="telephone=no" />
        <link rel="icon" href="gallery/images/favicon.ico">
        <link rel="shortcut icon" href="gallery/images/favicon.ico" />
        <link rel="stylesheet" href="gallery/css/touchTouch.css">

        <link rel="stylesheet" href="gallery/css/style.css">
        <script src="gallery/js/jquery.js"></script>
        <script src="gallery/js/jquery-migrate-1.1.1.js"></script>
        <script src="gallery/js/jquery.easing.1.3.js"></script>
        <script src="gallery/js/script.js"></script>
        <script src="gallery/js/superfish.js"></script>
        <script src="gallery/js/jquery.equalheights.js"></script>
        <script src="gallery/js/jquery.mobilemenu.js"></script>
        <script src="gallery/js/tmStickUp.js"></script>
        <script src="gallery/js/jquery.ui.totop.js"></script>
        <script src="gallery/js/touchTouch.jquery.js"></script>

        <script>
            $(window).load(function() {
                // $().UItoTop({
                //     easingType: 'easeOutQuart'
                // });
                $('#stuck_container').tmStickUp({});
                $('.gallery .gall_item').touchTouch();
            });
        </script>
    </head>

    <body>
        <header>

            <section id="stuck_container">

            </section>
        </header>
        <section id="content" class="gallery">
            <!-- <div class="ic">More Website Templates @ TemplateMonster.com - August11, 2014!</div> -->
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <h2><?php echo htmlentities($userArr[0]->name); ?></h2>
                    </div>
                    <?php
                    $sql = "SELECT * from gallerimages where galleryID='$id'";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                    ?>
                            <div class="grid_4">
                                <div class="box">
                                    <a href="admin/pages/<?php echo $result->image ?>" class="gall_item"><img src="admin/pages/<?php echo $result->image ?>" alt=""><span></span></a>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>



            </div>
            </div>
        </section>
    </body>

    </html>
<?php }
?>