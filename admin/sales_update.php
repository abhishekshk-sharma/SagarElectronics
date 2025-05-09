<?php
    include('includes/session.php');
    $con=mysqli_connect("localhost","root","","ecomm");
    if(isset($_POST['editstatus'])){
        try{
            $id=mysqli_real_escape_string($con,$_POST['sid']);
            $status=mysqli_real_escape_string($con,$_POST['orderstatus']);
            $query="UPDATE `sales` SET `order_status`='$status' WHERE `id`='$id'";
            $run=mysqli_query($con,$query);
            if($run){
               echo $_SESSION['success'] = 'Order Status updated Successfully! Thank you.';
            }else{
                $_SESSION['error'] = 'Something went wrong. Please try again.';
            }
            $_SESSION['success'] = 'Order updated successfully';
            header('location: sales.php');
        }catch(Exception $e){
            $_SESSION['error'] = $e->getMessage();
            header('location: sales.php');
        }
    }

?>