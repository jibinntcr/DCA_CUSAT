<?php
include('admin/includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Department of Computer Applications | CUSAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favi.jpg" rel="icon">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/dcaBanner451.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="">
                    <div class="container">
                        <div class="row justify-content-start">
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/dcaBanner4.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-70 d-flex align-items-center" style="">
                    <div class="container">
                        <div class="row justify-content-start">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/dcaBanner1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="">
                    <div class="container">
                        <div class="row justify-content-start">
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/dcaBanner2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="">
                    <div class="container">
                        <div class="row justify-content-start">
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/dcaBanner3.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="">
                    <div class="container">
                        <div class="row justify-content-start">
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 ">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <a href="accreditation.php">
                            <div class="p-4">
                                <i class="fa fa-3x fa-check-circle text-primary mb-4"></i>
                                <h5 class="mb-3">Approvals & Affiliations</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <a href="achivements.php">
                            <div class="p-4">
                                <i class="fa fa-3x fa-shield-alt text-primary mb-4"></i>
                                <h5 class="mb-3">Achievements</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <a href="placement-cell.php">
                            <div class="p-4">
                                <i class="fa fa-3x fa-briefcase text-primary mb-4"></i>
                                <h5 class="mb-3">Placement</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <a href="https://alumni.cusat.ac.in/">
                            <div class="p-4">
                                <i class="fa fa-3x fa-users text-primary mb-4"></i>
                                <h5 class="mb-3">Alumni</h5>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- news started  -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center breaking-news bg-dark">
                        <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Announcements </span></div>
                        <marquee class="news-scroll " behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">&nbsp;&nbsp;<b class="text-white"></b>
                            &nbsp;&nbsp; <?php
                                            $sql = "SELECT * from announcement where status='1'";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt = 1;
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) {
                                            ?>
                                    <a class="news-scroll text-white" href="<?php echo  $result->link ?>" target="_blank"><?php echo  $result->announcements ?></a>
                                    &nbsp;&nbsp;
                                    <b class="text-white">|</b>
                            <?php
                                                }
                                            }
                            ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LATEST NEWS -->

    <!--  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">NEWS & EVENTS </h6>
                <h1 class="mb-5">Latest News </h1>
            </div>
         <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <h5 class="mb-0">Students Grievance Redressal Commottee 2022</h5>
                    </br>
                    <a href="./assets/pdf/student grievance2022.pdf" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                </div> -->
    <!--  <div class="testimonial-item text-center">
                    <h5 class="mb-0">New Headings</h5>
                    </br>
                    <a href="PhD.php" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                </div>
                <div class="testimonial-item text-center">
                    <h5 class="mb-0">New Headings</h5>
                    </br>
                    <a href="PhD.php" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                </div>
                <div class="testimonial-item text-center">
                    <h5 class="mb-0">New Headings</h5>
                    </br>
                    <a href="PhD.php" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                </div>-->
    <!-- </div>-->
    </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/mes.JPG" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,700&display=swap" rel="stylesheet">
                    <h1 class="mb-5">Vision</h1>
                    <p class="mb-4 justify">To become a centre of excellence in Computer Applications and impart innovation-oriented education for building globally competent and socially committed professionals.</p>
                    <h1 class="mb-5">Mission</h1>
                    <ul class="mb-4 justify">
                        <li>To develop technically competent professionals and equip them for research, innovations, higher studies and entrepreneurship.</li>
                        <li>To mould software professionals with ethical values for developing technologies emphasizing on societal and industrial needs.</li>
                        <li>To provide a globally recognized academic environment through industry – academia collaborations,digital learning and state of the art skill development.</li>
                        <li>To foster students by enriching universal human values to work in multidisciplinary domains exhibiting leadership qualities and teamwork.</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- changed the position -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <div class="text-center"> -->
                    <h6 class="section-title bg-white text-start text-primary pe-3">welcome to </h6>
                    <h1 class="mb-5">Department of Computer Applications</h1>
                    <p class="mb-4 justify">The Department of Computer Applications is a pioneer department of Cochin University of Science and Technology established in the year 1994. Currently the department offers MCA (Master of Computer Application), MSc Computer Science with Specialization in Artificial Intelligence, MSc Computer Science with Specialization in Data Science, Ph.D in Technology and Ph.D in Science. As of now more than 30 Ph.Ds has been produced in data science and allied areas. This department is bestowed with an experienced team of faculty members with an excellent academic track record and proficiency in data science, machine learning and cyber security. In the last five years the department has more than hundred publications in reputed journals and conferences. Also, the faculty has more than one crore worth funded projects. Curriculum of the department provides good theoretical foundation through high-quality teaching and extensive practical training. In addition to regular curriculum the department organizes workshops, technical seminars, faculty development programmes (FDP), short term training programmes (STTP) and conferences to expose the students with real world problems catering to industrial and societal needs.</p>

                    <!-- </div> -->
                </div>
                <div class="col-lg-6  wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative h-100">
                        <img class="img-fluid  w-100 h-100" src="img/dca_front.JPG" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- HOD MESSAGE -->
    <?php
    $sql = "SELECT id,name,message,designation,photo from hod where status='1' ";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
    ?>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative h-100">
                            <img class="img-fluid  w-100 h-100" src="admin/pages/uploads/<?php echo htmlentities($userArr[0]->photo); ?>" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title bg-white text-start text-primary pe-3">HOD's Message</h6>
                        <h1 class="mb-5">DCA CUSAT</h1>
                        <p class="mb-4 justify">
                            <?php echo ($userArr[0]->message); ?></br></br>
                            <b>- <?php echo htmlentities($userArr[0]->name); ?> </b> </br><?php echo htmlentities($userArr[0]->designation); ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>

    <!-- About Start HOD Message Second Section -->

    <!-- About End -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Notifications</h6>
                <h1 class="mb-5">News & Events</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4">
                        <h4 class="mb-5">ICA INTERNATIONAL CONFERENCE</h4>
                        <a href="https://icadcacusat.in/" class="flex-shrink-0 btn btn-danger  btnpx-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                    </div>
                </div>
                <div class="testimonial-item text-center">

                    <div class="testimonial-text bg-light text-center p-4">
                        <h4 class="mb-5">സർഗ്ഗം</br> 2022</h4>
                        <a href="https://app.degoo.com/share/nt61eoNg37MVly" class="flex-shrink-0 btn btn-danger  btnpx-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                    </div>
                </div>
                <div class="testimonial-item text-center">

                    <div class="testimonial-text bg-light text-center p-4">
                        <h4 class="mb-5">INNPASCO</br> 2022</h4>
                        <a href="" class="flex-shrink-0 btn btn-danger  btnpx-3" style="border-radius: 30px 30px 30px 30px;">Comming Soon</a>
                    </div>
                </div>

            </div>
        </div>
    </div> -->


    <!-- Service End -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Vision</h6>
                <h1 class="mb-5">To impart innovation-oriented education, to build globally competent and socially committed professionals.</h1>
             <p class="mb-4 ">To impart innovation-oriented education, to build globally competent and socially committed professionals.</p> -->

    <!-- </div>

    </div>
    </div> -->

    <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div> -->






    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Courses Offered</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="mca.php" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                                <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;"></a> -->
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">MCA</h3>
                            <h5 class="mb-4">Master of Computer Applications</h5>
                        </div>
                        <div class="d-flex border-top">
                            <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Regular & Cost sharing</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>30 Seats</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>6 Semesters</small> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="pg-programmes.php#msc" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">M.Sc.</h3>

                            <h5 class="mb-4">Computer Science</h5>
                        </div>
                        <div class="d-flex border-top">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/phd-image-new.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="PhD.php" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Ph.D.</h3>
                            <h5 class="mb-4">Doctor of Philosophy</h5>
                        </div>
                        <div class="d-flex border-top">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->




    <section class="testimonial text-center">
        <div class="container">

            <div class="heading white-heading">
                Testimonial
            </div>

            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="img/testimo/sindu.png" class="img-circle img-responsive" />
                            <h4>Dr. Sindhu P. M.</h4>
                            <h6>Assistant Professor and Head
                                Department of Computer and Information Science
                                Nagindas Khandwala College (Autonomous)
                                Mumbai
                            </h6>
                            <h6>MCA&nbsp;, 1998-2002</h6>
                            <p>My post-graduation experience at DCA is a real gemstone in my life. Enterprising professors, facilities, and a vibrant student community provided me with a great framework for exploring research and entrepreneurial possibilities. The diverse community and academic autonomy of the university fueled my personal and professional journey. I am always grateful for the support and knowledge served by the entire department.</p>
                        </div>
                    </div>
                    <?php
                    $sql = "SELECT * from testimonials where status='1'";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                    ?>
                            <div class="carousel-item">
                                <div class="testimonial4_slide">
                                    <img src="admin/pages/uploads/<?php echo  $result->image ?>" class="img-circle img-responsive" />
                                    <h4><?php echo  $result->name ?></h4>
                                    <h6><?php echo  $result->designation ?></h6>
                                    <h6><?php echo  $result->course ?>&nbsp;, <?php echo  $result->batch ?></h6>
                                    <p><?php echo  $result->message ?>
                                    </p>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>

                    <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
    </section>
    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Basil T. Paul(2014-2017, MCA)</h5>
                    <p>Software Engineer, Boston Consulting Group (BCG)</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Deciding to go with the MCA at DCA, CUSAT was one of the best decisions that I have made in my life. DCA provided me with the opportunity to grow in both my academic and personal life. Being in DCA, CUSAT means that you have an ample amount of opportunities for your career. Because of that, I was able to get into TCS Digital through the campus placement, and that was one of the best starting points in my career that I could ever imagine. The support that I got from all the faculty members of DCA throughout my degree was wonderful, especially the support from the placement coordinator. This valuable support and advice are one of the pillars that make me who I am today.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Mukesh Chandra Suyal(2006-2009, MCA)</h5>
                    <p>Senior Developer,Experian</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Hello, this is Mukesh.
                            I passed out in 2009 from this auspicious department, DCA, CUSAT. We were really fortunate to be a part of the department, and it was overall a great experience. We celebrated Onam with full enthusiasm for 3 years and still have fresh memories. The faculties were great and helped us excel in our journey. The curriculum is one of the best, which has practical implications. The labs are advanced and equipped with the latest technology stack. The lush green campus is really exceptional.
                            Best wishes! </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Rajat V K(2013-16, MCA)</h5>
                    <p>QA Lead, Mariapps</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I am Rajat VK, a 2016 batch graduate of the Department of Computer Applications at USAT,
                            and I am currently employed as the Quality Assurance Lead at Mariapps Marine Solutions Pvt Ltd in Kochi.
                            It was the DCA faculty, staff, and placement department that enabled me to acquire the skills necessary
                            for a successful corporate career, and I will be forever grateful for their assistance. Students at MCA thrive in the friendly environment, cooperative seniors, and dedicated professors. Having earned my MCA from CUSAT, and being a CUSATian, are accomplishments that fill me with enormous pride. I'd like to express my gratitude to the faculty and staff of DCA CUSAT for helping me become a 'Better Person.'</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0"> diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.5s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">

                <div class="testimonial-item text-center">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">Basil T. Paul(2014-2017, MCA)</a></h3>
                                    <span> Software Engineer, Boston Consulting Group (BCG)</span>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">Deciding to go with the MCA at DCA, CUSAT was one of the best decisions that I have made in my life. DCA provided me with the opportunity to grow in both my academic and personal life. Being in DCA, CUSAT means that you have an ample amount of opportunities for your career. Because of that, I was able to get into TCS Digital through the campus placement, and that was one of the best starting points in my career that I could ever imagine. The support that I got from all the faculty members of DCA throughout my degree was wonderful, especially the support from the placement coordinator. This valuable support and advice are one of the pillars that make me who I am today.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="testimonial-item text-center">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">Mukesh Chandra Suyal(2006-2009, MCA)</a></h3>
                                    <span>Senior Developer,Experian</span>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">Hello, this is Mukesh.
                                        I passed out in 2009 from this auspicious department, DCA, CUSAT. We were really fortunate to be a part of the department, and it was overall a great experience. We celebrated Onam with full enthusiasm for 3 years and still have fresh memories. The faculties were great and helped us excel in our journey. The curriculum is one of the best, which has practical implications. The labs are advanced and equipped with the latest technology stack. The lush green campus is really exceptional.
                                        Best wishes! </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="testimonial-item text-center">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">Rajat V K(2013-16, MCA)</a></h3>
                                    <span>QA Lead, Mariapps</span>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">I am Rajat VK, a 2016 batch graduate of the Department of Computer Applications at USAT,
                                        and I am currently employed as the Quality Assurance Lead at Mariapps Marine Solutions Pvt Ltd in Kochi.
                                        It was the DCA faculty, staff, and placement department that enabled me to acquire the skills necessary
                                        for a successful corporate career, and I will be forever grateful for their assistance. Students at MCA thrive in the friendly environment, cooperative seniors, and dedicated professors. Having earned my MCA from CUSAT, and being a CUSATian, are accomplishments that fill me with enormous pride. I'd like to express my gratitude to the faculty and staff of DCA CUSAT for helping me become a 'Better Person.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="testimonial-item text-center">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">Jino PJ(2018, Ph.D)</a></h3>
                                    <span>DataScientist, UVJ Technologies Pvt. Ltd</span>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">The Department of Computer Applications is one of the best departments in CUSAT. Freedom and respect towards the students provided by the department make it unique and encourage them to develop natural skills that enable them to implement IT in interdisciplinary areas. As a previous research scholar, I had ample opportunities to develop myself. NCILC was one platform to interact with pioneers in my area. Through this, I got an internship at Indian Statistical Institute, Kolkata. It was helpful for me to improve my research skills. During my tenure and now, the department is continuously growing because of the enthusiastic teaching and non-teaching staff.
                                        The placement cell in the department gives guidelines to start-ups and provides ample opportunities for industry interaction. Other than this, I enjoyed the beauty of Cochin, explored Cochin metro and malls, and got a taste of the city. Altogether it was a memorable experience from DCA CUSAT. I'd like to be a student in the department forever.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="testimonial-item text-center">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">Akash Kumar(2006-09, MCA))</a></h3>
                                    <span>R&D (High-Performance Computing), AMD Bangalore</span>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">The MCA program of DCA CUSAT is one of the best MCA programs available in India. All subjects are upgraded and continue with the latest market demands. It has been a great learning experience for me to be a part of such a great institution, which has helped me to develop my overall personality. Thanks to all the faculty and staff at DCA.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
                <div class="testimonial-item text-center">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">Dr. Sindhu P. M.(1998-2002,MCA)</a></h3>
                                    <span>Assistant Professor and Head
                                        Department of Computer and Information Science
                                        Nagindas Khandwala College (Autonomous)
                                        Mumbai
                                    </span>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">It was a great experience studying at Department of Computer Applications, CUSAT. Department faculties and environment helped me to develop my technical and research skills, along with the leadership, team building and time management. The high-tech laboratories and library created a wonderful learning atmosphere. Interaction with other departments were encouraged and this helped me in interdisciplinary research at the later stage. Professors in the Department were not only teaching the subject, but also were the facilitators of learning. The motivation, support and encouragement that I received from the Department helped me to
                                        pursue my higher studies. Professors are always there for the students and alumni, which is really appreciable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
                <div class="testimonial-item text-center">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">Rejin Jose K (2016-2018, MCA)</a></h3>
                                    <span>AI Engineer at IQVIA)</span>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">My post-graduation experience at the Department of Computer Applications is a real gemstone in my life. Enterprising professors, facilities, and a vibrant student community provided me with a great framework for exploring research and entrepreneurial possibilities. Also, the diverse community and academic autonomy of the university fueled my personal as well as professional journey.
                                        I am always grateful for the support and knowledge served by the entire department.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
                <div class="testimonial-item text-center">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">Navami S Binu(2019-2022, MCA)</a></h3>
                                    <span>Systems Engineer , TCS Digital</span>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">I feel very proud and blessed to be a part of the DCA family as it has taught me many lessons for life. I am really happy to have received such wonderful teachers who guided me. They were always there for us to suggest the right option. The faculties here are very focused towards our career and have very good subject knowledge. The syllabus for the studies is very relevant for our future and the teachers have the ability to convey overall messages towards students. The non-teaching staff are really supportive and friendly towards each and every student. Everyone experiences a new life, and new environment, and learns
                                        life skills that go beyond education. Thank you, DCA for every life lesson
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="testimonial-item text-center">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">Padma Nair(2017-2020, MCA)</a></h3>
                                    <span>Content Writer, Wala Services</span>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">Cusat campus has a very unique aura which will mesmerize you. The other facilities including huge labs, an amphitheatre, and a wonderful library are dreams come true.
                                        There are a lot of events like Innpasco(DCA fest), Sargam(cusat arts fest) and many more to keep you engaged in additional activities
                                        You will learn, grow and have a very changed perspective due to the diverse environment here. DCA is one of the largest departments with ample placement opportunities, good faculty and many other facilities. Till now, this is one my best decisions. Be it education, friendship or memories, I have learnt a lot from here and so will anyone choosing this!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              


            </div>
        </div>
    </div> -->
    <!-- TESTMONIAL End -->


    <!--GALLERY START -->
    <!-- <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>
                <h1 class="mb-5">DCA CUSAT</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">

                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="./gallery.php">
                                <img class="img-fluid" src="img/sarggam-mine.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="./gallery.php">
                                <img class="img-fluid" src="img/sarggam-drama.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="./gallery.php">
                                <img class="img-fluid" src="img/sarggam-nostalgia.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="./gallery.php">
                                <img class="img-fluid" src="img/sarggam-thiruvathira.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="./gallery.php">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/sarggam-price.jpg" alt="" style="object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
    </div> -->





    <!-- 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row row g-4 justify-content-center">
                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,700&display=swap" rel="stylesheet">
                    <div class="layoutindex">

                        <input name="nav" type="radio" class="nav home-radio" id="home" checked="checked" />
                        <div class="page home-page">
                            <div class="page-contents">
                                <h1>VISION</h1>
                                <p>To become a centre of excellence in Computer Applications and impart innovation-oriented education for building globally competent and socially committed professionals.</p>
                            </div>
                        </div>
                        <label class="nav" for="home">
                            <span>
                                VISION
                            </span>
                        </label>
                        <input name="nav" type="radio" class="about-radio" id="about" />
                        <div class="page about-page">
                            <div class="page-contents">
                                <h1>MISSION</h1>
                                <ul>
                                    <li>To develop technically competent professionals and equip them for research, innovations, higher studies and entrepreneurship.</li>
                                    <li>To mould software professionals with ethical values for developing technologies emphasizing on societal and industrial needs.</li>
                                    <li>To provide a globally recognized academic environment through industry – academia collaborations,digital learning and state of the art skill development.</li>
                                    <li>To foster students by enriching universal human values to work in multidisciplinary domains exhibiting leadership qualities and teamwork.</li>
                                </ul>
                            </div>
                        </div>
                        <label class="nav" for="about">
                            <span>
                                MISSION
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div> -->




    <!-- Categories Start -->



    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">News & Events</h6>
                <h1 class="mb-5">Latest News</h1>
            </div>
        </div>


        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">ICT Academy of Kerala has successfully completed 70 hours certificate program</a></h3>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">Happy to share that the Career and placement cell in association with the ICT Academy of Kerala has successfully completed 70 hours certificate program. 18 students from various departments have been certified.Happy to share that the Career and placem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">ICT Academy of Kerala has successfully completed 70 hours certificate program</a></h3>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">Happy to share that the Career and placement cell in association with the ICT Academy of Kerala has successfully completed 70 hours certificate program. 18 students from various departments have been certified.Happy to share that the Career and placem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">ICT Academy of Kerala has successfully completed 70 hours certificate program</a></h3>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">Happy to share that the Career and placement cell in association with the ICT Academy of Kerala has successfully completed 70 hours certificate program. 18 students from various departments have been certified.Happy to share that the Career and placem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="our-teamRec">
                        <div class="course-item ">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/mes.JPG" alt="">
                                <div class="team-content">
                                    <h3 class="team-title"><a href="https://infinio.co.in/">ICT Academy of Kerala has successfully completed 70 hours certificate program</a></h3>
                                    <a class="mb-0 centerIcon"></i>
                                    </a>
                                    <p class="description">Happy to share that the Career and placement cell in association with the ICT Academy of Kerala has successfully completed 70 hours certificate program. 18 students from various departments have been certified.Happy to share that the Career and placem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <?php include('partials/footer.php') ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YWN28PVKB7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YWN28PVKB7');
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
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