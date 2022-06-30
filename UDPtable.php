<?php
$ip = "127.0.0.1:161";
$udpadd = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.1");
$udpport = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.2");

$length = count($udpadd);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/btn.css" />
    <link rel="stylesheet" href="css/textField.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/EaselPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/CustomEase.min.js"></script>
    <script src="js/script.js"></script>
    <title>Document</title>
</head>

<body data-barba="wrapper">
    <header class="header-fixed">
        <div class="header-limiter">
            <h1>
                <a href="#">Networks||<span>Assignment</span></a>
            </h1>

            <nav>
                <a href="SNMP.php" class="nav-item">SNMP System</a>
                <a href="TCPtable.php" class="nav-item">TCP Table</a>
                <a href="UDPtable.php" class="nav-item selected">UDP Table</a>
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
        <main data-barba="container" data-barba-namespace="udp-section">

            <section class="container">
                <table>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $length; $i++) {
                            echo "<tr>";
                            echo "<td><label>" . (substr($udpadd[$i], 10) . "</label></td>");
                            if ($i < $length - 1) {
                                echo "<td><label>" . (substr($udpport[$i], 9) . "</label></td>" . "</tr>");
                            } else {
                                echo "<td><label>" . (substr($udpport[$i], 9) . "</label></td>" . "</tr>");
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </section>

        </main>
    </div>
</body>

</html>