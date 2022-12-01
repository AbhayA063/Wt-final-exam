<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "abhay tiwari\n";
fwrite($myfile, $txt);
$txt = "A063\n";
fwrite($myfile, $txt);
$txt = "B3\n";
fwrite($myfile, $txt);
$txt = "currently pursuing MCA from mpstme\n";
fwrite($myfile, $txt);
fclose($myfile);
?>