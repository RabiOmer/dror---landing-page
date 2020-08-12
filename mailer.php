<?php





global $_GET;
	// security and parsing
 
		
	if (! key_exists ( 'name', $_GET )&&! key_exists ( 'mail', $_GET ) && ! key_exists ( 'phone', $_GET )){
		echo 'fail';
		die (); // bad request
	}

	
	
	
 	$name=$_GET ['name'];
 	$mail =$_GET ['mail'];
	$phone=$_GET ['phone'];
	$tr='';
	

$message= '<br/><b>Full Name:</b><br/>'.$name.
					'<br/><b>Email:</b><br/>'.$mail.
					'<br/><b>Phone:</b><br/>'.$phone.'<br>'.
$tr.=date('d/m/Y H:i',time()).',';


		
//$to='on@exactive.co.il‏,liran@exactive.co.il,erink@post.tau.ac.il,rebash@tauex.tau.ac.il';
$to='omer.rabi93@gmail.com';
 
$subject = 'A new form filled - on S.U.N land page ';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'To: dontreply<omer.rabi93@gmail.com>' . "\r\n";
$headers .= 'From: dontreply <omer.rabi93@gmail.com>' . "\r\n";
$headers .= 'Reply-To: dontreply <omer.rabi93@gmail.com>'. "\r\n";
@mail($to, $subject, $message, $headers);
 
  echo (true); //Boring error messages from anything else!
die();
 