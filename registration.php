<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body>
    <div class="wrapper " >
      <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>

        <div class="container-fluid my-3">
            <h2 class="text-center">New user Registrantion</h2>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-18 col-xl-20">
                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- username field -->
                        <div class="form-outline mb-4">
                            <label for="user_username" class="form-label">First Name</label>
                            <input type="text" id="user_username" class="form-control" placeholder="Enter your First Name"
                                autocomplete="off" required="required" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" name="user_username">
                        </div>
                        <div class="form-outline mb-4">
                            <label for="user_username" class="form-label">Last Name</label>
                            <input type="text" id="user_username" class="form-control" placeholder="Enter your Last Name"
                                autocomplete="off" required="required" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>">
                        </div>
                        <!-- email field -->
                        <div class="form-outline mb-4">
                            <label for="user_email" class="form-label">Email</label>
                            <input type="text" id="user_email" class="form-control" placeholder="Enter your email"
                                autocomplete="off" required="required" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" name="user_email">
                        </div>
                        <!-- password field -->
                        <div class="form-outline mb-4">
                            <label for="user_password" class="form-label">Password</label>
                            <input type="Password" id="user_password" class="form-control" placeholder="Password"
                                autocomplete="off" required="required" name="user_password">
                        </div>
                        <!-- confirm password field -->
                        <div class="form-outline mb-4">
                            <label for="conf_user_password" class="form-label"> Conferm Password</label>
                            <input type="Password" id="conf_user_password" class="form-control"
                                placeholder=" Confirm Password" autocomplete="off" required="required"
                                name="conf_user_password">
                        </div>
                            <div class="text-cneter">
                            <input type="submit" value="Register" class="bg-info py-2 px-3 border-0 "
                                name="user_registration">
                        </div>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ? <a href="login.php"
                                class="text-dnager">Login</a></p>
                                <a href="index.php"><i class="fa fa-home"></i> Home</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>

