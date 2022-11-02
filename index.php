<?php
session_start();
include './core/connection.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="sidebar close">
        <!-- header logo -->
        <header>
            <div class="image-text">
                <span class="image">
                    <box-icon type='solid' name='dashboard' size="lg" color="#695cfe"></box-icon>
                </span>

                <div class="text logo-text">
                    <span class="name">SMART PJU</span>
                    <span class="profession">Shine and Bright</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <!-- menu sidebar -->
        <div class="menu-bar">
            <div class="menu">
                <!-- search bar -->
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>
                <!-- submenu sidebar -->
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#dashboard">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#location">
                            <i class='bx bx-map icon'></i>
                            <span class="text nav-text">Location</span>
                        </a>
                    </li>
                </ul>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#recent-data">
                            <i class='bx bx-receipt icon'></i>
                            <span class="text nav-text">Recent Data</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- submenu sidebar bottom -->
            <div class="bottom-content">
                <!-- toogle dark mode -->
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <!-- dashboard -->
    <section class="home">
        <div class="" id="dashboard">

        </div>
        <!-- location map -->
        <div class="" id="location">

        </div>
        <!-- recent data -->
        <div class="" id="recent-data">

        </div>
    </section>

    <script type="text/javascript" src="./assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./assets/js/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/02477e3f4f.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="./assets/js/script.js"></script>
    <script>
    $(document).ready(function() {
        loadDashboard();
        loadLocation();
        loadRecentData();
    });

    function loadDashboard() {
        $("#dashboard").load("./layout/dashboard.php");
        setTimeout(loadDashboard, 100);
    }

    function loadLocation() {
        $("#location").load("./layout/location.php");
        setTimeout(loadLocation, 100);
    }

    function loadRecentData() {
        $("#recent-data").load("./layout/recent_data.php");
        setTimeout(loadRecentData, 100);
    }
    </script>
    <!-- <script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $("#status_lampu").load("index.php");
            $("#nilai_tegangan").load("index.php");
            $("#nilai_arus").load("index.php");
            $("#nilai_LDR").load("index.php");
        }, 1000)
    })
    </script> -->
</body>

</html>