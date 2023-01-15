​<?php
$seed = time();
$num = rand(1,6);
$picpath = "http://lzd62288.3vzhuji.cc/api/img/(".$num.").jpg";
die(header("Location: $picpath"));
?>