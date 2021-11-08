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
        <meta name="description" content="B-boost, accueil">
        <meta name="keywords" content="accueil, bienvenue, B-boost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost accueil</title>
        <?php
        include("header.php");
        ?>
    </head>

    <body>
      <script>
      /*redirection vers la page en anglais si le cookie lang est de valeur "en"*/
      if(document.cookie!=null && document.cookie.includes('lang=en')){
        document.location.href="pagesEn/accueilEn.php";
      }
      </script>
      <?php
      /*Affichage des erreurs*/
      error_reporting(E_ALL);
      ini_set('display_errors',TRUE);
      ini_set('display_startup_errors',TRUE);
      /**/
      include_once'Manager.php';
      $manag=new Manager(new Connection());
      $a="pagesEn/accueilEn.php";//utilise dans la navbar pour clic sur bouton
      include("navbar.php");
      ?>
      <div>
        <p></p>
      </div>
      <div class="container">
        <div class="center-align">
          <!-- <p>presentation breve du salon</p> -->
          <!-- <p>presentation partenaire presse</p> -->
          <div class="row">
            <!-- <div class="col s12 m8 l9 offset-m1"> -->
              <h3 class="center-align">Bienvenue sur B-boost,</h3>
              <p class="center-align">une convention d'affaires autour du <b>logiciel libre</b> et de l'<b>open source</b>, accueillie cette année par la jolie ville de La Rochelle.</p>
            <!-- </div> -->

          </div>
          <!-- <p>presentation ville de La rochelle</p> -->
          <div class="row">
            <img src="assets/images/materiel/panoramique900.png" alt="La Rochelle">
          </div>
        </div>
      </div>
      <?php
      include("footer.php");
      ?>
    </body>
</html>
