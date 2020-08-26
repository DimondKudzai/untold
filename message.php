<?php
$name = $_POST["name"];
$message = $_POST["message"];
$email = $_POST["email"];


if (mail("diamondkudzai70@gmail.com", "About The Untold Stories", $message, "From:$email\r\n")) {
	echo "<div>$name your message was sent succefully. <a href='index.html'>Go Back</a></div>";
   mail($email, "The Untold Stories automatic reply", "Hello this is Untold Stories.We received your email.Please kindly wait for your reply which is coming as soon as possible.", "From:diamondkudzai70@gmail.com\r\n");

} else {
	echo "<div style='font-family:Times;'>$name your message failed to sent <a href='index.html#/contact'>try again</a></div>";
}

?>