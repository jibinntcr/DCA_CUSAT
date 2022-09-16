<?php
include('admin/includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lab and Facilities | DCA CUSAT</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
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
    <div class="container-fluid bg-primary py-5 mb-5 page-header-lab">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Lab and Facilities</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Lab and Facilities</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row row g-4 justify-content-center">

                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">DCA CUSAt</h6>
                    <h1 class="mb-5">Research Labs</h1>
                </div>
                <!-- 3 LAB -->
                <div id="msc" class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-4 justify-content-center">

                            <?php
                            $sql = "SELECT * from researchlab where status='1'";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                            ?>
                                    <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="our-teamRec text-center">
                                            <img src="admin/pages/uploads/<?php echo $result->image ?>" alt="">
                                            <div class="team-content">
                                                <h3 class="team-title"><a><?php echo $result->name ?></a></h3>
                                                <a class="mb-0 centerIcon"> <a data-toggle="collapse" href="#lab<?php echo $result->id ?>" class="flex-shrink-0 btn btn-danger  btnpx-3" style="border-radius: 30px 30px 30px 30px;">Read More</a></i>
                                                </a>
                                                <div id="lab<?php echo $result->id ?>" class="p-4 collapse">
                                                    <ul>
                                                        <?php
                                                        $content = $result->content;
                                                        if ($content != null) { ?>
                                                            <li class="description"><?php echo $result->content ?></li>
                                                        <?php }
                                                        ?>

                                                        <?php
                                                        $facility2 = $result->facility2;
                                                        if ($facility2 != null) { ?>
                                                            <li class="description"><?php echo $result->facility2 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility3 = $result->facility3;
                                                        if ($facility3 != null) { ?>
                                                            <li class="description"><?php echo $result->facility3 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility4 = $result->facility4;
                                                        if ($facility4 != null) { ?>
                                                            <li class="description"><?php echo $result->facility4 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility5 = $result->facility5;
                                                        if ($facility5 != null) { ?>
                                                            <li class="description"><?php echo $result->facility5 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility6 = $result->facility6;
                                                        if ($facility6 != null) { ?>
                                                            <li class="description"><?php echo $result->facility6 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility7 = $result->facility7;
                                                        if ($facility7 != null) { ?>
                                                            <li class="description"><?php echo $result->facility7 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility8 = $result->facility8;
                                                        if ($facility8 != null) { ?>
                                                            <li class="description"><?php echo $result->facility8 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility9 = $result->facility9;
                                                        if ($facility9 != null) { ?>
                                                            <li class="description"><?php echo $result->facility9 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility10 = $result->facility10;
                                                        if ($facility10 != null) { ?>
                                                            <li class="description"><?php echo $result->facility10 ?></li>
                                                        <?php }
                                                        ?>



                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            }
                            ?>



                        </div>
                    </div>
                </div>

                <!-- STUDENTS LAB START-->
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">DCA CUSAT</h6>
                    <h1 class="mb-5">Students Lab</h1>
                </div>
                <div id="msc" class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-4 justify-content-center">

                            <?php
                            $sql = "SELECT * from studentslab where status='1'";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                            ?>
                                    <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="our-teamRec text-center">
                                            <img src="admin/pages/uploads/<?php echo $result->image ?>" alt="">
                                            <div class="team-content">
                                                <h3 class="team-title"><a><?php echo $result->name ?></a></h3>
                                                <a class="mb-0 centerIcon"> <a data-toggle="collapse" href="#labs<?php echo $result->id ?>" class="flex-shrink-0 btn btn-danger  btnpx-3" style="border-radius: 30px 30px 30px 30px;">Read More</a></i>
                                                </a>
                                                <div id="labs<?php echo $result->id ?>" class="p-4 collapse">
                                                    <ul>
                                                        <?php
                                                        $content = $result->content;
                                                        if ($content != null) { ?>
                                                            <li class="description"><?php echo $result->content ?></li>
                                                        <?php }
                                                        ?>

                                                        <?php
                                                        $facility2 = $result->facility2;
                                                        if ($facility2 != null) { ?>
                                                            <li class="description"><?php echo $result->facility2 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility3 = $result->facility3;
                                                        if ($facility3 != null) { ?>
                                                            <li class="description"><?php echo $result->facility3 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility4 = $result->facility4;
                                                        if ($facility4 != null) { ?>
                                                            <li class="description"><?php echo $result->facility4 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility5 = $result->facility5;
                                                        if ($facility5 != null) { ?>
                                                            <li class="description"><?php echo $result->facility5 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility6 = $result->facility6;
                                                        if ($facility6 != null) { ?>
                                                            <li class="description"><?php echo $result->facility6 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility7 = $result->facility7;
                                                        if ($facility7 != null) { ?>
                                                            <li class="description"><?php echo $result->facility7 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility8 = $result->facility8;
                                                        if ($facility8 != null) { ?>
                                                            <li class="description"><?php echo $result->facility8 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility9 = $result->facility9;
                                                        if ($facility9 != null) { ?>
                                                            <li class="description"><?php echo $result->facility9 ?></li>
                                                        <?php }
                                                        ?>
                                                        <?php
                                                        $facility10 = $result->facility10;
                                                        if ($facility10 != null) { ?>
                                                            <li class="description"><?php echo $result->facility10 ?></li>
                                                        <?php }
                                                        ?>



                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            }
                            ?>



                        </div>
                    </div>
                </div>
                <!-- STUDENTS LAB END  -->


                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="Hbg ">
                        <h2 class="mb-4 paddingR">Other Facilities</h2>
                    </div>
                    <div class="row gy-3 gx-4 mb-4">
                        <div class="team-left">
                            <ul>
                                <li class="post1"><i class="fa-solid fa-computer" aria-hidden="true"></i><span class="">3 Dell Precision 3650 Workstations</span>
                                </li>

                                <li class="post1"><i class="fa-solid fa-computer" aria-hidden="true"></i><span class="">2 Boston Workstations</span>
                                </li>

                                <li class="post1"><i class="fa-solid fa-computer" aria-hidden="true"></i><span class="">8 High performance computers</span>
                                </li>
                                <li class="post1"><i class="fa-solid fa-computer" aria-hidden="true"></i><span class="">3 Apple imac machines</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>




                <!-- <div class="d-flex align-items-center  mb-3">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow">
                            <button class="collapsible btn btn-primary fw-semi-bold  py-3 px-5">Artificial Intelligence Research Lab</button>
                            <div class="content">
                                <div class="mb-4 py-2 text-black">
                                    <ul class="justify">
                                        <li>Thinksystem SR670 GPU server with Intel Xeon Gold 6226R processor</li>
                                        <li>GPUs - 2XTesla A100 with 40 GB memory each</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow">
                            <button class="collapsible btn btn-primary fw-semi-bold py-3 px-5">Cyber Forensic Research and Training lab</button>
                            <div class="content">
                                <div class="mb-4 py-2 text-black">
                                    <ul class="justify">
                                        <li>High end Forensic Workstation : FRED</li>
                                        <li>All-in-one Field Cyber Forensic Kit : VPER kit</li>
                                        <li>Write Blockers Kit with Forensic Duplicator : ULTRA Kit</li>
                                        <li>Universal Forensic Extraction Kit</li>
                                        <li>Digital Image Forensic Software : Amped Authenticate</li>
                                        <li>Cyber Forensic Analysis Software : Encase V7</li>
                                        <li>Forensic Tool Kit : FTK-6</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow">
                            <button class="collapsible btn btn-primary fw-semi-bold  py-3 px-5">Data Science Research lab</button>
                            <div class="content">
                                <div class="mb-4 py-2 text-black">
                                    <ul class="justify">
                                        <li>Big Data Analytics platform with high performance hadoop cluster comprising of</li>
                                        <li>Name node server - Fujitsu primergy RX2540 M4</li>
                                        <li>2 X Data node servers- Fujitsu primergy RX2530 M4</li>
                                        <li>Cluster Supports Hortonworks Data platform, HDP 3.0</li>
                                        <li>10 X GPU based high performance work stations for deep learning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div>
                    <div class="row gy-5 gx-4 mb-4">
                        <div class="col-lg-3">
                            <p>
                            <h6 class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>3 Dell Precision 3650 Workstations</h6>

                        </div>
                        <div class="col-lg-3">
                            <p>
                            <h6 class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>2 Boston Workstations</h6>
                        </div>
                        <div class="col-lg-3">
                            <p>
                            <h6 class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>8 High performance computers</h6>
                        </div>
                        <div class="col-lg-3">
                            <p>
                            <h6 class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>3 Apple imac machines</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center  mb-3">
                    <div class="row g-4">

                        <div class="col-lg-4 col-md-6 wow">
                            <div class="bg-light">
                                <p>
                                <h5 class="mb-0 pro  bg-white text-start text-primary pe-3">MSc Computer Data Science lab</h5>
                                <ul>
                                    <li class="mb-0">30 intel core i7(10th generation) PCs - Windows 10 Pro</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow ">
                            <div class="bg-light">
                                <p>
                                <h5 class="mb-0 pro  bg-white text-start text-primary pe-3">Multimedia Lab </h5>
                                <ul>
                                    <li class="mb-0">11 LENOVO intel core-i7 All in one PCs with Windows 8</li>
                                </ul>
                                </p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 wow">
                            <div class=" bg-light">
                                <p>
                                <h5 class="mb-0 pro  bg-white text-start text-primary pe-3">MSc Computer Lab</h5>
                                <ul>
                                    <li class="mb-0">11 LENOVO intel core-i7 All in one PCs with Windows 8</li>
                                </ul>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow">
                            <div class=" bg-light">
                                <p>
                                <h5 class="mb-0 pro  bg-white text-start text-primary pe-3">MCA Computer Lab</h5>
                                <ul>
                                    <li class="mb-0">90 PCs - Windows 8/10 and Ubuntu 16.04/18.04</li>
                                </ul>
                                </p>
                            </div>
                        </div> -->
            </div>
        </div>
    </div>








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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

</html>