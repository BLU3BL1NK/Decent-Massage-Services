<?php
include 'connection/connection.php';
session_start();

$RID = $_GET['ReservationID'];

mysqli_query($cnn,"UPDATE tblreservation SET Status='Confirmed' WHERE ReservationID='$RID'");
?>
			<script type="text/javascript">
			alert("Reservation Confirmed!");
			window.location.href = "Reservation.php";
			</script>