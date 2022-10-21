<?php
include('admin/includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Workshops | DCA CUSAT</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Workshops </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white">Workshops</a></li>
                            <!-- <li class="breadcrumb-item text-white active" aria-current="page">MSc Computer Science</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row row g-4 justify-content-center">

                <div class="container-xxl py-5">
                    <div class="row g-4 justify-content-center">
                        <?php
                        $sql = "SELECT * from workshop where status='1' ORDER BY year DESC,id DESC";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                            foreach ($results as $result) {
                        ?>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="course-item bg-light">
                                        <div class="position-relative overflow-hidden">
                                            <img class="img-fluid" src="admin/pages/uploads/<?php echo $result->image ?>" alt="">
                                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                                <a href="<?php echo $result->link ?>" target="_blank" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 pb-0">
                                            <h3 class="mb-0"><?php echo $result->name ?> <?php echo $result->year ?></h3>
                                            </br>

                                        </div>
                                        <div class="d-flex border-top">
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        }
                        ?>




                    </div>
                </div>
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