<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display.css">
    <title>Form Submission Result</title>
</head>
<body>
    <section>
        <div class="container">
        <h1>Customer Profile Details</h1>
        <hr />

        <?php
        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lasttName"]; // Correct the typo in the HTML
            $areaCode = $_POST["areaCode"];
            $phone = $_POST["phone"];
            $cellAreaCode = $_POST["cellAreaCode"];
            $cellPhone = $_POST["cellPhone"];
            $faxAreaCode = $_POST["faxAreaCode"];
            $faxPhone = $_POST["faxPhone"];
            $email = $_POST["email"];

            // Display the collected data
            echo "<p><strong>Full Name:</strong> $firstName $lastName</p>";
            echo "<p><strong>Phone Number:</strong> ($areaCode) $phone</p>";
            echo "<p><strong>Cell Number:</strong> ($cellAreaCode) $cellPhone</p>";
            echo "<p><strong>Fax Number:</strong> ($faxAreaCode) $faxPhone</p>";
            echo "<p><strong>Email Address:</strong> $email</p>";
        } else {
            echo "<p>The form was not submitted. Please go back and fill out the form.</p>";
        }
        ?>
        </div>
    </section>
</body>
</html>

