<?php
if(isset($_POST['submit'])){
    $to = "karthik.rosario@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $number = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['note'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['note'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
