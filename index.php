<!DOCTYPE html>
<html>
<head>
    <title>Schachverein Herzogenrath</title>
    <link rel="stylesheet" href="index.css">
    <!--TODO  Replace with less detailed Icon-->
    <link rel="icon" type="image/png" href="Burg.gif">
</head>
<body>
    <header>
        <!--TODO Image as link to Start -->
        <img src="Burg.gif" href="index.php?go=start">
        <div id="header_text">
            <h1>Schachverein 1949 Herzogenrath</h1>
            <!--TODO Calc dynamicly ?Birthday event?-->
            <h2>74 Jahre Schach in Herzogenrath</h2>
        </div>
        <address>
            <a>
                Schau bei uns vorbei!<br>
                Jeden Donnerstag ab 19:30 Uhr<br>
                Jugend ab 17:00 Uhr<br>
                (Wegbeschreibung)
            </a>
        </address>
    </header>
    <nav>
        <a>News</a>
        <a>Kontakt</a>
        <a>Wegbeschreibung</a>
        <a>DWZ-Liste</a>
        <a>Siegerliste</a>
        <div class="dropdown">
            <button class="dropbtn">Manschaften</button>
             <div class="dropdown-content">
                <a href="">1.</a>
                <a href="">2.</a>
                <a href="">3.</a>
                <a href="">4.</a>
                <a href="">5.</a>
                <a href="">SJM-U16</a>
                <a href="">ASJ-U20</a>
                <a href="">ASJ-U12</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Vereinsturniere</button>
             <div class="dropdown-content">
                <a>Vereinspokal</a>
                <a>VereinsM</a>
                <a>BlitzVM</a>
                <a>SchnellVM</a>
                <a>Printentunier</a>
                <a>JugendVM</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Sonstiges</button>
             <div class="dropdown-content">
                <a>Eurode-Open</a>
                <a>DEF-Cup</a>
                <a>Stadtmeisterschaft</a>
                <a>60 Jahre SVH</a>
                <a>70 Jahre SVH</a>
                <a>Specials</a>
            </div>
        </div>
        <a>Gedenken</a>
    </nav>
    <div id="main">
        <div id="content">
            <?php
                // go => subpagepath
                //TODO Finish Mapping
                $navs = [
                    "admin_login" => "adminLogin/adminLogin.php"
                ];

                if(!key_exists("go", $_GET)){
                    //include "start\\start.html";
                }
                else{
                    if(!key_exists($_GET["go"], $navs)){
                        //include "start\\start.html";
                    }
                    else{
                        include $navs[$_GET["go"]];
                    }
                }
            ?>
        </div>
        <div id="events">

        </div>
    </div>
    <footer>
    </footer>
</body>
</html>