<?php
//============================================================================
include "connect.php";
session_start();
if(!isset($_SESSION['admin'])){  // Assuming 'admin' session is used for warden as well
    header('location:logout.php');
    exit;
}
//============================================================================

$parentContact = '';
$whatsappLink = '';
$studentName = '';
$status = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollnumber = $_POST['rollnumber'];

    $stmt = $connect->prepare("SELECT studentname, `father/guardiannumber` FROM student_details WHERE rollnumber = ?");
    $stmt->bind_param("s", $rollnumber);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();

    if ($student) {
        $studentName = $student['studentname'];
        $parentContact = $student['father/guardiannumber'];
        $cleanNumber = preg_replace('/\D/', '', $parentContact);
        $whatsappLink = "https://wa.me/91" . $cleanNumber;
    } else {
        $status = "Student not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parent Contact via WhatsApp</title>
</head>
<body>
    <h2>Contact Student's Parent (Warden Access Only)</h2>
    <form method="POST">
        <label for="rollnumber">Select Roll Number:</label>
        <select name="rollnumber" required>
            <option value="">-- Select --</option>
            <?php
            $result = mysqli_query($connect, "SELECT rollnumber, studentname FROM student_details ORDER BY studentname ASC");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['rollnumber']}'>{$row['studentname']} ({$row['rollnumber']})</option>";
            }
            ?>
        </select>
        <br><br>
        <button type="submit">Show Contact</button>
    </form>

    <?php if (!empty($parentContact)) : ?>
        <hr>
        <h3>Parent Contact for <?php echo htmlspecialchars($studentName); ?>:</h3>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($parentContact); ?></p>
        <p><strong>WhatsApp:</strong> 
            <a href="<?php echo $whatsappLink; ?>" target="_blank"><?php echo $whatsappLink; ?></a>
        </p>
    <?php elseif (!empty($status)) : ?>
        <p><strong><?php echo $status; ?></strong></p>
    <?php endif; ?>
</body>
</html>
