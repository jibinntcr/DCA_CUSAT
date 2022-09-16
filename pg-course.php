<?php
include('admin/includes/config.php');

$id = $_GET['id'];
$sql = "SELECT * from course where id=$id ";
$query = $dbh->prepare($sql);
$query->execute();
$userArr = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0) {
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?php echo htmlentities($userArr[0]->name); ?> <?php echo htmlentities($userArr[0]->specialization); ?> | DCA CUSAT</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favi.jpg" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include('partials/header.php') ?>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown"><?php echo htmlentities($userArr[0]->name); ?> <?php echo htmlentities($userArr[0]->specialization); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="pg-programmes.php">PG programmes</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page"><?php echo htmlentities($userArr[0]->name); ?> <?php echo htmlentities($userArr[0]->specialization); ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="admin/pages/uploads/<?php echo htmlentities($userArr[0]->image); ?>" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo htmlentities($userArr[0]->name); ?></h6>
                        <h1 class="mb-4"><?php echo htmlentities($userArr[0]->specialization); ?></h1>
                        <h6 class="bg-white text-start text-primary pe-3">From 2020 admission onwards</h6>
                        </br>
                        <!-- <p>
                    <h2 class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> From 2021 admission onwards</h2>
                    </p> -->
                        <h4 class="mb-4">No. of Seats</h4>
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->seat); ?></p>
                        </br>
                        <h4 class="mb-4">Eligibility Criteria for Admission</h4>
                        <p class="mb-4">
                            <!-- <i class="fa fa-arrow-right text-primary me-2"></i> -->
                            <?php echo ($userArr[0]->eligibility); ?>
                        </p>
                        <h4 class="mb-4">Syllabus</h4>

                        <?php
                        $link1 = $userArr[0]->sllabusLink;
                        if ($link1 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->sllabusLink); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->sllabus); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>
                        <?php
                        $link2 = $userArr[0]->link2;
                        if ($link2 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link2); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus2); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>
                        <?php
                        $link3 = $userArr[0]->link3;
                        if ($link3 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link3); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus3); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>
                        <?php
                        $link4 = $userArr[0]->link4;
                        if ($link4 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link4); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus4); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>
                        <?php
                        $link5 = $userArr[0]->link5;
                        if ($link5 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link5); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus5); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>
                        <?php
                        $link6 = $userArr[0]->link6;
                        if ($link6 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link6); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus6); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>


                        <?php
                        $link7 = $userArr[0]->link7;
                        if ($link7 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link7); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus7); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>

                        <?php
                        $link8 = $userArr[0]->link8;
                        if ($link8 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->$link8); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus8); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>

                        <?php
                        $link9 = $userArr[0]->link9;
                        if ($link9 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link9); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus9); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>

                        <?php
                        $link10 = $userArr[0]->link10;
                        if ($link10 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link10); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus10); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>

                        <?php
                        $link11 = $userArr[0]->link11;
                        if ($link11 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link11); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus11); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>

                        <?php
                        $link12 = $userArr[0]->link12;
                        if ($link12 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link12); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus12); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>
                        <?php
                        $link13 = $userArr[0]->link13;
                        if ($link13 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link13); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus13); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>

                        <?php
                        $link14 = $userArr[0]->link14;
                        if ($link14 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link14); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus14); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>

                        <?php
                        $link15 = $userArr[0]->link15;
                        if ($link15 != null) { ?>
                            <p> <a href="<?php echo htmlentities($userArr[0]->link15); ?>" target="_blank" class="text-primary mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo htmlentities($userArr[0]->syllabus15); ?></a></p>
                        <?php } else { ?>
                            <p></p><?php
                                }
                                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Footer Start -->
        <?php include('partials/footer.php') ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    </html>
<?php
} ?>