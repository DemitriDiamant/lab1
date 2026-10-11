
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Request Received!</h1>";
    echo "<p>Your tutoring request was received successfully.</p>";
    echo '<a href="index.html">Return to Home</a>';
} else {
    echo "Please submit the tutoring request form first.";
}
?>
