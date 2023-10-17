<?php
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "From: info@gcrea.in";
$headers .= "Reply-To: info@gcrea.in\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
    header("Location: contact.php?msg=success"); // Replace "/" with the actual URL you want to redirect to
    exit();
} else {
    echo "Email delivery failed.";
    header("Location: contact.php?msg=faild"); // Replace "/" with the actual URL you want to redirect to
    exit();
}
?>
