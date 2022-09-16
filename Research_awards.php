<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Research | DCA CUSAT</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Research Awards</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Research Awards</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
        <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">     
                            <div class="">
                                <h2 class="Hbg mb-4 paddingR">Research Awards</h2>
                            </div>
                            <div class="row gy-3 gx-4 mb-4">
                                <div class="team-left">
                                    <ol>
                                        <li><i aria-hidden="true"></i><span class="">In 2021, <b>Dr. Vinod P.</b> was awarded the <b>Seal Of Excellence for A Marie Skłodowska Curie Individual Fellowship</b> project proposal (Project Title OPTIMA: Organization Specific Threat Intelligence Mining and Sharing ) by the European Commission, approved 100,000 Euros from the host institution of research which is the University of Padua, Italy.</span>
                                        </li>
					<br />
                                        <li><i aria-hidden="true"></i><span class=""><b>Dr. Shailesh S</b> got the best paper award on the paper “Capsule Networks for Classifying Double-
Handed Classical Dance Gestures” presented in the Springer 4 th International Conference on Data Engineering and Communication Technology (ICDECT 2020), 25-26 September, organized by Department of Electronics and Communication Engineering, KITS- Warangal, Telangana, India.</span>
                                        </li>
					<br />
                                        <li><i aria-hidden="true"></i><span class=""><b>Ms. Sruthi S</b> got the best paper award on the paper “An LDA based approach towards word sense
disambiguation in Malayalam” presented in the International Conference on Machine Intelligence and Data Science Applications (MIDAS2020), 4-5 September, organized by School of Computer Science, University of Petroleum and Energy Studies- Dehradun, India.</span>
                                        </li>
					<br />
										<li><i aria-hidden="true"></i><span class=""><b>Dr. Jino P J</b> got the best paper award on the paper “Offline Handwritten Malayalam Word
Recognition Using a Deep Architecture” presented in the International Conference on Soft Computing for Problem Solving and Springer, 2017, organized by IIT Bhuvaneswar, India.</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
            </div>
        </div>
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