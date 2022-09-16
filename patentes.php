<?php
include('admin/includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Patents | DCA CUSAT</title>
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
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">

            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Patents</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Patents</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">DCA CUSAT</h6>
                <h1 class="mb-5">Active Patents</h1>
            </div>
            <div class="row row g-4 justify-content-center">
                <div class="row gy-3 gx-4 mb-4">

                    <section class="light">
                        <div class="container py-2">
                            <!-- <div class="h1 text-center text-dark" id="pageHeaderTitle">My Cards Light</div> -->
                            <?php
                            $sql = "SELECT * from patents where status='1'";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                            ?>

                                    <div class="postcard light blue">
                                        <a class="postcard__img_link" href="#">
                                            <img class="postcard__img" src="admin/pages/uploads/<?php echo $result->image ?>" alt="Image Title" />
                                        </a>
                                        <div class="postcard__text t-dark">
                                            <h1 class="postcard__title blue"><a href="#"><?php echo $result->name ?></a></h1>
                                            <div class="">
                                                <div>

                                                    <i class="mr-2"></i><?php echo $result->projectname ?>
                                                </div>
                                            </div>
                                            <ul class="postcard__tagbox">
                                                <h6 class="tag__item ex1">Publication Date</h6>
                                                <li class="tag__item"><i class="mr-2"></i><?php echo $result->publicationDate ?></li>
                                            </ul>
                                            <ul class="postcard__tagbox">
                                                <h6 class="tag__item ex1">Members</h6>
                                                <?php
                                                $member1 = $result->member1;
                                                if ($member1 != null) { ?>
                                                    <li class="tag__item"><i class="mr-2"></i><?php echo $result->member1 ?></li>
                                                <?php } ?>

                                                <?php
                                                $member2 = $result->member2;
                                                if ($member2 != null) { ?>
                                                    <li class="tag__item"><i class="mr-2"></i><?php echo $result->member2 ?></li>
                                                <?php } ?>
                                                <?php
                                                $member3 = $result->member3;
                                                if ($member3 != null) { ?>
                                                    <li class="tag__item"><i class="mr-2"></i><?php echo $result->member3 ?></li>
                                                <?php } ?>
                                                <?php
                                                $member4 = $result->member4;
                                                if ($member4 != null) { ?>
                                                    <li class="tag__item"><i class="mr-2"></i><?php echo $result->member4 ?></li>
                                                <?php } ?>
                                                <?php
                                                $member5 = $result->member5;
                                                if ($member5 != null) { ?>
                                                    <li class="tag__item"><i class="mr-2"></i><?php echo $result->member5 ?></li>
                                                <?php } ?>

                                            </ul>
                                            <div class="postcard__bar"></div>
                                            <div class="postcard__preview-txt"><?php echo $result->description ?></div>

                                        </div>
                                    </div>

                            <?php }
                            }
                            ?>


                        </div>
                    </section>

                    <!-- <div class="team-left">
                        <div class="panel-body table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr class="toUpper tblTextColor">
                                        <th>#</th>
                                        <th>APPLICATION/PATENT NUMBER</th>
                                        <th>TITLE</th>
                                        <th>INVENTORS</th>
                                        <th>COUNTRY</th>
                                        <th>VIEW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>IN 201741041303*</td>
                                        <td>PORTABLE AGRICULTURE NETWORK SYSTEM</td>
                                        <td>KUMAR, Moorakkal,Bhaskaran Santosh;BALAKRISHNAN, Kannan;NEELAKANTAPILLAI, Sunilkumar</td>
                                        <td>INDIA</td>
                                        <td><a class="" href="https://cusat.ac.in/files/exam/patent_18.201741041303_PORTABLE AGRICULTURE NETWORK SYSTEM.pdf"><i class="fa-solid fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>202041036565 A</td>
                                        <td> SYSTEM FOR ASSISTING A DEAF PERSON IN RESPONDING TO A SITUATION IN ASURROUNDING ENVIRONMENT WITHIN A PREMISE AND METHOD THEREOF</td>
                                        <td>Jestin Joy, Sreeraj M, Kannan Balakrishnan, Alphonsa Kuriakose</td>
                                        <td>INDIA</td>
                                        <td><a class="" href="/assets/pdf/Justin.pdf"><i class="fa-solid fa-eye"></i></a></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                </div>
                <!-- <div class=" col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h4> <a href="./assets/pdf/patent kannan sir.pdf" class="mb-3">Dr. B Kannan</a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h4><a href="./assets/pdf/Justin.pdf" class="mb-3">Justin Joy</a></h4>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Service End -->
    <!-- Footer Start -->
    <?php include('partials/footer.php') ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=" #" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
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