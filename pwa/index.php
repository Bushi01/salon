<!DOCTYPE html>
<!--
  Avis de licence :

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

  Avis de copyright :

Ce(tte) œuvre est mise à disposition selon les termes de la Licence Creative Commons Attribution - Partage dans les Mêmes Conditions 2.0 France. (http://creativecommons.org/licenses/by-sa/2.0/fr/)
-->
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="B-boost introduction">
        <meta name="keywords" content="B-boost, open source, salon, La Rochelle, add to home screen">
        <meta name="author" content="Chlo">
        <title>B-boost</title>

        <!--
          Avis de licence :

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

          Avis de copyright :

        Ce(tte) œuvre est mise à disposition selon les termes de la Licence Creative Commons Attribution - Partage dans les Mêmes Conditions 2.0 France. (http://creativecommons.org/licenses/by-sa/2.0/fr/)
        -->

        <!--Files for PWA-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    		<link rel="manifest" href="manifest.json">
    		  <!--<script src="app.js" defer></script> defer: differe l execution en fin de chargement du document / async: charger et executer les scripts de facon asynchrone-->
        <meta name="them-color" content="#e70f74">
          <!--for iOs device (safari : make a screenshot, not an icon like android)-->
        <link rel="apple-touch-icon" href="assets/icons/favicon.ico"><!--icon-96.png-->
        <meta name="apple-mobile-web-app-status-bar" content="#662282">

        <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/icons/favicon.ico" type="image/x-icon">

        <!--Import Google Icon Font-->
        <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

        <link rel="stylesheet" href="css/all.css"><!--fontawesome-->
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/style.css" type="text/css"><!--Put its before responsive.css-important-->
        <link rel="stylesheet" href="css/latofonts.css"  type="text/css">

    </head>

    <body class="">
      <?php
        $a="pagesEn/indexEn.php";
      ?>
        <div class="container" id="">
          <nav class="nav-extended linear-gradient" id="begin">
            <div class="nav-wrapper">
              <a href="accueil.php" class="brand-logo center hide-on-small-only"><img src="assets/icons/LogoBB21-C-FT-500.png" class="img40 pad10" alt="logo"></a>
              <a href="accueil.php" class="brand-logo center hide-on-med-and-up"><img src="assets/icons/LogoBB21-C-FT-500.png" class="img90 pad10" alt="logo"></a>
              <!-- <a href="accueil.php" class="brand-logo center"><img src="assets/icons/LogoBB21-C-FT-500.png" class="img40 pad10 hide-on-med-and-down" alt="logo"></a> -->
              <ul id="nav-mobile" class="right">
                <li class="en" style=""><a id="enBtn" class="btn-floating btn-small waves-effect waves-light red" href="<?php echo $a;?>"><img class="" src="assets/icons/enFlag-100.png"></a></li>
                <!-- <li class="fr" style="display:none"><a class="btn-floating btn-small waves-effect waves-light red" href="../accueil.php"><img class="" src="assets/icons/frFlag-100.png"></a></li>-->
              </ul>
            </div>
          </nav>
          <div class="center-align">
          <p id="offline" class="red-text center-align" hidden>Application hors ligne, vous ne pouvez pas procéder à une installation.<p>
          </div>
          <div class="row card-panel z-depth-2">
              <h4 class="center text-purple"><b>Bienvenue sur l'application dédiée au salon B-boost !</b></h4>
              <div class="row card">
                <div class="col s12 m7 l7"><p class=""><i class="fas fa-check fa-1x pink-text"></i> Pour que la navigation soit optimale, vous pouvez <b>installer l'application </b> sur votre téléphone. Celle-ci se désinstalle de la même façon que n'importe quelle autre application via votre gestionnaire d'application.</p></div>
                <!-- <div class="col s12 m7 l7"><p class=""><i class="material-icons pink-text small">check</i> Pour que la navigation soit optimale, vous pouvez <b>installer l'application </b> sur votre téléphone. Celle-ci se désinstalle de la même façon que n'importe quelle autre application via votre gestionnaire d'application.</p></div> -->
                <div class="col s12 m3 l2 mt5"><p class="center-align"><b> Cliquez sur le bouton s'il apparaît :</b></p></div>
                <div class="col s10 m2 l3 offset-s1 offset-m1 center-align mt10 mb20"><a id="addBtn" href="accueil.php" class="waves-effect waves-light z-depth-3 btn btnInv">installer l'application</a></div>
              </div>
              <div class="row">
                <div class="col s12 m7 l7"><p class=""><i class="fas fa-chevron-right fa-1x text-purple"></i> <u>Si le bouton d'installation ne s'affiche pas</u>, c'est que votre navigateur ne possède pas cette fonctionnalité.</p>
                <!-- <div class="col s12 m7 l7"><p class=""><i class="material-icons text-purple small">chevron_right</i> <u>Si le bouton d'installation ne s'affiche pas</u>, c'est que votre navigateur ne possède pas cette fonctionnalité.</p> -->
                  <br/><p>Vous pouvez alors <b>ajouter l'application sur votre écran d'accueil</b>.</p>
                  <br/><p>Pour ce faire, rendez vous dans la barre de votre navigateur et cliquez sur l'icone d'ajout. Un simple retrait de l'icone permet la désinstallation.</p>
                  <div class="row mt40 hide-on-med-and-down">
                    <div class="col s12 m12 l7"><p><i class="fas fa-chevron-right fa-1x text-purple">t</i> Si, toutefois, vous ne souhaitez pas installer l'application vous pouvez rejoindre directement le site :</p></div>
                    <!-- <div class="col s12 m12 l7"><p><i class="material-icons text-purple small">chevron_right</i> Si, toutefois, vous ne souhaitez pas installer l'application vous pouvez rejoindre directement le site :</p></div> -->
                    <div class="col s10 m12 l5 offset-s1 center-align mt20"><a id="" href="accueil.php" class="waves-effect waves-light z-depth-3 btn">B-boost webapp</a></div>
                  </div>
                </div>
                <div class="center-align s12 m5 l5 hide-on-small-only"><img class="center-align img40" src="assets/icons/pwaExplain.png" alt="explications installation"></div>
                <div class="center-align s12 m5 l5 hide-on-med-and-up"><img class="center-align" src="assets/icons/pwaExplain.png" alt="explications installation"></div>
              </div>
              <div class="row hide-on-large-only">
                <div class="col s12 m12 l7"><p><i class="fas fa-chevron-right fa-1x text-purple"></i> Si, toutefois, vous ne souhaitez pas installer l'application vous pouvez rejoindre directement le site :</p></div>
                <!-- <div class="col s12 m12 l7"><p><i class="material-icons text-purple small">chevron_right</i> Si, toutefois, vous ne souhaitez pas installer l'application vous pouvez rejoindre directement le site :</p></div> -->
                <div class="col s10 m12 l5 offset-s1 center-align mt10"><a id="" href="accueil.php" class="waves-effect waves-light z-depth-3 btn">B-boost webapp</a></div>
              </div>
          </div>
          <div class="center" >
              <div class="row">
                <div class=""><h3>La jolie ville de La Rochelle vous accueille</h3></div>
                <div class="col s12 m10 l10 offset-m1 offset-l1"><img src="assets/images/materiel/panoramique900.png" alt="La Rochelle"></div>
              </div>
          </div>
          <div class="row">
            <div class="col s12 m6 l6">
              <h4>Une ville historique</h4>
              <p>Ville fortifiée sur la mer et sur la terre, La Rochelle comporte de nombreux monuments de défense, dont les plus connus sont les tours médiévales du Vieux-Port. Elles en gardaient l’entrée, notamment par une chaîne tendue entre deux d’entre elles à travers l’eau, et c’est elles qui ont rendue la ville mondialement célèbre. La tour Saint-Nicolas, celle de la Chaîne et de la Lanterne demeurent les seuls vestiges de l’enceinte médiévale du XIVe siècle rasée par Richelieu en 1628 lors du siège de la ville. De même en est-il de La porte de la Grosse Horloge qui gardait l’entrée de la cité marchande depuis le vieux-port et constitue un vestige des remparts médiévaux. La porte de la Grosse Horloge fait également partie du patrimoine portuaire historique de la ville.
              </p>
            </div>
            <div class="col s12 m6 l6">
              <h4>Port d'attache</h4>
                <p>Située en bordure de l’océan Atlantique, au large du pertuis d’Antioche, et protégée des tempêtes par la « barrière » des îles de Ré, d’Oléron et d’Aix, la ville est avant tout un complexe portuaire de premier ordre, et ce depuis le XIIe siècle. Elle est de fait une « Porte océane » par la présence de ses trois ports (de pêche, de commerce et de plaisance).
                </p>
                <p>Cité millénaire, dotée d’un riche patrimoine historique et urbain, la capitale historique de l’Aunis est aujourd’hui devenue la plus importante ville entre l’estuaire de la Loire et l’estuaire de la Gironde. Ses activités urbaines sont multiples et fortement différenciées. Ville aux fonctions portuaires et industrielles encore importantes, elle possède un secteur administratif et tertiaire largement prédominant que viennent renforcer son université et un tourisme en plein développement.
                </p>
                <p>Mais, La Rochelle n’a pas seulement conservé des édifices de l’époque du Moyen Âge, la ville s’est enrichie dans les siècles suivants de remarquables monuments dont le célèbre Hôtel de ville de la Renaissance et d’autres édifices de l’époque classique édifiés au XVIIe et XVIIIe siècles comme entre autres le bâtiment de la Chambre de commerce – ancien hôtel de la Bourse.
                </p>
            </div>

          </div>
        </div>

        <!--scripts-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="app.js" type="text/javascript"></script><!--link it with all the html pages of the project-->
        <script src="js/materialize.js" type="text/javascript"></script>
    </body>
</html>
