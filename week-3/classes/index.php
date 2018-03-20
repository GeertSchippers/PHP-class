<?php
$fh = fopen("text.txt","w");
fwrite($fh, "hello good to see you");
fclose($fh);
