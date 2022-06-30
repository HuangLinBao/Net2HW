<?php
$ip = "127.0.0.1:161";
$localadd = snmp2_walk($ip, "public", ".1.3.6.1.2.1.6.13.1.2");
$localport = snmp2_walk($ip, "public", ".1.3.6.1.2.1.6.13.1.3");
$addremote = snmp2_walk($ip, "public", ".1.3.6.1.2.1.6.13.1.4");
$portremote = snmp2_walk($ip, "public", ".1.3.6.1.2.1.6.13.1.5");
$length = count($localadd);
for ($i = 0; $i < $length; $i++) {
    echo (substr($localadd[$i], 10) . "*");
    echo (substr($localport[$i], 9) . "*");
    echo (substr($addremote[$i], 10) . "*");
    if ($i < $length - 1)
        echo (substr($portremote[$i], 9) . ">");
    else echo (substr($portremote[$i], 9));
}