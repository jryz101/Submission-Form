<?php

if(isset($_POST['submit'])) {

	$minimumLetterUsername = 12;
	$maximumNumberPassword = 12;

	$username = $_POST['fullname'];
	$email    = $_POST['email'];
	$contact  = $_POST['contact'];
	$address  = $_POST['address'];

if (strlen($username) < $minimumLetterUsername) {

	echo "Full name has to be longer than 15 letters. Please try again.";

}else{

	echo "Data successfully proccessed. You account details are: ";
	echo "<br> ";
	echo "Your full name is " . $username;
	echo "<br> ";
	echo "Your email address is " . $email;
	echo "<br> ";
	echo "Your contact number is " . $contact;
	echo "<br> ";
	echo "Your address is " . $address;

	}

}

?>
