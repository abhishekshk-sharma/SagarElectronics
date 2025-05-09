<?php include 'includes/session.php'; ?>
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
                            <section class="content">
                                <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
                                <h1 class="page-header">
                                    <p style="Display:inline">About us</p>
                                    <div class="about" style="Display:inline">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="16"
                                            fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11" />
                                        </svg>
                                    </div>
                                </h1>
                                <div class="box box-solid">
                                    <div class="box-body">


                                        <div class="box box-solid">
                                            <div class="box-body">

                                                <h3>
                                                    <p><b>
                                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                Sagar Electronics
                                                            </p>

                                                        </b>
                                                    </p>
                                                </h3>

                                                <br>
                                                <h4>
                                                    <p>

                                                        ● In our online website enable you to purchase our Machines in
                                                        various categories and protect your &nbsp;&nbsp;&nbsp;&nbsp;farm
                                                        from
                                                        wild
                                                        animals.<br>
                                                        ● We have a variety of machines that you can buy according to
                                                        your convenience.<br>
                                                        ● We will provide you various facilities even after purchasing
                                                        our
                                                        machines<br>
                                                        ● In our website you will get user friendly environment so that
                                                        you can easily fulfill your needs.<br>
                                                        ● We also provide you the facility of home delivery.<br>
                                                        ● Along with this, we also provide you customer support so that
                                                        you can easily get answer to any of &nbsp;&nbsp;&nbsp;&nbsp;your
                                                        questions.<br><br>
                                                    </p>
                                                </h4>

                                            </div>
                                        </div>
                                        <div style="display: flex;">
                                            <div class="box box-solid" style="width:48%">
                                                <div class="box-body">
                                                    <br>
                                                    <div>
                                                        <div>
                                                            <h4>
                                                                <p>
                                                                    <b>Founder name :</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    Sri Rambabu Sharma
                                                                </p>
                                                            </h4>
                                                        </div>
                                                        <div>
                                                            <h4>
                                                                <p>
                                                                    <b>Customer Care :</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    8048603397
                                                                </p>
                                                            </h4>
                                                        </div>
                                                        <div>
                                                            <h4>
                                                                <p>
                                                                    <b>Email id :</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    sagarelectronics757@gmail.com
                                                                </p>
                                                            </h4>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="box box-solid" style="width: 48%">
                                                <div class="box-body">
                                                    <br>
                                                    <h4>
                                                        <p>
                                                            <b>Address:</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                                            Shop No-C/1,SF,Maruti
                                                            Complex Opp, Naroda
                                                            Road, Memco,
                                                            Ahmedabad - 382345,
                                                            Gujarat,India.

                                                        </p>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>





                        </div>
                        <div class="col-sm-3">
                            <?php include 'includes/sidebar.php'; ?>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <?php $pdo->close(); ?>
        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>



</body>

</html>