<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method Not Allowed');
}

// DB connection
require_once "db.php"; // include connection

/* ======================
   PHOTO UPLOAD
====================== */
$photoName = "";
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $allowed = ['jpg','jpeg','png','webp'];
    $ext = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) die("Invalid image format");
    if ($_FILES['photo']['size'] > 2*1024*1024) die("Image size must be < 2MB");

    $uploadDir = __DIR__ . "/uploads/"; // full path
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

    $photoName = time() . "_" . uniqid() . "." . $ext;

    $moved = move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir . $photoName);
    if (!$moved) die("Failed to move uploaded file. Check folder permissions.");
}

/* ======================
   FORM DATA
====================== */
$course = $_POST['course'];
$full_name = $_POST['user_name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$email = $_POST['user_email'];
$mobile = $_POST['user_mobile'];
$dob = $_POST['dob'];
$present_address = $_POST['present_address'];
$permanent_address = $_POST['permanent_address'];
$qualification = $_POST['qualification'];
$message = $_POST['message'] ?? null;

// Others qualification
if ($qualification === 'Others' && !empty($_POST['otherQualificationInput'])) {
    $qualification = $_POST['otherQualificationInput'];
}

/* ======================
   INSERT DATA
====================== */
$sql = "INSERT INTO admissions
(course, full_name, father_name, mother_name, email, mobile, dob,
 present_address, permanent_address, qualification, message, photo)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ssssssssssss",
    $course,
    $full_name,
    $father_name,
    $mother_name,
    $email,
    $mobile,
    $dob,
    $present_address,
    $permanent_address,
    $qualification,
    $message,
    $photoName
);

if ($stmt->execute()) {
    echo "<script>
        alert('Admission form submitted successfully!');
        window.location='form.php';
    </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
