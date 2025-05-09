<?php
    include('includes/session.php');
    $con=mysqli_connect("localhost","root","","ecomm");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $body=$_POST['body'];
        
           
				$subject = "New Email From Contact us!";
            	$message = "You get this message from: $name
                

email:$email,
            $body";
            	$sender = "From: sagarelectronics757@gmail.com";
            	mail("sagarelectronics757@gmail.com", $subject, $message, $sender);
           
            $_SESSION['success'] = 'Message Sent successfully! We soon contact you if any issue found.';
            header('location: contactus.php');
        
    }
    else{
        $_SESSION['error'] = 'Something went wrong!';
            header('location: contactus.php');
    }

?>