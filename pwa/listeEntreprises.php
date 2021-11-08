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
        <meta name="description" content="B-boost, la liste des entreprises">
        <meta name="keywords" content="entreprises, exposants, B-boost, open source, salon, événement, La Rochelle, stand, stands, exposants, b to b, exposer, rencontrer, rencontres, professionnel">
        <meta name="author" content="Chlo">
        <title>B-boost, la liste des entreprises</title>

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
      $manag = new Manager(new Connection());
      $allEntTab=$manag->allEntTab();
    }catch(PDOexception $e){
      die('Erreur :' .$e->getTraceAsString());//arret du script et trace
    }
    ?>

    <body>
      <?php
      $a="pagesEn/listeEntreprisesEn.php";
      include("navbar.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container">
        <div>
          <h3 class="center-align hide-on-small-only">Liste des entreprises présentes au B-boost</h3>
          <h5 class="center-align hide-on-med-and-up">Liste des entreprises présentes</h5>
        </div>
        <div class="row">
          <div class="col s12 m6 l6 offset-m3 offset-l3">
              <div class="card"><a href="pitch.php"><p class="center">Programmation pitch entreprises</p></a></div>
          </div>
        </div>
        <div class="row">
          <!--Boucle ici-->
          <?php
          // var_dump($allEntTab);
          if(!empty($allEntTab)){
            foreach($allEntTab as $ligne){
              /*sous forme de carte*/
              // echo '<div class="col s6 m3 l2">
              //         <div class="card">
              //           <div class="card-image waves-effect waves-block waves-light">
              //             <i class="material-icons right">more_vert</i>
              //             <img src="'.$ligne[3].'" class="imgPadBr z-depth-3 activator" alt="image entreprise">
              //           </div>
              //           <div class="card-content">
              //             <span class="card-title activator grey-text text-darken-4 truncate hide-on-med-and-down">'.strtoupper($ligne[1]).'</span>
              //             <p class=""><a href="'.$ligne[6].'">Site web</a></p>
              //           </div>
              //           <div class="card-reveal">
              //           <span class="card-title grey-text text-darken-4 flow-text truncate">'.strtoupper($ligne[1]).'<i class="material-icons right">close</i></span>
              //             <p class="">'.$ligne[7].'</p>
              //           </div>
              //         </div>
              //       </div>';

              /*sous forme de cadre*/
              echo '<a href="entites.php?ent='.$ligne[0].'">
                      <div class="col s3 m2 l1">
                        <div class=""><img src="'.$ligne[3].'" class="imgPadBr z-depth-2" alt="image entreprise"></div>
                      </div>
                    </a>';
            }
          }
          ?>
        </div>

      </div>
      <?php
      include("footer.php");
      ?>
    </body>
</html>
