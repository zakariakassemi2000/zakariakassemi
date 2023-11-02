<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $to = "your-email@example.com"; // Replace with your email address
    $subject = $subject;
    $email_body = "You have received a new message from $name ($email):\n\n$message";

    $headers = "From: $email";

    // Check if all the fields are filled
    if ($name != '' && $email != '' && $subject != '' && $message != '') {
        // Send email
        mail($to, $subject, $email_body, $headers);
        echo "Email sent successfully!";
    } else {
        echo "Please fill in all the fields.";
    }
}
?>
