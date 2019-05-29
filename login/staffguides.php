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
    <p>
        <a href="welcome.php" class="btn btn-warning">Back</a>
    </p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/5vijJfKPWtY" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/cIIov4KM-Uo" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<<textarea name="text" cols="45" rows="20">
how to ban someone:
1: find the player id
https://cdn.discordapp.com/attachments/495695852556255264/509473400360534029/unknown.png
the player id is the numbers between the ()
the player id is different for every player and changes every round
2: open the text based remote admin section
https://cdn.discordapp.com/attachments/495695852556255264/509473660503982120/unknown.png
3: type ban (playerid) (ban duration in minutes) (The reason for the ban, also include YOUR OWN steam name)

you can also use discord to ban players just go to #server-1 and type +list to get all the id's and names. Copy the steamid of the right user and type
+ban <steamidhere> 5 or more hours, days or months  <reasonhere>
</textarea>
</body>
</html>
