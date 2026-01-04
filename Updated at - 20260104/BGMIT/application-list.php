<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Application List - BGMIT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/bgmibd.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/admission.css" rel="stylesheet">

</head>

<body>







    <!-- top section start -->
    <div id="top-section"></div>
    <!-- top section end -->
















    <!-- Navbar Start -->
    <div class="sticky">
        <div class="col-12 container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
            <a class="navbar-brand d-flex align-items-center px-4 px-lg-5" href="index.html">
                <img src="img/bgmibd.png" class="img-fluid" width="120" height="120" alt="Logo">
            </a>
            <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto p-4 p-lg-0">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>

                <!-- Mega Menu Dropdown -->
                <li class="nav-item dropdown position-static">
                    <a href="#" class="nav-link dropdown-toggle" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Courses
                    </a>
                    <div class="dropdown-menu w-100 mt-0" aria-labelledby="coursesDropdown" style="border-top: 3px solid #5472d2;">
                        <div class="container">
                            <div class="row py-4 px-5">
                                <div class="col-sm-6 col-lg-4">
                                    <h5><i class="fa-solid fa-images me-2"></i> Graphic Design</h5>
                                    <a href="course/basic-graphic-design.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Basic Graphic Design</a>
                                    <a href="course/advance-graphic-design.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Advance Graphic Design</a>
                                    <a href="course/motion-graphic-design.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Motion Graphic Design</a>
                                    <a href="course/ux-ui-graphic-design.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> UI/UX Design</a>
                                </div>
                                
                                <div class="col-sm-6 col-lg-4">
                                    <h5><i class="fa-solid fa-chart-column me-2"></i> Digital Marketing</h5>
                                    <a href="course/digital-marketing.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Digital Marketing</a>
                                    <a href="course/seo.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> SEO</a>
                                    <a href="course/social-media-marketing.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Social Media Marketing</a>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <h5><i class="fa-solid fa-code me-2"></i> Software Development</h5>
                                    <a href="course/full-stack-web-development.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Full Stack Developer</a>
                                    <a href="course/font-end-development.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Frontend Developer</a>
                                    <a href="course/back-end-development.html" class="dropdown-item"><i class="fa-solid fa-caret-right me-2"></i> Backend Development (PHP & Laravel)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a href="software.html" class="nav-link">Software</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="login/login.html" class="nav-link px-4">Login</a></li>
                </ul>
            </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


















    <!-- Courses Start -->
    <?php
        require_once "db.php"; // DB connection file

        $query = "SELECT * FROM admissions ORDER BY created_at DESC";
        $result = $conn->query($query);
        if (!$result) {
            die("Query failed: " . $conn->error);
        }
        $totalApplications = $result->num_rows;
    ?>
    <!-- Admission Section -->
    <section id="admission" class="py-5" style="background-color: #fff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-4">BGMI- NSDA Training Program Application List</h2>
                <p>Total Application - <?php echo $totalApplications; ?> pepole</p>
                <!-- <div class="mb-3 d-flex justify-content-end gap-2">
                    <button class="btn btn-primary" onclick="printTable()">🖨 Print</button>
                    <button class="btn btn-warning" onclick="downloadPDF()">📄 Download PDF</button>
                </div> -->
                <hr>
                <div class="table-responsive">
                    <table id="studentsTable" class="table table-hover table-bordered align-middle">
                        <thead class="table-warning text-center">
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Student</th>
                                <th>Course, Qualification & Apply Date</th>
                                <th>Other Details</th>                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                                $photo = !empty($row['photo']) ? 'uploads/' . $row['photo'] : 'uploads/default.png';
                                $qualification = $row['qualification'] == "Others" ? $row['other_qualification'] : $row['qualification'];
                            ?>
                            <tr>
                                <td class="text-center"><?= $i++ ?></td>
                                <td class="text-center"><img src="<?= $photo ?>" alt="Photo of <?= htmlspecialchars($row['full_name']) ?>" style="width:50px; height:50px; border-radius:50%; object-fit:cover; margin-right:10px;"></td>
                                <td class="text-center">                                    
                                    <div>
                                        <strong><?= htmlspecialchars($row['full_name']) ?></strong><br>
                                        <small>Father: <?= htmlspecialchars($row['father_name']) ?></small><br>
                                        <small>Mother: <?= htmlspecialchars($row['mother_name']) ?></small>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <strong><?= htmlspecialchars($row['course']) ?></strong><br>
                                    <i class="bi bi-mortarboard me-1"></i> <?= htmlspecialchars($qualification) ?><br>
                                    Apply Date: <?= date("d-M-Y", strtotime($row['created_at'])) ?>
                                </td>
                                <td>
                                    <i class="bi bi-telephone me-1"></i> <?= htmlspecialchars($row['mobile']) ?><br>
                                    <i class="bi bi-envelope me-1"></i> <?= htmlspecialchars($row['email']) ?><br>
                                    
                                    <i class="bi bi-calendar-date me-1"></i> <?= date("d-M-Y", strtotime($row['dob'])) ?>
                                </td>
                                <td class="text-center">
                                    <a href="aplicant-details-print.php?id=<?= $row['id'] ?>" target="_blank"><i class="bi bi-printer"></i> </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>            
        </div>
    </section>
    <!-- Courses End -->


















<!-- call section start -->
    <section class="admission-cta-section py-5" id="admission-cta-section">
        <div class="container text-center">
            <div class="cta-box p-4 p-md-5 shadow-lg mx-auto" style="max-width: 700px;">
                <h2 class="fw-bold mb-3">Ready to Start Your Journey?</h2>
                <p class="lead mb-4">Secure your spot in the course today and unlock endless creative opportunities.</p>

                <a href="#admission" class="btn btn-color text-light px-4 py-2 fs-5 rounded-pill">Apply for Admission</a>

                <div class="mt-4">
                    <p class="text-danger-emphasis fw-semibold bg-warning-subtle d-inline-block px-3 py-2 rounded-3 mt-3">
                    <i class="fa-solid fa-lock"></i> Note: All information is safe and confidential.
                    </p>
                    <p class="mt-3 fs-5">
                        <strong>Need help?</strong><br>
                        <a href="tel:01841562677" class="text-decoration-none fw-semibold text-dark"><i class="fa-solid fa-phone"></i> +880 1841-562677</a></br>
                        <a href="tel:01787226675" class="text-decoration-none fw-semibold text-dark"><i class="fa-solid fa-phone"></i> +880 1787-226675</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
<!-- call section start -->












    
    <!-- Footer Start -->
    <div id="include-footer"></div>
    <!-- Footer End -->
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-fixed-bottom btn-fixed-bottom btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script type="text/javascript">
    (function(){
        emailjs.init({
            publicKey: "hUhRzshBE9sSP8wFC",
        });
    })();
    </script>

    <script>
    // Function to load the footer
        // top section
        fetch('top-section.html')
        .then(res => res.text())
        .then(data => {
            document.getElementById('top-section').innerHTML = data;
        });

    // footer section
        fetch('footer.html')
        .then(res => res.text())
        .then(data => {
            document.getElementById('include-footer').innerHTML = data;
        });

    </script>
    
</body>

</html>