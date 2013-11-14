<?php
list($msec, $sec) = explode(" ", microtime());
echo "Current time in second from  1970 - $sec, and count of microsec from sec -  $msec, result if we use just microtime()</br>";
echo "Current time in second from  1970 - ". microtime(true).",  epoch accurate to the nearest microsecond, result if we use microtime(true) ";




