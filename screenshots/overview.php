<TITLE>Random screenshots</TITLE>
<html><head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132581402-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132581402-1');
</script>
  <link rel="stylesheet" href="photo.css">
</head>
<?php
    $files = scandir('C:\xampp\htdocs\screenshots');
    echo "<div class=\"photo\">";
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "<img src='$file' />";
        }
    }
    echo "</div>\n";
?>