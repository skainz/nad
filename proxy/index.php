<?php

$command = '/usr/bin/mosquitto_pub -h 129.27.9.27 -t "topic" -m \''.$_POST['msg'].'\'';

echo $command;
echo exec($command,$o,$retval);

echo "retval: $retval\n";
?>