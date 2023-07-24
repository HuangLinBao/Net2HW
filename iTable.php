<?php
$_SESSION = session_start();
$ip = "127.0.0.1:161";
$interface_Num = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.1");
$inter = explode(": ", $interface_Num[0]); // to split the data and take the value
$count = $inter[1];     // to get the # of interfaces

// call the identifiers
$iTable_1 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.1");
$iTable_2 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.2");
$iTable_3 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.3");
$iTable_4 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.4");
$iTable_5 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.5");
$iTable_6 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.6");
$iTable_7 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.7");
$iTable_8 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.8");
$iTable_9 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.9");
$iTable_10 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.10");
$iTable_11 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.11");
$iTable_12 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.12");
$iTable_13 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.13");
$iTable_14 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.14");
$iTable_15 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.15");
$iTable_16 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.16");
$iTable_17 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.17");
$iTable_18 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.18");
$iTable_19 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.19");
$iTable_20 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.20");
$iTable_21 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.21");
$iTable_22 = snmp2_walk($ip, "public", "1.3.6.1.2.1.2.2.1.22");


?>


<!doctype html>
<html class="no-js" lang="">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/btn.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/EaselPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/CustomEase.min.js"></script>
    <script src="js/script.js"></script>

</head>

<body>

    <header class="header-fixed">
        <div class="header-limiter">
            <h1>
                <a href="#">Networks||<span>Assignment</span></a>
            </h1>

            <nav>
                <a href="SNMP.php" class="nav-item selected">SNMP System</a>
                <a href="iTable.php" class="nav-item">IfTable</a>
                <a href="TCPtable.php" class="nav-item">TCP Table</a>
                <a href="UDPtable.php" class="nav-item">UDP Table</a>
            </nav>
        </div>
    </header>
    <div class="wrapper" style="position:relative">
        <div class="load-container" style="position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    z-index: 10;
    pointer-events: none;">
            <div class="loading-screen" style="position: relative; top: 0; left: 0; padding-left: 0;
    padding-right: 0;
    padding-top: 0;
    background-color: #0fbcf9;
    width: 0%;
    height: 100%;"></div>
        </div>

        <div data-barba="wrapper">
            <main data-barba="container" data-barba-namespace="ifTable">
                <div class="heading-container">
                    <form action="iTable.php" method="post">
                        <?php
                        if (isset($_POST['next_item'])) {
                            if ($_SESSION['obj_index'] < $count - 1) {   // to check if we reach the last element
                                $_SESSION['counter']++;
                                $_SESSION['obj_index']++;
                            } else {
                                // do nothing
                            }
                        }
                        if (isset($_POST['prev_item'])) {
                            if ($_SESSION['obj_index'] > 0) {     // to check if we reach the first element if no then decrement counters
                                $_SESSION['counter']--;
                                $_SESSION['obj_index']--;
                            } else {
                                // do nothing
                            }
                        }
                        ?>
                        <table>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <label style="font-size: 24px">
                                            <?php
                                            echo $_SESSION['counter'] . ")  " . pack("H*", str_replace("\n", "", str_replace(" ", "", substr($iTable_2[$_SESSION['obj_index']], 12))))
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_3[$_SESSION['obj_index']], 9);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Packet Max Size</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_4[$_SESSION['obj_index']], 9);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Speed</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_5[$_SESSION['obj_index']], 9);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>MAC Address</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_6[$_SESSION['obj_index']], 12);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Admin Status</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_7[$_SESSION['obj_index']], 9);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Operation Status</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_8[$_SESSION['obj_index']], 9);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Change</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_9[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Recieved messages</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_10[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Unicast subnetwork count</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_11[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>non-Unicast subnetwork</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_12[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>InDiscards</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_13[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>InErrors</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_14[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>InUnknownProtos</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_15[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>OutOctets</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_16[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>OutUcastPkts</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_17[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>OutNUcastPkts</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_18[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>OutDiscards</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_19[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>OutErrors</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_20[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>OutQLen</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_21[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Specification</td>
                                    <td>
                                        <label>
                                            <?php
                                            echo substr($iTable_22[$_SESSION['obj_index']], 11);
                                            ?>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="inp-container">
                            <button type="submit" class="button-64 in_data" value="Prev" name="prev_item">
                                <span class="text">Prev</span>
                            </button>
                            <button type="submit" class="button-64 in_data" value="NEXT" name="next_item">
                                <span class="text">Next</span>
                            </button>


                        </div>


                    </form>
                </div>
            </main>
        </div>

</body>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Barba Core -->
<script src="https://unpkg.com/@barba/core"></script>

<!-- GSAP for animation -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

<!-- Some basic helper functions -->
<script src="js/helper.js"></script>




</html>