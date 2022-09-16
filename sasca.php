<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SASCA | DCA CUSAT</title>
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
                    <h1 class="display-3 text-white animated slideInDown">SASCA</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">SASCA</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <h1 class="mb-4">SASCA</h1>
                    <p class="mb-4 justify">SASCA (Students Association of Department of Computer Application) is lead by the students for the students and each student in the department is a member of that. The association is responsible for conducting extra curricular events like seminars, workshops and tech fests and also cultural festivals inside the department. The association will also collaborate in charity works once in an year.</p>
                    <p class="mb-4 justify">SASCA (Students Association of Department of Computer Application) is lead by the students for the students and each student in the department is a member of that. The association is responsible in every activities for the students in the department, which includes</p>
                    <div class="py-2 text-black">
                        <ul class="justify">
                            <li>Uniform distribution </li>
                            <li>Conducting freshers party for new joiners</li>
                            <li>Conducting farewell party for seniors</li>
                            <li>There is a student’s store running under SASCA </li>
                            <!-- <li>10 X GPU based high performance work stations for deep learning</li> -->
                        </ul>
                        <p class="mb-4 justify">And also in extracurricular activities like</p>
                        <ul class="justify">
                            <li>Conducting seminars </li>
                            <li>Conducting workshops</li>
                            <!-- <li>10 X GPU based high performance work stations for deep learning</li> -->
                        </ul>
                        <p class="mb-4 justify">The most highlighted thing in extra curricular activities is that there is an innovative incubation cell, unIT , which is running successfully under SASCA. And there is a national level tech fest conducted by SASCA, Innpasco, every year. SASCA will also collaborate in charity works at least once in a year.SASCA conducts all the cultural festivals like Onam, Diwali, Christmas etc in the department.</p>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- collapse end -->
    </div>







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