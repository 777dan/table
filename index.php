<?php
$n = 6;
print "<table style=\"border: 5px solid;border-collapse: collapse;\">";
for ($i = 1; $i < $n; $i++) {
    // $i % 2 == 0 ? break :  print "No!";
    $image = "<img width=\"100px\" src=\"images/img_$i.jpg\">";
    if ($i % 2 != 0) {
        print "<tr><td style=\"border:solid;width:50px;text-align:center;\">$i</td><td style=\"border:solid;width:30px;padding:0px\">$image</td></tr>";
    }
    // print "<tr><td style=\"border:solid;width:50px;text-align:center;\">$i</td><td style=\"border:solid;width:30px;padding:0px\">$image</td></tr>";
}
print "</table>";