<?php include 'includes/session.php'; ?>

<link rel="stylesheet" href="transinc.css">
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper">
            <div class="container">

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-9">
                            <?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
                            <?php
                        $amnt=$_POST['amt'];                        
                    ?>
                            <div class="container p-0">
                                <div class="card px-4">
                                    <p class="h8 py-3">Payment Details</p>
                                    <div class="row gx-3">
                                        <form action="sales.php" method="POST">
                                            <div class="col-12">
                                                <div class="d-flex flex-column">
                                                    <p class="text mb-1">Person Name</p>
                                                    <input class="form-control mb-3" type="text" placeholder="Name"
                                                        value="Barry Allen" require>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex flex-column">
                                                    <p class="text mb-1">Card Number</p>
                                                    <br>
                                                    <p class="text mb-1">1234 5678 435678</p>
                                                    <input class="form-control mb-3" type="text"
                                                        placeholder="1234 5678 435678" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex flex-column">
                                                    <p class="text mb-1">Expiry</p>
                                                    <input class="form-control mb-3" type="text" placeholder="MM/YYYY"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex flex-column">
                                                    <p class="text mb-1">CVV/CVC</p>
                                                    <input class="form-control mb-3 pt-2 " type="password"
                                                        placeholder="***" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class=" btn fas btn-primary mb-3" name="pay">
                                                    Pay <?php
                                                        echo $amnt
                                                    ?>Rs.
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="container p-0">
                                <div class="card px-4">
                                    <p class="h8 py-3">Cash on Delivery</p>
                                    <div class="row gx-3">
                                        <form action="sales.php" method="POST">

                                            <div class="col-12">
                                                <button type="submit" class=" btn fas btn-primary mb-3" name="pay">
                                                    Pay at the time of Delivery
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>

            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>

</html>