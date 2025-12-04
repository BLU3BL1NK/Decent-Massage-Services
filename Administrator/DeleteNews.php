<?php
include 'connection/connection.php';
$No = $_GET['No'];

mysqli_query($cnn,"DELETE FROM tblnews WHERE No='$No'");
?>
<script type="text/javascript">
alert("News has been Deleted!");
window.location.href = "News.php";
</script>