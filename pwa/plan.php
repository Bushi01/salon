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
        <meta name="description" content="B-boost, exposants">
        <meta name="keywords" content="exposants, grande halle, espace Encan, plan, B-boost, open source, salon, événement, La Rochelle, France">
        <meta name="author" content="Chlo">
        <title>B-boost exposants</title>

        <?php
        include("header.php");
        ?>
    </head>

    <?php
    try{
      /*Affichage des erreurs*/
      // error_reporting(E_ALL);
      // ini_set('display_errors',TRUE);
      // ini_set('display_startup_errors',TRUE);
      /**/
      include_once'Manager.php';
      $manag=new Manager(new Connection());
      // $allEntTab=$manag->allEntTab();
      $allExpTab=$manag->allExpTab();
    }catch(PDOexception $e){
      die('Erreur :' .$e->getTraceAsString());//arret du script et trace
    }
    ?>

    <body>
      <?php
      $a="pagesEn/planEn.php";
      include("navbar.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container" id="#begin">
        <div>
          <h2 class="center">Espace Encan</h2>
          <p class="center"><i> Quai Louis Prunier - BP 3106 17033</i>s</p>
        </div>

        <div class="row hide-on-small-only">
          <div class="col s12 m10 l10 offset-m1 offset-l1">
            <div class="card-panel">
              <img class="materialboxed" src="assets/images/Plan-implantation-bboost-horizontal.png" alt="plan exposants">
            </div >
          </div>
        </div>
        <div class="row hide-on-med-and-up">
          <div class="col s12 m10 l10 offset-m1 offset-l1">
            <div class="card-panel">
              <img class="materialboxed" src="assets/images/Plan-implantation-bboost-vertical.png" alt="plan exposants">
            </div >
          </div>
        </div>

        <div class="row">
          <!--Boucle ici-->
          <?php
          if(isset($allExpTab) && !empty($allExpTab)){
            foreach($allExpTab as $ligne){
              /*sous forme de cadre*/
              echo '<a href="entites.php?ent='.$ligne[0].'">
                      <div class="col s3 m2 l2">
                        <div class="z-depth-2">
                          <img src="'.$ligne[2].'" class="imgPadBr " alt="image entreprise">
                          <div class="card-stand"><h5>'.$ligne[3].'</h5></div>
                        </div>
                      </div>
                    </a>';
            }
          }
          ?>
        </div>

        <div class="row">
          <div class="col s12 m6 l6 offset-m3 offset-l3">
              <div class="card"><a href="listeEntreprises.php"><p class="center">PORTFOLIO DES ENTREPRISES</p></a></div>
          </div>
        </div>

        <div class="container"><a href="#begin" class="right black-text"><i class="fa fa-angle-up  fa-3x"></i></a></div>
        <br/>

        <div class="row">
          <div class="col s12 m12 l12 center-align">
            <a href="http://www.larochelle-evenements.fr/votre-evenement-a-la-rochelle/espaces/l-espace-encan" class="">Espace Encan - La Rochelle tourisme événement</a>
          </div>
          <p class="center"><i> Quai Louis Prunier - BP 3106 17033</i></p>
        </div>
      </div><!--ENDcontainer-->

      <?php
      include("footer.php");
      ?>
    </body>
</html>
