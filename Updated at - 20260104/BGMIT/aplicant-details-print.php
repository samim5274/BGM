<?php
require_once "db.php";
if (!isset($_GET['id'])) {
    die("No student selected.");
}
$id = intval($_GET['id']);
$query = "SELECT * FROM admissions WHERE id = $id LIMIT 1";
$result = $conn->query($query);
if (!$result || $result->num_rows == 0) {
    die("Student not found.");
}
$row = $result->fetch_assoc();
$photo = (!empty($row['photo']) && file_exists('uploads/' . $row['photo'])) ? 'uploads/' . $row['photo'] : 'uploads/default.png';
$qualification = $row['qualification'] == "Others" ? $row['other_qualification'] : $row['qualification'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admission Form - <?= htmlspecialchars($row['full_name']) ?></title>
    <style>
        /* A4 Page Setup */
        @page {
            size: A4;
            margin: 0;
        }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .print-area {
            width: 210mm;
            height: 297mm;
            padding: 12mm 15mm; /* Reduced padding to fit 1 page */
            margin: auto;
            background: white;
            box-sizing: border-box;
            position: relative;
        }

        /* Header */
        .header-section {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #ffc107;
            padding-bottom: 10px;
        }
        .logo-box img {
            width: 80px;
            margin-right: 15px;
        }
        .title-box h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
            text-transform: uppercase;
        }

        .form-title {
            text-align: center;
            margin-bottom: 25px;
        }
        .form-title h2 {
            display: inline-block;
            font-size: 18px;
            color: #b08d00;
            border-bottom: 2px solid #b08d00;
            padding: 2px 10px;
            margin: 0;
        }

        /* Photo Box */
        .photo-container {
            position: absolute;
            top: 110px;
            right: 15mm;
            width: 110px;
            height: 130px;
            border: 1px solid #000;
            text-align: center;
        }
        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Form Fields */
        .info-group {
            margin-bottom: 12px; /* Tightened spacing */
            display: flex;
            align-items: baseline;
        }
        .info-group label {
            font-weight: bold;
            width: 160px;
            color: #444;
            font-size: 13px;
        }
        .info-group .data {
            flex: 1;
            border-bottom: 1px dotted #888;
            padding-left: 8px;
            font-size: 14px;
            color: #000;
            min-height: 18px;
        }

        .flex-row {
            display: flex;
            gap: 20px;
        }
        .flex-item {
            flex: 1;
        }

        /* Checkbox */
        .checkbox-wrap {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
        }
        .check-box {
            width: 30px;
            height: 16px;
            border: 1px solid #777;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            line-height: 14px;
            font-weight: bold;
        }

        .declaration {
            margin-top: 30px;
            font-size: 12px;
            line-height: 1.4;
            color: #555;
            font-style: italic;
        }

        /* Signatures */
        .footer-sig {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .sig-box {
            text-align: center;
            width: 180px;
        }
        .sig-line {
            border-top: 1px solid #000;
            margin-bottom: 5px;
        }
        .sig-box span { font-size: 13px; font-weight: bold; }
        .date-section {
            margin-top: 15px;
            font-size: 12px;
            text-align: left;
        }

        @media print {
            body { background: none; }
            .print-area { margin: 0; box-shadow: none; }
        }
    </style>
</head>
<body>

    <div class="print-area">
        <div class="header-section">
            <div class="logo-box">
                <img src="img/bgmibd.png" alt="Logo">
            </div>
            <div class="title-box">
                <h1>BGMI Training Institute</h1>
            </div>
        </div>

        <div class="form-title">
            <h2>Admission Form</h2>
        </div>

        <div class="photo-container">
            <img src="<?= $photo ?>" alt="Student Photo">
        </div>

        <div class="info-group" style="width: 70%;">
            <label>Course Name:</label>
            <div class="data"><strong><?= htmlspecialchars($row['course']) ?> Level-3</strong></div>
        </div>
        <div class="info-group" style="width: 70%;">
            <label>Duration:</label>
            <div class="data">3 Months (360 hours)</div>
        </div>

        <div class="info-group">
            <label>Full Name:</label>
            <div class="data"><?= htmlspecialchars($row['full_name']) ?></div>
        </div>
        <div class="info-group">
            <label>Father's Name:</label>
            <div class="data"><?= htmlspecialchars($row['father_name']) ?></div>
        </div>
        <div class="info-group">
            <label>Mother's Name:</label>
            <div class="data"><?= htmlspecialchars($row['mother_name']) ?></div>
        </div>

        <div class="info-group">
            <label>Present Address:</label>
            <div class="data"><?= htmlspecialchars($row['present_address']) ?></div>
        </div>
        <div class="info-group">
            <label>Permanent Address:</label>
            <div class="data"><?= htmlspecialchars($row['permanent_address']) ?></div>
        </div>

        <div class="flex-row">
            <div class="info-group flex-item">
                <label>Contact NO:</label>
                <div class="data"><?= htmlspecialchars($row['mobile']) ?></div>
            </div>
            <div class="info-group flex-item">
                <label>Email ID:</label>
                <div class="data"><?= htmlspecialchars($row['email']) ?></div>
            </div>
        </div>

        <div class="flex-row">
            <div class="info-group flex-item">
                <label>Date of Birth:</label>
                <div class="data"><?= date("d-M-Y", strtotime($row['dob'])) ?></div>
            </div>
            <div class="info-group flex-item">
                <label>Marital Status:</label>
                <div class="checkbox-wrap">
                    <span>Married <span class="check-box"></span></span>
                    <span>Single <span class="check-box">✓</span></span>
                </div>
            </div>
        </div>

        <div class="flex-row">
            <div class="info-group flex-item">
                <label>Gender:</label>
                <div class="checkbox-wrap">
                    <span>Male <span class="check-box">✓</span></span>
                    <span>Female <span class="check-box"></span></span>
                </div>
            </div>
            <div class="info-group flex-item">
                <label>Blood Group:</label>
                <div class="data">O+</div>
            </div>
        </div>

        <div class="info-group">
            <label>Academic Qualification:</label>
            <div class="data"><?= htmlspecialchars($qualification) ?></div>
        </div>

        <div class="info-group">
            <label>Work Experience:</label>
            <div class="data"><?= !empty($row['message']) ? htmlspecialchars($row['message']) : "N/A" ?></div>
        </div>

        <div class="declaration">
            I hereby acknowledge that I have read the BGMI catalog and agree to be bound by the rules of BGMI.
        </div>

        <div class="footer-sig">
            <div class="sig-box">
                <div class="sig-line"></div>
                <span>Signature of Student</span>
                <div class="date-section">Date: .........................</div>
            </div>
            <div class="sig-box">
                <div class="sig-line"></div>
                <span>Signature of Authority</span>
                <div class="date-section">Date: <?= date("d-M-Y") ?></div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function () {
            window.print();
            setTimeout(() => {
                window.close();
            }, 800);
        }
    </script>
</body>
</html>