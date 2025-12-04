<?php
include 'connection/connection.php';
$No = $_GET['No'];

mysqli_query($cnn,"DELETE FROM tbltherapist WHERE No='$No'");
?>
<script type="text/javascript">
alert("Therapist has been Deleted!");
window.location.href = "Therapist.php";
</script>