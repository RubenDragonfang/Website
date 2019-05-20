<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132581402-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132581402-1');
</script>
    <meta charset="UTF-8">
    <title>Staff Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. You have succesfully logged in.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
		<a href="phpmyadmin.php" class="btn btn-info">MYSQL Admin Panel (requires additional permissions) </a>
		<a href="https://thesecretlaboratory.ddns.net:9090" class="btn btn-info">Server Monitor (extra perms required)</a>
		<a href="staffguides.php" class="btn btn-info">Staff Guides</a>
		<a href="owncloud.php" class="btn btn-info">OwnCloud</a>
		<a href="https://thesecretlaboratory.ddns.net:9098" class="btn btn-info">Server 2 Monitor (extra perms required)</a>
		<a href="http://thesecretlaboratory.ddns.net:3131" class="btn btn-info">Main 1 stats (no extra perms required)</a>
		<a href="http://thesecretlaboratory.ddns.net:3132" class="btn btn-info">Server 2  stats (useless server it will get a use sometime) (no extra perms required)</a>
    </p>
</body>
</html>