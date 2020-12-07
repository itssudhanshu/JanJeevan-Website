<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/index.css">
    <title>JanJeevan</title>
  <style>
    table {
		border: "4";
		line-height: 25px;
		width: 100%;
		color:  black;
		font-family: monospace;
		font-size: 15px;
		text-align: center;
	}
	th {
		background-color:  rgb(84, 84, 180);
		color: white;
	}
	tr:nth-child(even) {
		background-color: #f2f2f2;
	}
  </style>
</head>
<body>
<header class="header" id="home">
        <div class="container-fluid p-0 " id="myHeader">
            <nav class="navbar navbar-expand-lg fixed-top">
                <h5>JanJeevan</h5>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button type="button" class="btn"><a class="nav-link" href="home.html">Home</a></button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn"><a class="nav-link"  href="../html/doctor.html">Our_Doctors</a></button>
                        </li>
                        <li class="nav-item dropdown" id="itemhide">
                            <button class="btn"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Our_Patient
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item" href="doctor.html">Our_Doctors</a> -->
                                    <a class="dropdown-item" href="../html/patient.html">ADD_Patient</a>
                                    <a class="dropdown-item" href="viewpatient.php">View_Patient</a>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn"><a class="nav-link" href="../html/contact.html">Contact   Us</a></button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
</header>
<h1 align="center">PATIENT DETAILS</h1>
<table>
  <tr>
    <th>Id</th>
	<th>Patient Name</th>
	<th>Gender</th>
	<th>Address</th>
    <th>Email</th>
    <th>Phone Number</th>
	<th>Date Of Birth</th>
	<th>Blood Group</th>
	<th>Emergency Contact Name</th>
    <th>Relationship</th>
    <th>Emergency Phone Number</th>
	<th>Reason For Registration</th>
	<th>Additional Information</th>
	<th>Doctor Name</th>
    <th>Taking Any Medications Currently</th>
    <th>If Yes Please List It Here</th>

  </tr>
  
<?php
$conn = mysqli_connect("localhost", "root", "", "patient");
if ($conn-> connect_error) {
	die("Connection failed:". $conn-> connect_error);
}
    
$sql = "SELECT id, pname, gender, address, email, pnumber, dob, bgrp, ename, relationship, enumber, reason, addinfo, dname, yesno, info from addpatient";
$result = $conn-> query($sql);

if	($result-> num_rows >0) {
 while ($row = $result-> fetch_assoc()) {
    echo "<tr><td>". $row["id"] ."</td><td>". $row["pname"] ."</td><td>". $row["gender"] ."</td><td>". $row["address"] ."</td><td>". $row["email"] ."</td><td>". $row["pnumber"] ."</td><td>". $row["dob"] ."</td><td>". $row["bgrp"] ."</td><td>". $row["ename"] ."</td><td>". $row["relationship"] ."</td><td>". $row["enumber"] ."</td><td>". $row["reason"] ."</td><td>". $row["addinfo"] ."</td><td>". $row["dname"] ."</td><td>". $row["yesno"] ."</td><td>". $row["info"] ."</td></tr>"; 
 }
 echo "</table>";
}
else {
	echo "0 result";
}

$conn-> close();	
?>
</table>

<footer class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p class="tnc" style="text-align: center !important;">
                    © 2020 <a href="">Terms & Conditions - Privacy Policy</a>
                </p>
            </div>

            <div class="col-md-6 quaffle">
                <p class="teamline" style="text-align: center !important;">
                    Developed by <a style="color: white;" href=""><span
                            style="font-weight: bold;color:orange;">S-S-N</span></a>
                </p>
            </div>
        </div>
</footer>
</body>
</html> 