<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  # exec("/var/www/html/get-sa-token.sh -n test -a test");
  $output = shell_exec('/opt/app-root/src/get-sa-token.sh -n test -a test');
  echo "<pre>$output</pre>";

  #$myfile = fopen("sa.token", "r") or die("Unable to open sa.token file!");
  #echo fread($myfile,filesize("sa.token"));
  #fclose($myfile);


}
?>

<!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
<a href="?run=true">Click Me!</a>

