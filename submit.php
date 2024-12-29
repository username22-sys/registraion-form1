<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $course = $_POST["course"];
    $comments = $_POST["comments"];

    echo "<h1>Registration Details</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Comments:</strong> " . ($comments ?: "N/A") . "</p>";
} else {
    echo "Invalid request!";
}
?>
