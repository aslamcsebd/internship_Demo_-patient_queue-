
	<?php
session_start();
if(isset($_SESSION['email']))
echo " ";
else
{
header("location:../index.php");

}


?>


<!doctype html>
<html lang="en">
<head>


    <style>
        /* Paste this css to your style sheet file or under head tag */
        /* This only works with JavaScript,
        if it's not present, don't show loader */
        .no-js #loader {
            display: none;
        }

        .js #loader {
            display: block;
            position: absolute;
            left: 100px;
            top: 0;
        }

        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");

        });
    </script>

    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet"/>
</head>
<body>


<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">


        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Admin Panel
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li>
                    <a href="view_patient.php">
                        <i class="pe-7s-plus"></i>
                        <p>View Patient</p>
                    </a>
                </li>


                <li class="active">
                    <a href="view_doctor.php">
                        <i class="pe-7s-plus"></i>
                        <p>View Doctor</p>
                    </a>
                </li>


                <li >
                    <a href="view_diagnostic.php">
                        <i class="pe-7s-plus"></i>
                        <p>View Diagnostic</p>
                    </a>
                </li>




                <li>
                    <a href="logout.php">
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">

                    </ul>
                </div>
            </div>


        </nav>


        <div class="container">
            <?php

         
            include('db_connect.php');
			
			$cell=$_GET['cell'];

            $result = mysqli_query($con,"SELECT * FROM doctors_info where dr_cell='$cell' ");

            $row = mysqli_fetch_array($result);
            ?>


        
            <br>
            <div class="col-md-12" align="justify">
			
			<h3 align='center'> Doctor Details</h3>
                <table class="table table-hover table-bordered">

                    <tbody>
                    <tr>
                        <td><font color="black"><b>Name</b></td>
                        <td><font color="black">:</td>
                        <td>Dr. <font color="black"><?php echo $row['dr_name'] ?></font></td>
                    </tr>

                    <tr>
                        <td><font color="black"><b>Gender</b></td>
                        <td><font color="black">:</td>
                        <td><font color="black"><?php echo $row['dr_gender'] ?></font></td>
                    </tr>
                    <tr>
                        <td><font color="black"><b>Speciality</b></td>
                        <td><font color="black">:</td>
                        <td><font color="black"><?php echo $row['dr_speciality'] ?></td>
                    </tr>

                    <tr>
                        <td><font color="black"><b>Degree</b></font></td>
                        <td><font color="black">:</td>
                        <td><font color="black"><?php echo $row['dr_degree'] ?></td>
                    </tr>
					
					
					 <tr>
                        <td><font color="black"><b>Address</b></font></td>
                        <td><font color="black">:</td>
                        <td><font color="black"><?php echo $row['dr_address'] ?></td>
                    </tr>


                     <tr>
                        <td><font color="black"><b>Time</b></font></td>
                        <td><font color="black">:</td>
                        <td><font color="black"><?php echo $row['dr_time'] ?></td>
                    </tr>
					
					
					 <tr>
                        <td><font color="black"><b>Cell</b></font></td>
                        <td><font color="black">:</td>
                        <td><font color="black"><?php echo $row['dr_cell'] ?></td>
                    </tr>
                    
					
					 <tr>
                        <td><font color="black"><b>Fee</b></font></td>
                        <td><font color="black">:</td>
                        <td>Tk. <font color="black"><?php echo $row['dr_fee'] ?></td>
                    </tr>
					

					


					

					
					
					 <tr>
                        <td><font color="black"><b>View Active Appointment</b></font></td>
                        <td><font color="black">:</td>
						
						<?php
						  echo "<td><a class='btn btn-success btn-fill pull-center'  href=\"view_appointment.php?cell=" . $row['dr_cell'] . "\" >View Appointment</a></td>";
						?>
                     
                    </tr>
                    </tbody>
                </table>

                


            </div>

        </div>


    </div>

</div>


</body>



<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>



<script type="text/javascript">
    $(document).ready(function () {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to  Admin Panel."

        }, {
            type: 'info',
            timer: 4000
        });

    });
</script>

</html>
