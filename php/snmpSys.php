<?php

$ip = "127.0.0.1:161";
if (isset($_GET['contact']))
    snmp2_set(
        $ip,
        "public",
        ".1.3.6.1.2.1.1.4.0",
        "s",
        $_GET['contact']

    );
echo ("name is :");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.5.0") . "<br><br>");
echo ("description is:");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0") . "<br><br>");
echo ("time_on is:");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.3.0") . "<br><br>");
echo ("OID is:");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.2.0") . "<br><br>");
echo ("contact is:");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0") . "<br><br>");