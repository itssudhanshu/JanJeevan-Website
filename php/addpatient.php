<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$db = "patient";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

$PatientName = $_POST['pname'];
$Gender = $_POST['gender'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$PhoneNumber = $_POST['pnumber'];
$DateOfBirth = $_POST['dob'];
$BloodGroup = $_POST['bgrp'];
$EmergencyContactName = $_POST['ename'];
$Relationship = $_POST['relationship'];
$EmergencyPhoneNumber = $_POST['enumber'];
$ReasonForRegistration = $_POST['reason'];
$AdditionalInformation = $_POST['addinfo'];
$DoctorName = $_POST['dname'];
$TakingAnyMedicationsCurrently = $_POST['yesno'];
$IfYesPleaseListItHere = $_POST['info'];

$sql = "INSERT INTO addpatient(id, pname, gender, address, email, pnumber, dob, bgrp, ename, relationship, enumber, reason, addinfo, dname, yesno, info)
VALUES ('','$PatientName','$Gender','$Address','$Email','$PhoneNumber','$DateOfBirth','$BloodGroup','$EmergencyContactName','$Relationship','$PhoneNumber','$ReasonForRegistration','$AdditionalInformation','$DoctorName','$TakingAnyMedicationsCurrently','$IfYesPleaseListItHere')";

if (mysqli_query($conn, $sql)) {
    // echo "<script>window.location = '../'</script>";
    echo "<center> <br><br>Thanks for submitting the form, We'll reach to you shortly </center><br><br><center> <a href='../html/home.html'>Click Here for further Information </a></center><br><br><center>Thanks - Janjeevan Hospital</center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>