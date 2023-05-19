<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'ahmedmanaour990@gmail.com';
    $subject = 'New Form Submission';
    
    // Gather form data
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $address = $_POST['address'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Build email content
    $body = "First Name: $firstName\n";
    $body .= "Last Name: $lastName\n";
    $body .= "Address: $address\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message: $message\n";
    
    // Set additional headers
    $headers = "From: $email\r\n";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'There was an error sending the email.';
    }
}
?>
