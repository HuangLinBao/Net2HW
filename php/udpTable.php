<?php
$ip = "127.0.0.1:161";
$udpadd = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.1");
$udpport = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.2");

$length = count($udpadd);
for ($i = 0; $i < $length; $i++) {
    echo (substr($udpadd[$i], 10) . "*");
    if ($i < $length - 1)
        echo (substr($udpport[$i], 9) . ">");
    else echo (substr($udpport[$i], 9));
}