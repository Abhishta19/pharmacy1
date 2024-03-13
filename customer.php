<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Medicine</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="addcompany.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       <center> <h1><b>QuickRelief Pharmacy</b></h1>
        <h6><b> "Empowering Health, Enriching Lives: Your Trusted Pharmaceutical Partner"</b></h6></center>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">QuickRelief Pharmacy </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="home.php">Change medicine details <span class="sr-only">(current)</span></a>
               </li>
                <li class="nav-item">
                <a class="nav-link" href="deletemedicine.php">Remove medicines</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="viewmedicine.php">View Medicine</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="medicinedashboard.php">Medicine Dashboard</a>
                </li>
                
             </ul>
          </div>
        </nav>
</head>
<body><div class="container">
    <h1><center>Customer Details</center></h1>
    <form action="customer.php" method="post">
    <!--c_id:
    <input type="number" name="c_id">--><form action="" method="post">
    <label for="custname">Customer Name:</label><br><br>
    <input type="text" name="custname" id="custname" required>
    <br><br>
    <label for="number"> Phone Number:</label><br><br>
    <input type="number" name="phone" maxlength="10" id="number" required>
    <br><br>
   <label for="address">Address</label><br><br>
    <input type="text" name="address" id="address" required>
    <br><br>
    <!--<label for="salesx">Sales_ex:</label><br><br>
    <input type="text" name="sales_ex" id="salesx" required>
    <br><br>-->
   <label for="email">email:</label><br><br>
    <input type="email" name="email" id="email" required>
    <br><br>
   
    <input type="submit" name="addcustomer" value="Add Customer">

   <!-- s_id
    <input type="number" name="staff_id">
    <br><br><br>-->
</form></div>
</body>
</html>
<?php
    require "dbconfig/db.php";
   // include "header.php";
 /*  session_start();
   $s_id = $_SESSION['s_id'];
   echo $s_id;
           $_SESSION['s_id'] = $s_id;*/
        if(isset($_POST['addcustomer']))
        {
               // echo '<script type ="text/javascript"> alert("Sign up button clicked") </script>';
              //$c_id = mysqli_real_escape_string($con, $_REQUEST['c_id']);
              $custname = mysqli_real_escape_string($con, $_REQUEST['custname']);
              $phone= mysqli_real_escape_string($con, $_REQUEST['phone']);
              $address = mysqli_real_escape_string($con, $_REQUEST['address']);
              $email = mysqli_real_escape_string($con, $_REQUEST['email']);
             // $phone = mysqli_real_escape_string($con, $_REQUEST['phone']);
             // $s_id = mysqli_real_escape_string($con, $_REQUEST['staff_id']);
                             
                
                    $query="INSERT INTO customer (cust_name,phone,address,email)  VALUES ('$custname' ,'$phone' , '$address' , '$email');";
                    $query_run =mysqli_query($con,$query);
                    if($query_run===TRUE)
                    {
                            echo '<script type ="text/javascript"> alert("Company details added successfuly ....") </script>';
                           // header('location:Company.php');

                        }
                   else
                   { 
                    echo '<script type ="text/javascript"> alert("Company details  not added successfuly ....") </script>';
                   }
                   
                    
                
                
            }
?>