<?php
	include 'includes/session.php';

	if(isset($_POST['pay']))
	{
		$payid = rand(12345678,99999999);
		$date = date('Y-m-d');

		$conn = $pdo->open();

		try{
			
			$stmt = $conn->prepare("INSERT INTO sales (user_id, pay_id, sales_date) VALUES (:user_id, :pay_id, :sales_date)");
			$stmt->execute(['user_id'=>$user['id'], 'pay_id'=>$payid, 'sales_date'=>$date]);
			$salesid = $conn->lastInsertId();
			
			try{
				$stmt = $conn->prepare("SELECT * FROM cart LEFT JOIN products ON products.id=cart.product_id WHERE user_id=:user_id");
				$stmt->execute(['user_id'=>$user['id']]);

				foreach($stmt as $row){
					$stmt = $conn->prepare("INSERT INTO details (sales_id, product_id, quantity) VALUES (:sales_id, :product_id, :quantity)");
					$stmt->execute(['sales_id'=>$salesid, 'product_id'=>$row['product_id'], 'quantity'=>$row['quantity']]);
				}

				$stmt = $conn->prepare("DELETE FROM cart WHERE user_id=:user_id");
				$stmt->execute(['user_id'=>$user['id']]);

				$_SESSION['success'] = 'Transaction successful. Thank you.';
				$email="sagarelectronics757@gmail.com";
				$subject = "New Order!";
            	$message = "You have new order arrived. please, check the details. Transaction Id: $payid";
            	$sender = "From: sagarelectronics757@gmail.com";
            	mail($email, $subject, $message, $sender);

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
        $_SESSION['error'] = 'Access denied.';
    }
	
	header('location: profile.php');
	
?>