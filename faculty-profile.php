<?php
include('admin/includes/config.php');
$id = $_GET['id'];
$sql = "SELECT * from faculty where status='1' AND id='$id' ";
$query = $dbh->prepare($sql);
$query->execute();
$userArr = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?php echo htmlentities($userArr[0]->name); ?> | Faculty | DCA CUSAT</title>
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
        <div class="container-fluid bg-primary py-5 mb-5 faculty-page-header-lab">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown"><?php echo htmlentities($userArr[0]->name); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="faculty.php">Faculty</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#"><?php echo htmlentities($userArr[0]->name); ?></a></li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                <!-- <div class="container-xxl py-5">
                <div class="container"> -->
                <div class="row g-5">
                    <div class="col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="team">
                                <div class="pic">
                                    <img src="admin/pages/uploads/<?php echo ($userArr[0]->image); ?>">
                                </div>
                            </div>
                            <div class="team-info team-left">
                                <h3 class="title"><?php echo ($userArr[0]->name); ?></h3>
                                <span class="post"><?php echo ($userArr[0]->designation); ?></span>
                                </br>
                                <h3 class="title">Contact Info</h3>
                                <!-- <h5 class="title">Address</h5> -->
                                <ul>
                                    <li class="post1"><i class="fa fa-envelope ex1" aria-hidden="true"></i><span class=""><?php echo ($userArr[0]->email); ?></span></li>
                                    <li class="post1"><i class="fa-solid fa-location-dot ex1" aria-hidden="true"></i><span class=""><?php echo ($userArr[0]->address); ?></span></li>
                                    <li class="post1"><i class="fa-solid fa-id-card ex1" aria-hidden="true"></i><a href="<?php echo ($userArr[0]->iqacLink); ?>" target="_blank"><span class="">CUSAT IQAC Profile</span></a></li>

                                </ul>
                                <hr class="hrline">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                        <!-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> -->
                        <h1 class="mb-4"><?php echo ($userArr[0]->name); ?></h1>
                        <p class="mb-4 justify"><?php echo ($userArr[0]->about); ?></p>

                        <!--  Field Of Special Interest Start -->

                        <h2 class="mb-4">Field Of Special Interest</h2>
                        <div class="row gy-3 gx-4 mb-4">
                            <?php
                            $interest1 = $userArr[0]->interest1;
                            if ($interest1 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest1); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $interest2 = $userArr[0]->interest2;
                            if ($interest1 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest2); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $interest3 = $userArr[0]->interest3;
                            if ($interest1 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest3); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $interest4 = $userArr[0]->interest4;
                            if ($interest4 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest4); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $interest5 = $userArr[0]->interest5;
                            if ($interest5 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest5); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $interest6 = $userArr[0]->interest6;
                            if ($interest6 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest6); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $interest7 = $userArr[0]->interest7;
                            if ($interest7 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest7); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $interest8 = $userArr[0]->interest8;
                            if ($interest8 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest8); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $interest9 = $userArr[0]->interest9;
                            if ($interest9 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest9); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $interest10 = $userArr[0]->interest10;
                            if ($interest10 != null) { ?>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-area-btn" style="width: 50px; height: 50px; border-radius:50px;">
                                            <i class="fa-solid fa-table-cells text-white"></i>
                                        </div>
                                        <div class="ms-3 team-info">
                                            <h5 class="title"><?php echo ($userArr[0]->interest10); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>

                            <!-- Field Of Special Interest END -->
                            </br>

                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-6">
                                    <div class="mb-0">
                                        <h1 class="mb-0">Education</h1>
                                        </br>
                                        </br>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="row gy-2 gx-4 mb-4">

                                                <?php
                                                $education1 = $userArr[0]->education1;
                                                if ($education1 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-graduation-cap text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title"><?php echo ($userArr[0]->education1); ?></h5>
                                                                    <span><?php echo ($userArr[0]->edDescription1); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>

                                                <?php
                                                $education2 = $userArr[0]->education2;
                                                if ($education2 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-graduation-cap text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title"><?php echo ($userArr[0]->education2); ?></h5>
                                                                    <span><?php echo ($userArr[0]->edDescription2); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>

                                                <?php
                                                $education3 = $userArr[0]->education3;
                                                if ($education3 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-graduation-cap text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title"><?php echo ($userArr[0]->education3); ?></h5>
                                                                    <span><?php echo ($userArr[0]->edDescription3); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>

                                                <?php
                                                $education4 = $userArr[0]->education4;
                                                if ($education4 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-graduation-cap text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title"><?php echo ($userArr[0]->education4); ?></h5>
                                                                    <span><?php echo ($userArr[0]->edDescription4); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>

                                                <?php
                                                $education5 = $userArr[0]->education5;
                                                if ($education5 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-graduation-cap text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title"><?php echo ($userArr[0]->education5); ?></h5>
                                                                    <span><?php echo ($userArr[0]->edDescription5); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>

                                                <?php
                                                $education6 = $userArr[0]->education6;
                                                if ($education6 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-graduation-cap text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title"><?php echo ($userArr[0]->education6); ?></h5>
                                                                    <span><?php echo ($userArr[0]->edDescription6); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-0">
                                        <h1 class="mb-0">Experience</h1>
                                        </br>
                                        </br>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="row gy-2 gx-4 mb-4">
                                                <?php
                                                $experience1 = $userArr[0]->experience1;
                                                if ($experience1 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience1); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription1); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                                <?php
                                                $experience2 = $userArr[0]->experience2;
                                                if ($experience2 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience2); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription2); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                                <?php
                                                $experience3 = $userArr[0]->experience3;
                                                if ($experience3 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience3); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription3); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                                <?php
                                                $experience4 = $userArr[0]->experience4;
                                                if ($experience4 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience4); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription4); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                                <?php
                                                $experience5 = $userArr[0]->experience5;
                                                if ($experience5 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience5); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription5); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                                <?php
                                                $experience6 = $userArr[0]->experience6;
                                                if ($experience6 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience6); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription6); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php }
                                                    ?><?php
                                                        $experience7 = $userArr[0]->experience7;
                                                        if ($experience7 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience7); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription7); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                                <?php
                                                $experience8 = $userArr[0]->experience8;
                                                if ($experience8 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience8); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription8); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                                <?php
                                                $experience9 = $userArr[0]->experience9;
                                                if ($experience9 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience9); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription9); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                                <?php
                                                $experience10 = $userArr[0]->experience10;
                                                if ($experience10 != null) { ?>
                                                    <div class="col-sm-12">
                                                        <div class="mb-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px; border-radius:50px;">
                                                                    <i class="fa fa-briefcase text-white"></i>
                                                                </div>
                                                                <div class="ms-3 team-info">
                                                                    <h5 class="title toUpper"><?php echo ($userArr[0]->experience10); ?></h5>
                                                                    <span class="post"><?php echo ($userArr[0]->expDescription10); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="">
                                    <h2 class="mb-4 paddingR Hbg"> Publications</h2>
                                </div>
                                <div class="row gy-3 gx-4 mb-4">
                                    <div class="">
                                        <?php echo ($userArr[0]->publications); ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $role1 = $userArr[0]->role1;
                            if ($role1 != null) { ?>
                                <div class="">
                                    <h2 class="mb-4 paddingR Hbg">Funded Projects</h2>
                                </div>

                                <div class="row gy-3 gx-4 mb-4">
                                    <div class="team-left">
                                        <div class="panel-body table-responsive">
                                            <table class="bg-light-table text-center table  table-bordered">
                                                <thead>
                                                    <tr class="tblTextColor table-white">
                                                        <th>Role</th>
                                                        <th>Project</th>
                                                        <th>Funding Agency</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $role1 = $userArr[0]->role1;
                                                    if ($role1 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role1); ?></td>
                                                            <td><?php echo ($userArr[0]->project1); ?></td>
                                                            <td><?php echo ($userArr[0]->agency1); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                    <?php
                                                    $role2 = $userArr[0]->role2;
                                                    if ($role2 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role2); ?></td>
                                                            <td><?php echo ($userArr[0]->project2); ?></td>
                                                            <td><?php echo ($userArr[0]->agency2); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                    <?php
                                                    $role3 = $userArr[0]->role3;
                                                    if ($role3 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role3); ?></td>
                                                            <td><?php echo ($userArr[0]->project3); ?></td>
                                                            <td><?php echo ($userArr[0]->agency3); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                    <?php
                                                    $role4 = $userArr[0]->role4;
                                                    if ($role4 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role4); ?></td>
                                                            <td><?php echo ($userArr[0]->project4); ?></td>
                                                            <td><?php echo ($userArr[0]->agency4); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                    <?php
                                                    $role5 = $userArr[0]->role5;
                                                    if ($role5 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role5); ?></td>
                                                            <td><?php echo ($userArr[0]->project5); ?></td>
                                                            <td><?php echo ($userArr[0]->agency5); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                    <?php
                                                    $role6 = $userArr[0]->role6;
                                                    if ($role6 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role6); ?></td>
                                                            <td><?php echo ($userArr[0]->project6); ?></td>
                                                            <td><?php echo ($userArr[0]->agency6); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                    <?php
                                                    $role7 = $userArr[0]->role7;
                                                    if ($role7 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role7); ?></td>
                                                            <td><?php echo ($userArr[0]->project7); ?></td>
                                                            <td><?php echo ($userArr[0]->agency7); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                    <?php
                                                    $role8 = $userArr[0]->role8;
                                                    if ($role8 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role8); ?></td>
                                                            <td><?php echo ($userArr[0]->project8); ?></td>
                                                            <td><?php echo ($userArr[0]->agency8); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                    <?php
                                                    $role9 = $userArr[0]->role9;
                                                    if ($role9 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role9); ?></td>
                                                            <td><?php echo ($userArr[0]->project9); ?></td>
                                                            <td><?php echo ($userArr[0]->agency9); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                    <?php
                                                    $role10 = $userArr[0]->role10;
                                                    if ($role10 != null) { ?>
                                                        <tr class="tblTextColor table-white">
                                                            <td><?php echo ($userArr[0]->role10); ?></td>
                                                            <td><?php echo ($userArr[0]->project10); ?></td>
                                                            <td><?php echo ($userArr[0]->agency10); ?></td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <?php
                            $otherInfo = $userArr[0]->otherInfo;
                            if ($otherInfo != null) { ?>
                                <div class=" ">
                                    <h2 class="mb-4 Hbg paddingR">Other Info</h2>
                                </div>
                                <div class="row gy-3 gx-4 mb-4">
                                    <div class="">
                                        <?php echo ($userArr[0]->otherInfo); ?>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                        <hr class="hrline">
                    </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>

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
<?php }
?>