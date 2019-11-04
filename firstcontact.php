<?php
    if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['mobile'];
		

		$to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Auriga';
		$message="Name :".$name."\n"."Phone :".$phone."\n";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
		
		
	}
?>


