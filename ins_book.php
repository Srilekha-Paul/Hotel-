<?php
if(isset($_POST['submit'])){

include("inc/db.php");
$n=$_POST['name'];
$e=$_POST['email'];
$phone=$_POST['phone_no'];
$norooms=$_POST['no_of_room'];
$roomtype=$_POST['room_type'];
$address=$_POST['address'];
$entry_date=date('Y-m-d', strtotime($_POST['entry_date']));
$out_date=date('Y-m-d', strtotime($_POST['out_date']));

$con=mysqli_connect("localhost","root","","hotel");
$ins="INSERT INTO booking SET name='$n',email='$e',phone_no='$phone', no_of_room='$norooms',room_type='$roomtype',address='$address',entry_date='$entry_date',out_date='$out_date'";
$con->query($ins);
?>
<script>
alert("Booking done successfully");
window.location='index.php';
    </script>

<?php

}
else{
    echo "Access denied";
}

?> 