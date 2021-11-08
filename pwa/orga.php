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
        <meta name="description" content="B-boost, organisation">
        <meta name="keywords" content="naos, organisation, accueil, bienvenue, B-boost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost organisation</title>
        <?php
        include("header.php");
        ?>
    </head>

    <body>
      <?php
      $a="pagesEn/orgaEn.php";
      include("navbar.php");
      ?>

      <div class="container">
        <div class="row card">
          <div class=""><h4 class="center">La convention est co-organisée par :</h4></div>
          <div class="col s12 m6 l6">
            <div class="center-align"><a href="https://naos-cluster.com/" target="_blank"><img class="img35" src="assets/images/LOGO-NAOS.png" alt="logo NAOS"/></a></div>
            <div><p>Nouvelle-Aquitaine Open Source (NAOS) est un pôle de compétences régional en logiciels et technologies libres et open source.
            Son objectif est de promouvoir le développement d’une filière économique pour les technologies libres et open source sur le territoire de la région Nouvelle-Aquitaine.
            <br/>NAOS opère le programme d’accélération " La Banquiz " avec les technopoles partenaires.</p></div>
          </div>
          <div class="col s12 m6 l6">
            <div class="center-align"><a href="https://cnll.fr/" target="_blank"><img class="img35" src="assets/images/LOGO-CNLL.png" alt="logo CNLL"/></a></div>
            <div><p>Le CNLL, l’Union des entreprises du logiciel libre et du numérique ouvert, est l’organisation représentative en France des entreprises de la filière open source depuis 2010.
            <br/>Le CNLL regroupe les principales associations et grappes d'entreprises de l'Open Source en France et représente par leur intermédiaire près de 300 entreprises
            spécialisées ,ou avec une activité significative, dans le logiciel libre (éditeurs, intégrateurs, sociétés de conseils, etc.) et dans le numérique ouvert
            (open data, open hardware, etc.).</p></div>
          </div>
        </div>
      </div>

      <?php
      include("footer.php");
      ?>
    </body>
</html>
