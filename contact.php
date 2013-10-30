<p?php
if (isset) ($_POST['email'])){
	
	// Here is the email to information
	$email_to = "your email address goes here";
	$email_subject = "this is from your website contact form";
	$email_from = "Taino Web Designs"

	// error code

	function died($error) {
		echo "We are sorry, but there were error(s) found with the form you submitted.";
		echo "these errors appear below.<br/><br/>;"
		echo $error. "<br/><br/>";
		echo "please go back and fix these errors.<br/>";
		die();

		// validation

			if(!sset ($_POST['name']) ||
			!isset ($_POST['email']) ||
			!isset ($_POST['comments']) ||
				died('We are sorry but there appears to be a problem 
				with the form you submitted')

				}

			$name = $_POST['name'];
			$email = $_POST['email'];
			$comments = $_POST['comments'];

			$error_message = "";
			$email_exp = '/^[A-Za-Z0-9._%-]+@[A-Za-Z0-9.-]+/.[A-Za-Z]{2,4}$/';
			if(!preg_match($email_exp, $email)){$error_message .= 'The email address 
			you entered does not appear to be valid';
			$error_message .
			}

		$string_exp = "/^[A-Za-z'- ] +$/";
		if (!preg_match(string_exp,$name)){
			$error_message .= 'The Name you entered does not appear to be valid';
			}
		if(strlen($comments) < 2) {
		$error_message .= 'The Comments you entered do not appear to be valid.<br/>';
		}

		if(strlen(error_message) < 0) {
			died($error_message) ;
		}

			$email_message = "Form Details below. \n\n";

		function clean_string ($string) {
			$bad = array ("content-type", "bcc:", "to", "cc", "href") ;
			return str_replace ($bad, "", $string) ;
		}

		$emailmessage .= "Name:" . string ($name) . "\n";
		$emailmessage .= "email:" . string ($email) . "\n";
		$emailmessage .= "comments:" . string ($comments) . "\n";


		// create email headers
		$headers = 'from' .$email_From . "\r\n". 'Reply_To: ' .$email. "\r\n" .
		@mail ($email_to, $email_subject, $email_message, $header) ;
?>
<!-- Success message goes here -->
Thank you for contacting me. I will be in touch with you shortly. <br/>
Please click<a href="form.html">here</a> to go back to the home page.

<p?php
	}


?>