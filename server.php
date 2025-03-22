<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $passport = trim(htmlspecialchars($_GET["passport"]));
    $country = trim(htmlspecialchars($_GET["applyCountry"]));
   
    if (empty($passport) || empty($country)) {
        echo "<p style='color: red;'>All fields are required!</p>";
        exit;
    }
   
    if (strlen($passport) < 8 || strlen($passport) > 10) {
        echo "<p style='color: red;'>Invalid passport number!</p>";
        exit;
    }
   
    $visaMessages = [
        "USA" => "Visa required for most applicants.",
        "Canada" => "Visa required unless you have an eTA.",
        "India" => "Visa required before travel.",
        "UK" => "Visa depends on the duration of stay.",
        "Australia" => "eVisa available for eligible travelers."
    ];
   
    if (array_key_exists($country, $visaMessages)) {
        echo "<p style='color: green;'>Visa application submitted successfully!<br>{$visaMessages[$country]}</p>";
    } else {
        echo "<p style='color: red;'>Invalid country selection.</p>";
    }
}
?>
