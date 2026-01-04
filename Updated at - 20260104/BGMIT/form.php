<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Free Course - BGMIT</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/admission.css" rel="stylesheet">

    <style>
        .upload-box {
            border: 2px dashed #ffc107;
            background: #fff;
            cursor: pointer;
            transition: 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;  /* Center horizontally */
            justify-content: center; /* Center vertically */
        }

        .upload-box:hover {
            background: #fff8e1;
        }

        .upload-box.dragover {
            background: #fff3cd;
            border-color: #ff9800;
        }

        .img-preview {
            max-width: 150px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }
    </style>


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
    <!-- Admission Section -->
    <section id="admission" class="py-5" style="background-color: #fff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-4">BGMI- NSDA Training Program Form</h2>
                <!-- <h3 class="fw-bold display-6">50% off</h3> -->
                <p class="text-muted" style="line-height:1.6; font-size:16px;">
                    জাতীয় দক্ষতা উন্নয়ন কর্তৃপক্ষ (NSDA) অনুমোদিত <strong>আন্তর্জাতিক মানের</strong> <br>
                    <strong>Graphics Design Level-3</strong> ও <strong>Web Design & Development Level-3</strong> <br>
                    সরকারি সার্টিফিকেশন এর <strong>অ্যাসেসমেন্ট শুরু হচ্ছে</strong>। <br><br>
                    ভর্তি এবং যেকোনো তথ্যের জন্য যোগাযোগ করুন: <br>
                    <strong class="display-5">BGMI</strong> <br>
                    বাড়ি ০২, রোড ১১, সেক্টর ০৬, উত্তরা, ঢাকা <br>
                    <strong>মোবাইল:</strong> 01841562677, 01787226675 <br>
                    <strong>ওয়েবসাইট:</strong> <a href="http://www.bgmit.com" target="_blank" style="color:#007bff; text-decoration:none;">www.bgmit.com</a>
                </p>

            </div>

            <form action="admission_store.php" method="POST" id="admission-form" class="row g-4 shadow p-4 rounded-4" style="background-color: #f8f9fa;" enctype="multipart/form-data">


                <!-- Course -->
                <div class="col-md-12">
                    <label for="course" class="form-label">Choose Your Course</label>
                    <select class="form-select" id="course" name="course" required>
                        <option selected disabled value="">-- Select Course --</option>
                        <option value="Graphics-Design">Graphics Design</option>
                        <option value="Web-Design-and-Development">Web Design & Development</option>
                    </select>
                </div>



                <!-- Name -->
                <div class="col-md-4">
                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="user_name" required>
                </div>
                <!-- Fatehr Name -->
                <div class="col-md-4">
                    <label for="father_name" class="form-label">Fatehr's Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="father_name" name="father_name" required>
                </div>
                <!-- Mother Name -->
                <div class="col-md-4">
                    <label for="mother_name" class="form-label">Mother's Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="mother_name" name="mother_name" required>
                </div>
                <!-- Email -->
                <div class="col-md-4">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="user_email" required>
                </div>
                <!-- Mobile -->
                <div class="col-md-4">
                    <label for="mobile" class="form-label">Mobile No. <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="mobile" name="user_mobile" required>
                </div>
                <!-- DOB -->
                <div class="col-md-4">
                    <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <!-- Present Address -->
                <div class="col-md-6">
                    <label for="present-address" class="form-label">Present Address <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="present-address" name="present_address" rows="3" required></textarea>
                </div>
                <!-- Permanent Address -->
                <div class="col-md-6">
                    <label for="permanent-address" class="form-label">Permanent Address <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="permanent-address" name="permanent_address" rows="3" required></textarea>
                </div>
                     
                
                <!-- Qualification -->
                <div class="col-12">
                    <label class="form-label d-block">Academic Qualification</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="qualification" id="ssc" value="SSC" required>
                        <label class="form-check-label" for="ssc">SSC</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="qualification" id="hsc" value="HSC" required>
                        <label class="form-check-label" for="hsc">HSC</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="qualification" id="honors" value="Honors" required>
                        <label class="form-check-label" for="honors">Honors</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="qualification" id="masters" value="Masters" required>
                        <label class="form-check-label" for="masters">Masters</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="qualification" id="others" value="Others" required>
                        <label class="form-check-label" for="others">Others</label>
                    </div>
                    <!-- Dynamic input for "Others" -->
                    <div id="otherQualificationDiv" class="mt-2" style="display:none;">
                        <input type="text" class="form-control" id="otherQualificationInput" name="otherQualificationInput" placeholder="Please specify">
                    </div>
                </div>

                <!-- Message -->
                <div class="col-12">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                </div>

                <!-- Photo -->
                <div class="col-md-12">
                    <label class="form-label fw-bold">Student Photo <span class="text-danger">*</span></label>

                    <!-- Drag & Drop Box -->
                    <div id="dropArea" class="upload-box p-4 rounded-3 mb-2">
                        <input type="file" id="photo" name="photo" accept="image/*" hidden required>

                        <div id="uploadText" class="text-center">
                            <i class="bi bi-cloud-arrow-up fs-1 text-warning"></i>
                            <p class="mb-1 fw-semibold">Drag & drop photo here</p>
                            <p class="text-muted small">or click to browse</p>
                        </div>

                        <img id="photoPreview" class="img-preview" style="display:none;">
                    </div>

                    <small class="text-muted">Allowed formats: JPG, PNG, WEBP • Max size: 2MB</small>
                </div>



                <!-- Submit -->
                <div class="col-12 text-center">
                    <button type="submit" id="submitBtn" class="btn btn-warning px-5 py-2 fw-bold rounded-pill" onclick="return confirm('Are you sure you want to appy this course?')">Apply</button>
                </div>
            </form>
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

    // other's input field show
    const othersRadio = document.getElementById('others');
    const otherDiv = document.getElementById('otherQualificationDiv');
    const radios = document.querySelectorAll('input[name="qualification"]');

    radios.forEach(radio => {
        radio.addEventListener('change', () => {
            if(othersRadio.checked){
                otherDiv.style.display = 'block';
                document.getElementById('otherQualificationInput').setAttribute('required', 'required');
            } else {
                otherDiv.style.display = 'none';
                document.getElementById('otherQualificationInput').removeAttribute('required');
            }
        });
    });

    const dropArea = document.getElementById("dropArea");
    const fileInput = document.getElementById("photo");
    const preview = document.getElementById("photoPreview");
    const uploadText = document.getElementById("uploadText");

    // Click to upload
    dropArea.addEventListener("click", () => fileInput.click());

    // Drag events
    ["dragenter", "dragover"].forEach(event => {
        dropArea.addEventListener(event, e => {
            e.preventDefault();
            dropArea.classList.add("dragover");
        });
    });

    ["dragleave", "drop"].forEach(event => {
        dropArea.addEventListener(event, e => {
            e.preventDefault();
            dropArea.classList.remove("dragover");
        });
    });

    // Drop file
    dropArea.addEventListener("drop", e => {
        const file = e.dataTransfer.files[0];
        handleFile(file);
    });

    // File select
    fileInput.addEventListener("change", () => {
        handleFile(fileInput.files[0]);
    });

    function handleFile(file) {
        if (!file) return;

        // Max 2MB
        if (file.size > 2 * 1024 * 1024) {
            alert("Photo size must be less than 2MB");
            fileInput.value = "";
            preview.style.display = "none";
            uploadText.style.display = "block";
            return;
        }

        // Only image
        if (!file.type.startsWith("image/")) {
            alert("Please upload an image file");
            fileInput.value = "";
            return;
        }

        const reader = new FileReader();
        reader.onload = () => {
            preview.src = reader.result;
            preview.style.display = "block";
            uploadText.style.display = "none";
        };
        reader.readAsDataURL(file);
    }
    </script>
    
</body>

</html>