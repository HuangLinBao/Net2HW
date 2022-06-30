<?php
$ip = "127.0.0.1:161";


if (isset($_POST['submit'])) {
    header("Refresh:0.5;url =./SNMP.php?contact=" . $_POST['contact']);
}
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
                <a href="SNMP.php" class="nav-item selected">SNMP System</a>
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
        <main data-barba="container" data-barba-namespace="snmp-section">

            <form action="SNMP.php" method="POST">
                <section class="container">
                    <table>
                        <tbody>
                            <tr>
                                <td class="main">&nbsp;Name</td>
                                <td><label><?php echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.5.0"));
                                            ?></label></td>
                            </tr>
                            <tr>
                                <td class="main">&nbsp;Description</td>
                                <td><label><?php echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0")); ?></label></td>
                            </tr>
                            <tr>
                                <td class="main">&nbsp;Time</td>
                                <td><label><?php echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.3.0")); ?></label></td>
                            </tr>
                            <tr>
                                <td class="main">&nbsp;OID</td>
                                <td><label><?php echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.2.0")); ?></label></td>
                            </tr>
                            <tr>
                                <td class="main">&nbsp;Contact</td>
                                <td><label><?php
                                            if (isset($_POST['submit'])) {
                                                header("Refresh:0.5;url =./SNMP.php?contact=" . $_POST['contact']);
                                            }
                                            if (isset($_GET['contact'])) {
                                                snmp2_set(
                                                    $ip,
                                                    "public",
                                                    ".1.3.6.1.2.1.1.4.0",
                                                    "s",
                                                    $_GET['contact']
                                                );
                                                echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0"));
                                            }
                                            echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0"));
                                            ?>
                                    </label></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <div class="inp-container">
                    <button name="submit" type="submit" class="button-64">
                        <span class="text">Submit</span>
                    </button>
                    <div class="col-3 input-effect">
                        <input name="contact" required class="effect-19" type="text" placeholder="" />
                        <label>Contact</label>
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>
                </div>
            </form>
        </main>
    </div>
</body>

</html>