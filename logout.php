<?php
session_start();
$_SESSION['login']=="";

session_unset();
$_SESSION['action1']="Logged out successfully";
?>
<script language="javascript">
document.location="home.php";
</script>
