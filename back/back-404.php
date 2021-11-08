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
        <meta name="description" content="Bboost, 404">
        <meta name="keywords" content="404, accueil, bienvenue, Bboost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>Bboost 404</title>
<!-- <script>console.log(document.cookie);</script>A retirer-->
        <?php
        include("headerBack.php");
        ?>
    </head>

    <body>
      <script>
      /*redirection vers la page en anglais si le cookie lang est de valeur "en"*/
      // if(document.cookie!=null && document.cookie.includes('lang=en')){
      //   document.location.href="pagesEn/accueilEn.php";
      // }
      </script>
      <nav class="nav-extended linear-gradient" id="begin">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo"><img src="/assets/icons/LogoBBOOST21-Seul-Couleur-FS.png" class="img15 pad10 hide-on-med-and-down" alt="logo"></a>
          <a href="index.php" class="brand-logo center-align"><img src="/assets/icons/LogoBBOOST21-Seul-Couleur-FS.png" class="img55 pad10 hide-on-large-only hide-on-small-only" alt="logo"></a>
          <a href="index.php" class="brand-logo center-align"><img src="/assets/icons/LogoBBOOST21-Seul-Couleur-FS.png" class="img75 pad10 hide-on-med-and-up" alt="logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
            // if(isset($login)){
            //   echo "<li><a href='Logout.php'>DECONNECTION</a></li>";
            // }
            ?>
            <li><a href="https://bboostapp.naos-cluster.tech/accueil.php" target="_blank">site mobile</a></li>
            <li><a href="https://b-boost.fr/larochelle/" target="_blank">site web</a></li>
          </ul>
        </div>
        <div class="nav-content">
          <ul class="tabs tabs-transparent"><!--class="active"-->
            <li class="tab"><a class="" href="back-entity.php">ENTITES</a></li>
            <li class="tab"><a class="" href="back-pers.php">PARTICIPANTS</a></li>
            <li class="tab"><a class="" href="back-prog.php">PROGRAMME</a></li>
          </ul>
        </div>
      </nav><!--INburger-->
      <ul class="sidenav" id="mobile-demo"><!--id=data-target-->
        <?php
        // if(isset($login)){
        //   echo "<li><a href='Logout.php'>DECONNECTION</a></li>";
        // }
        ?>
        <li><a href="https://bboostapp.naos-cluster.tech/index.php" target="_blank">site mobile</a></li>
        <li><a href="https://b-boost.fr/larochelle/" target="_blank">site web</a></li>
      </ul><!--ENDburger-->
      <div class="container">
        <div class="center-align">
          <br/>
          <img class="" src="assets/404.png" alt="404">
          <br/>
          <br/>
        </div>
      </div>
      <?php
      include("footerBack.php");
      ?>
    </body>
</html>
