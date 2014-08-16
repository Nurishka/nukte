<?php

// Define some constants
define( "RECIPIENT_NAME", "Nurym Kudaibergen" ); //UPDATE THIS TO YOUR NAME
define( "RECIPIENT_EMAIL", "nurim98@gmail.com" ); //UPDATE THIS TO YOUR EMAIL ID
define( "EMAIL_SUBJECT", "Email of a person for nukte updates" ); //UPDATE THIS TO YOUR SUBJECT

// Read the form values
$success = false;
$senderName = "Person for updates";
$senderEmail = "nurim98@gmail.com";
$original_message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";
$message = 'Name: '.$senderName.'<br/>Email: '.$senderEmail.'<br/>Message: '.$original_message;

// If all values exist, send the email
if ( $senderName && $senderEmail && $message ) {
	// Open the text file
	$f = fopen("textfile.txt", "w");

	// Write text line
	fwrite($f, $original_message); 

	// Close the text file
	fclose($f);

	// Open file for reading, and read the line
	$f = fopen("textfile.txt", "r");
	echo fgets($f); 

	fclose($f);
}

if ( $success )
{
	echo "ugkjlkj;lj;k;lk;";
}
else
{
	echo "<h1>There was a problem sending your message. Please try again.</h1>";
}
?>


