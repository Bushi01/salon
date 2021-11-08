<!DOCTYPE html>
<!--
  License Notice :

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>

  Copyright Notice :

This work is made available under the terms of the Creative Commons Attribution-Share Alike License 2.0 France. (http://creativecommons.org/licenses/by-sa/2.0/fr/)
-->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="B-boost introduction">
        <meta name="keywords" content="B-boost, open source, salon, La Rochelle, add to home screen">
        <meta name="author" content="Chlo">
        <title>B-boost</title>

        <!--Files for PWA-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    		<link rel="manifest" href="../manifest.json">
    		  <!--<script src="app.js" defer></script> defer: differe l execution en fin de chargement du document / async: charger et executer les scripts de facon asynchrone-->
        <meta name="them-color" content="#e70f74">
          <!--for iOs device (safari : make a screenshot, not an icon like android)-->
        <link rel="apple-touch-icon" href="../assets/icons/favicon.ico"><!--icon-96.png-->
        <meta name="apple-mobile-web-app-status-bar" content="#662282">

        <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../assets/icons/favicon.ico" type="image/x-icon">

        <!--Import Google Icon Font-->
        <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

        <link rel="stylesheet" href="../css/all.css"><!--fontawesome-->
        <link rel="stylesheet" href="../css/materialize.css">
        <link rel="stylesheet" href="../css/style.css" type="text/css"><!--Put its before responsive.css-important-->
        <link rel="stylesheet" href="../css/latofonts.css"  type="text/css">

    </head>

    <body class="">
      <?php
        $a="../index.php";
      ?>
        <div class="container" id="">
          <nav class="nav-extended linear-gradient" id="begin">
            <div class="nav-wrapper">
              <a href="accueilEn.php" class="brand-logo center hide-on-small-only"><img src="../assets/icons/LogoBB21-C-FT-500.png" class="img40 pad10" alt="logo"></a>
              <a href="accueilEn.php" class="brand-logo center hide-on-med-and-up"><img src="../assets/icons/LogoBB21-C-FT-500.png" class="img90 pad10" alt="logo"></a>
              <!-- <a href="accueil.php" class="brand-logo center"><img src="assets/icons/LogoBB21-C-FT-500.png" class="img40 pad10 hide-on-med-and-down" alt="logo"></a> -->
              <ul id="nav-mobile" class="right">
                <!-- <li class="en" style=""><a id="enBtn" class="btn-floating btn-small waves-effect waves-light red" href="<?php echo $a;?>"><img class="" src="../assets/icons/enFlag-100.png"></a></li> -->
                <li class="fr" style=""><a class="btn-floating btn-small waves-effect waves-light red" href="<?php echo $a;?>"><img class="" src="../assets/icons/frFlag-100.png"></a></li>
              </ul>
            </div>
          </nav>
          <div class="center-align">
          <p id="offline" class="red-text center-align" hidden>Offline application, you cannot perform an installation.<p>
          </div>
          <div class="row card-panel z-depth-2">
              <h4 class="center text-purple"><b>Welcome to the application dedicated to B-boost !</b></h4>
              <div class="row card">
                <div class="col s12 m7 l7"><p class=""><i class="fas fa-check fa-1x pink-text"></i> For optimal navigation, you can <b>install the application  </b> on your phone. It can be uninstalled in the same way as any other application via your application manager.</p></div>
                <div class="col s12 m3 l2 mt5"><p class="center-align"><b> Click on the button if it appears  :</b></p></div>
                <div class="col s10 m2 l3 offset-s1 offset-m1 center-align mt10 mb20"><a id="addBtn" href="accueil.php" class="waves-effect waves-light z-depth-3 btn btnInv">install the application</a></div>
              </div>
              <div class="row">
                <div class="col s12 m7 l7"><p class=""><i class="fas fa-chevron-right fa-1x text-purple"></i> <u>If the install button does not appear</u>, is that your browser does not have this feature.</p>
                <!-- <div class="col s12 m7 l7"><p class=""><i class="material-icons text-purple small">chevron_right</i> <u>If the install button does not appear</u>, is that your browser does not have this feature.</p> -->
                  <br/><p>You can then <b>add the application to your home screen</b>.</p>
                  <br/><p>To do this, go to the bar of your browser and click on the add icon. A simple removal of the icon allows the uninstallation.</p>
                  <div class="row mt40 hide-on-med-and-down">
                    <div class="col s12 m12 l7"><p><i class="fas fa-chevron-right fa-1x text-purple"></i> If, however, you do not want to install the application you can join directly the site :</p></div>
                    <div class="col s10 m12 l5 offset-s1 center-align mt20"><a id="" href="../accueil.php" class="waves-effect waves-light z-depth-3 btn">B-boost webapp</a></div>
                  </div>
                </div>
                <div class="center-align s12 m5 l5 hide-on-small-only"><img class="center-align img40" src="../assets/icons/pwaExplain.png" alt="explications installation"></div>
                <div class="center-align s12 m5 l5 hide-on-med-and-up"><img class="center-align" src="../assets/icons/pwaExplain.png" alt="explications installation"></div>
              </div>
              <div class="row hide-on-large-only">
                <div class="col s12 m12 l7"><p><i class="fas fa-chevron-right fa-1x text-purple"></i> If, however, you do not wish to install the application you can join directly the site :</p></div>
                <div class="col s10 m12 l5 offset-s1 center-align mt10"><a id="" href="../accueil.php" class="waves-effect waves-light z-depth-3 btn">B-boost webapp</a></div>
              </div>
          </div>
          <div class="center" >
              <div class="row">
                <div class=""><h3>The beautiful city of La Rochelle welcomes you</h3></div>
                <div class="col s12 m10 l10 offset-m1 offset-l1"><img src="../assets/images/materiel/panoramique900.png" alt="La Rochelle"></div>
              </div>
          </div>
          <div class="row">
            <div class="col s12 m6 l6">
              <h4>A historical city</h4>
              <p>Fortified city on the sea and on the land, La Rochelle has many defensive monuments, the most famous of which are the medieval towers of the Old Port. They guarded the entrance, notably by a chain stretched between two of them across the water, and it is they that have made the city world famous. The Saint-Nicolas tower, the Chain tower and the Lantern tower are the only remains of the 14th century medieval wall razed by Richelieu in 1628 during the siege of the city. The same is true of the Porte de la Grosse Horloge, which guarded the entrance to the merchant city from the old port and is a vestige of the medieval ramparts. The Porte de la Grosse Horloge is also part of the city's historic port heritage.
              </p>
            </div>
            <div class="col s12 m6 l6">
              <h4>Port d'attache</h4>
                <p>Situated on the edge of the Atlantic Ocean, off the Antioch Channel, and protected from storms by the "barrier" of the islands of Ré, Oléron and Aix, the city is above all a first-rate port complex, and has been since the 12th century. It is in fact an "oceanic gateway" due to the presence of its three harbors (fishing, trade and pleasure).
                </p>
                <p>A thousand-year-old city with a rich historical and urban heritage, the historical capital of Aunis has today become the most important city between the Loire estuary and the Gironde estuary. Its urban activities are multiple and strongly differentiated. A city with important port and industrial functions, it has a predominant administrative and tertiary sector that is reinforced by its university and a growing tourism.
                </p>
                <p>But, La Rochelle has not only preserved buildings from the Middle Ages, the city has been enriched in the following centuries with remarkable monuments such as the famous City Hall from the Renaissance and other buildings from the classical period built in the 17th and 18th centuries such as the building of the Chamber of Commerce - the former Hotel de la Bourse.
                </p>
            </div>

          </div>
        </div>

        <!--scripts-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="../app.js" type="text/javascript"></script><!--link it with all the html pages of the project-->
        <script src="../js/materialize.js" type="text/javascript"></script>
    </body>
</html>
