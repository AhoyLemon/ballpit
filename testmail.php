<?php
// Add your name between quotes
$from_name = "Ball Pit";
// Add the origin email address between quotes (the same email you set in SMF's Webmaster email address)
$from_email = "noreply@ballp.it";
$headers = "From: $from_name <$from_email>";
// You are free to change the body and subject of the test email in the next lines, but the default should work fine
$body = "Hi, \nThis is a test mail from $from_name <$from_email>.";
$subject = "Test mail from localhost";
// Add the destination email address between quotes (the recipient of the test email)
$to = "lemon@thefpl.us";
// When running the script, you will see in your browser "Success!" or "Fail...", depending on whether the test was successful or not. DON'T CHANGE THIS
if (mail($to, $subject, $body, $headers)) {
   echo "Success!";
} else {
   echo "Fail…";
}
?>