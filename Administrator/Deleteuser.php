<?php
include 'connection/connection.php';
$No = $_GET['No'];

mysqli_query($cnn,"DELETE FROM tbluser WHERE No='$No'");
?>
<script type="text/javascript">
alert("User been Deleted!");
window.location.href = "User.php";
</script>