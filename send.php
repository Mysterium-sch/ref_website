<!DOCTYPE html>
<html>
<?php
    $email=$_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["name"] . "Sent this email" . "\r\n" . $_POST["feedback"] . "Sent from this email address:" . $_POST["email"];
    mail("lamblily90@gmail.com", $subject, $message);
    //header("Location: index.html");
?>
Error, please contact MSOA at (midstatesoccerassociation@gmail.com) <br>
email: <?php echo $email ?> <br>
subject: <?php echo $subject ?> <br>
message: <?php echo $message ?> <br>
</html>
