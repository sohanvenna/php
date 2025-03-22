<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passport = trim($_POST["passport"]);
    $applyCountry = trim($_POST["applyCountry"]);
    
    if (empty($passport) || empty($applyCountry)) {
        echo "<p style='color: red;'>All fields are required!</p>";
        exit();
    }
    
    if (strlen($passport) < 8 || strlen($passport) > 10) {
        echo "<p style='color: red;'>Invalid passport number!</p>";
        exit();
    }
        echo "<p style='color: green;'>Visa application for $applyCountry submitted successfully! Your passport number: $passport</p>";
}
?>
