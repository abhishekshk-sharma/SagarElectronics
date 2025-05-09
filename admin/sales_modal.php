<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Sales History
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Sales</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <div class="pull-right">
                                    <form method="POST" class="form-inline" action="sales_print.php">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right col-sm-8" id="reservation"
                                                name="date_range">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm btn-flat" name="print"><span
                                                class="glyphicon glyphicon-print"></span> Print</button>
                                    </form>
                                </div>
                            </div>
                            <div class="box-body">
                                <?php
                                    if(isset($_GET['id']))
                                    {
                                        
                                        $con=mysqli_connect("localhost","root","","ecomm");

                                        $sid=$_GET['id'];
                                        $query="SELECT * FROM `sales` WHERE `id`='$sid'";
                                        $result=mysqli_query($con,$query);
                                        $row=mysqli_fetch_assoc($result);
                                    }
                                ?>
                                <form action="sales_update.php" method="POST">

                                    <input type="textbox" value="<?php echo $row['order_status'] ?>" name="orderstatus">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="sid">
                                    <button type="submit" name="editstatus"
                                        class="btn btn-edit btn-success btn-sm btn-flat">Edit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php include 'includes/footer.php'; ?>

        <?php include 'includes/sales_modal.php'; ?>


    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <!-- Date Picker -->
    <script>
    $(document).ready(function() {
        $('.editbtn1').on('click', function() {
            $('#editmodal').modal('show');
        });

    });
    </script>

</body>

</html>