<?php
session_start();
$amount = $_GET['q'];

$Total = $_SESSION['Bill'];
$G = $amount - $Total;


$_SESSION['Amount'] = $amount;
if($G <= '0'){
	echo "<td width=80%>0.00</td>";
	$_SESSION['Change'] = "0";
}else{
	echo "<td width=80%><b>" . number_format($G,2) . "</b></td>";
	$_SESSION['Change'] = $G;
}
?>
