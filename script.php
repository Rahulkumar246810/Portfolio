<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
    $last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : "";
    $mobile_number = isset($_POST["mobile_number"]) ? $_POST["mobile_number"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";

    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    // Compose the email message
    $to = "2114rahulkumar@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $email_body = "First Name: $first_name\n"
                . "Last Name: $last_name\n"
                . "Mobile Number: $mobile_number\n"
                . "Email: $email\n"
                . "Message: $message";

    // Send the email
    if (mail($to, $subject, $email_body)) {
        echo "Form submitted successfully. Thank you!";
    } else {
        echo "An error occurred while processing the form. Please try again later.";
    }
}
?>
