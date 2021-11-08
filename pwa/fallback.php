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
        <meta name="description" content="B-boost, fallback">
        <meta name="keywords" content="hors connection,fallback, bienvenue, B-boost, open source, salon, événement, open source, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost fallback</title>

        <?php
        include("header.php");
        ?>
    </head>

    <body>
      <?php
      $a="pagesEn/fallback.php";
      include("navbar.php");
      ?>
      <div class="container center-align">
        <div class="row">
          <h1 class="center-align">OOPS ...</h1>
          <p class="center-align"><b>Il semble que vous ne soyez pas connecté à Internet.</b></p>
          <i class="fas fa-wifi fa-3x center-align"></i>
          <!-- <i class="large material-icons center-align">wifi_lock</i> -->
          <h3 class="center-align">La page que vous avez chargé ne peut être lue sans connection.</h3>
          <p class="center-align">Veuillez cliquer ci-dessous si vous souhaitez être redirigé vers la page d'accueil :</p>
          <a href="accueil.php" class="btn">Accueil</a>
        </div>
      </div>

      <?php
      include("footer.php");
      ?>
    </body>
</html>
