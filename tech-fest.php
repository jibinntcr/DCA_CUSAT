<?php
include('admin/includes/config.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tech Fest | DCA CUSAT</title>
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
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include('partials/header.php');
    ?>
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Tech Fest</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Tech Fest</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">DCA CUSAT</h6>
                <h1 class="mb-5">Tech Fest</h1>
                <p class="mb-4 justify">From humble beginnings four years ago, Innpasco, the annual national-level technical fest conducted by the Department of Computer Applications, CUSAT, has grown into an event that brings out the multitudes of talents and skills hidden in students.As part of Innpasco, several technical and cultural events were conducted for participants over the two days.. A greater focus was placed on the technical
                    events, with multiple coding and logic events. The number of events of a purely technical nature was increased, as compared to the previous version. Team coding, coding gauntlets, blind coding, web designing, hardware assembly, logic hunts, were among the technical events conducted. However, cultural events were given equal importance. Dance competitions, photography contests, treasure hunts and quizzes, and sporting and gaming events were also held, to great success. Students from about 20 colleges in and around Ernakulam and neighboring districts participated in these events. The events were conducted with the financial and logistic support of our sponsors, with K-Squad Dance Studio, Central Bank of India, Vibes Uniforms, and Ezed Academy being some of them. Sponsorship amounts from these organizations totalled Rs. 75,000.

                    It has been conducted for the last four years, each series is named as, Innpasco 1.0, Innpasco 2.0, Innpasco 3.0, Innpasco 4.0. Innpasco 4.0, the fest’s fourth iteration was held on October 30 &amp; 31, 2019. A salient feature of this edition of Innpasco was the two-day workshop on Machine Learning fundamentals conducted on October 11 &amp; 12, 2019. Since technologies like artificial intelligence, neural networks and machine learning are gaining more importance every day, this workshop, which saw 90+ registrations, provided an accessible stepping stone to the developments occurring in this field.
                    A 24-hour hackathon, titled Kode4Kochi, was organized on October 15, 2019. Teams spent 24 hours developing a product that would benefit the general populace of Kochi, or solve an existing problem. This event saw 6 teams ideate and design a solution through 24 gruelling hours with frequent cups of coffee as their companion. Winners of the event were provided internship opportunities, along with the cash prize.
                    A variety of technical and cultural events were planned and conducted for participants over the two days of Innpasco 4.0. Overall, Innpasco 4.0 received 300 student registrations over the two days it was held. Interest from the general student community and participation were both higher than those of previous years.
                </p>
                </br>
                </br>
            </div>
            <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                    <div class="row g-3">
                        <?php
                        $sql = "SELECT * from techfest where status='1' ORDER BY year DESC,id DESC";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                            foreach ($results as $result) {
                        ?>
                                <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                    <a class="position-relative d-block overflow-hidden" href="<?php echo $result->link ?> ">
                                        <img class="img-fluid" src="admin/pages/uploads/<?php echo $result->image ?>" alt="">
                                    </a>
                                </div>
                        <?php }
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <?php include('partials/footer.php') ?>


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