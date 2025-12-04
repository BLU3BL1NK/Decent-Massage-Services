<?php
include 'connection/connection.php';
$No = $_GET['No'];

mysqli_query($cnn,"DELETE FROM tblservices WHERE No='$No'");
?>
<script type="text/javascript">
alert("Services been Deleted!");
window.location.href = "Services.php";
</script>