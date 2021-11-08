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
        <!--Files for PWA-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    		<link rel="manifest" href="../manifest.json">
    		  <!--<script src="app.js" defer></script> defer: differe l execution en fin de chargement du document / async: charger et executer les scripts de facon asynchrone-->
        <meta name="them-color" content="#e70f74">
          <!--for iOs device (safari : make a screenshot, not an icon like android)-->
        <link rel="apple-touch-icon" href="../assets/icons/favicon.ico">
        <meta name="apple-mobile-web-app-status-bar" content="#662282">

        <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../assets/icons/favicon.ico" type="image/x-icon">

        <!--Import Google Icon Font-->
        <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

        <link rel="stylesheet" href="../css/all.css" type="text/css"> <!--fontawesome-->
        <link rel="stylesheet" href="../css/materialize.css" media="screen,projection" type="text/css">
        <link rel="stylesheet" href="../css/style.css" type="text/css"><!--Put its before responsive.css-important-->
        <link rel="stylesheet" href="../css/latofonts.css"  type="text/css">

        <!--toast en mode online seulement-->
        <?php
        /*Affichage des erreurs*/
        // error_reporting(E_ALL);
        // ini_set('display_errors',TRUE);
        // ini_set('display_startup_errors',TRUE);
        /**/
        include_once'Manager.php';
        $manag = new Manager(new Connection());
        //
        $sponTabStmt=$manag->sAndgSponsorsTab();
        // echo "<br/>".var_dump($sponTabStmt);
        $nbrLignes=sizeof($sponTabStmt);
        // echo "nbr de lignes : ".$nbrLignes;
        $randSpon=floor(rand(0,($nbrLignes)*100-1)/100);
        // echo "<br/> ".$sponTabStmt[$randSpon][1];
        ?>
        <script>
        //restriction: seulement si en mode online ! Pas de toast hors ligne.
        if(navigator.onLine) {
          window.addEventListener('load', function() {
            var toastHtml = '<img id="toastImg" src="../<?php echo ''.$sponTabStmt[$randSpon][2];?>" class="imgPadBr"><a id="toastA" href="<?php echo '../'.$sponTabStmt[$randSpon][3];?>" target="_blank"><p><?php echo ''.strtoupper($sponTabStmt[$randSpon][1]);?> web site</p></a>';
            M.toast({html: toastHtml, displayLength: 1000});
          });
        }
        </script>
