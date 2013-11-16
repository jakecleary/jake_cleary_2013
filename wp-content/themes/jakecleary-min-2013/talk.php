<?php

/**
*
*	@package JC.MIN.2K13
*
* Template Name: Talk
*
*/

get_header();

// Check to see if the form was filled out and then 
// assign the inputted data to friendly variables
if ( isset( $_POST['submitted'] ) ) {
	if ( $_POST['name'] )
		$name = trim( $_POST['name'] );
	if ( $_POST['email'] )
		$email = trim( $_POST['email'] );
	if ( $_POST['text'] )
		$text = trim( $_POST['text'] );

	// Set up the email content and header
	$to = bloginfo( 'admin_email' );
	$subject = "$name has contacted you through jakecleary.net.";
	$message = "From $name, \n\n$text";
	$headers = "From: $name <$email>";

	// Send the email
	wp_mail( $to, $subject, $message, $headers );
	$email_sent = true;
}

?>

<div class="primary-content" role="main">

	<?php

	if ( $email_sent == true )
		echo '<p>Email sent!</p>';

	?>

	<form id="talk" action="" method="post">
		<input type="text" id="name" name="name" placeholder="Name" autofocus>
		<input type="text" id="email" name="email" placeholder="Email">
		<textarea name="text" id="text" placeholder="Stuff" rows="5"></textarea>
		<input type="hidden" id="submitted" name="submitted" value="submitted">
	</div>
</div>

<?php

get_footer(); 

?>