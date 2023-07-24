<?php
echo ("****Testing started *** <br>");
#define NO_ZEROLENGTH_COMMUNITY 1


//$ip = "192.168.1.106";
$ip = "127.0.0.1:161";
print("<br>-------(ARP)IPNetToMedia table-----------<br>");
//////added in lect 15

$a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.2");
echo ("<br>");
$b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.3");
$c = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.4");
$aa = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4");
echo ("=== here ======><br>");
print_r($aa);
echo ("<br><br>=== =ARP TABLE ======><br>");
$i = 0;
echo "<table>";
echo "<tr> <td > Index </td><td> Mac </td> <td > IP </td><td> type </td>  </tr>";
foreach ($a as $k => $val) {
	echo "<tr> <td> $i </td><td> $a[$i] </td> <td> $b[$i] </td><td> $c[$i] </td>  </tr>";
	//  echo "($i) $val  $b[$i] ------ $c[$i] <br>\n";
	$i++;
}
echo "</table>";
print("<br>----------2--------<br>");
//print "Uptime: ".snmp2_get($ip, "public", "system.sysUpTime.0" ) ."<br>";
//print "Name: ".snmp2_get($ip, "public", "system.SysName" )."<br>";
print("<br>----------3--------<br>");
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0") . "<br>";
print snmp2_get($ip, "fff", ".1.3.6.1.2.1.1.2.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.3.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.5.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.6.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.7.0") . "<br>";
//print("<br>--------end -----<br>");
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0") . "<br>";
//print snmp2_walk($ip,"public",".1.3.6.1.2.1.4.22"). "<br>";
print("<br>-------- 888888 -----<br>");
$obj = (snmp2_walk($ip, "public", ".1.3.6.1.2.1.1")); //. "<br>";
print("<br>--------obj -----<br>");
//print_r($obj);
echo "<table>";
echo "<tr> <td > key </td><td> val </td>   </tr>";
foreach ($obj as $k => $val) {
	echo "<tr> <td> $k </td><td> $val </td </tr>";
	$i++;
}
echo "</table>";
print("<br>--------end -----<br>");


print("<br>--------ifTable -----<br>");
$interface_Num = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.1");
$inter = explode(": ", $interface_Num[0]);

$iTable_1 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.1");
print($iTable_1);
print("<br>");
$iTable_2 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.2");
print($iTable_2);
print("<br>");
$iTable_3 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.3");
print($iTable_3);
print("<br>");
$iTable_4 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.4");
print($iTable_4);
print("<br>");
$iTable_5 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.5");
print($iTable_5);
print("<br>");
$iTable_6 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.6");
print($iTable_6);
print("<br>");
$iTable_7 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.7");
print($iTable_7);
print("<br>");
$iTable_8 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.8");
print($iTable_8);
print("<br>");
$iTable_9 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.9");
print($iTable_9);
print("<br>");
$iTable_10 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.10");
print($iTable_10);
print("<br>");
$iTable_11 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.11");
print($iTable_11);
print("<br>");
$iTable_12 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.12");
print($iTable_12);
print("<br>");
$iTable_13 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.13");
print($iTable_13);
print("<br>");
$iTable_14 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.14");
print($iTable_14);
print("<br>");
$iTable_15 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.15");
print($iTable_15);
print("<br>");
$iTable_16 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.16");
print($iTable_16);
print("<br>");
$iTable_17 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.17");
print($iTable_17);
print("<br>");
$iTable_18 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.18");
print($iTable_18);
print("<br>");
$iTable_19 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.19");
print($iTable_19);
print("<br>");
$iTable_20 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.20");
print($iTable_20);
print("<br>");
$iTable_21 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.21");
print($iTable_21);
print("<br>");
$iTable_22 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.22");
print($iTable_22);
print("<br>");

print("<br>--------ifTable end-----<br>");
//////added in lect 15
$syscontact = snmp2_get("127.0.0.1", "public", "system.SysName.0");
print("<br> System Contact: $syscontact <br>");
