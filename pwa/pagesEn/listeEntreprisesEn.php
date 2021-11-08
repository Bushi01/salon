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
        <meta name="description" content="B-boost, the list of companies">
        <meta name="keywords" content="companies, entreprises, exposants, B-boost, open source, salon, événement, La Rochelle, stand, stands, exposants, b to b, exposer, rencontrer, rencontres, professionnel">
        <meta name="author" content="Chlo">
        <title>B-boost, the list of companies</title>

        <?php
        include("headerEn.php");
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
      $a="../listeEntreprises.php";
      include("navbarEn.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container">
        <div>
          <h3 class="center-align hide-on-small-only">List of companies present at B-boost</h3>
          <h5 class="center-align hide-on-med-and-up">List of companies</h5>
        </div>
        <div class="row">
          <div class="col s12 m6 l6 offset-m3 offset-l3">
              <div class="card"><a href="pitchEn.php"><p class="center">Programming pitch companies</p></a></div>
          </div>
        </div>
        <div class="row">
          <!--Boucle ici-->
          <?php
          // var_dump($allEntTab);
          if(!empty($allEntTab)){
            foreach($allEntTab as $ligne){
              echo '<a href="entitesEn.php?ent='.$ligne[0].'">
                      <div class="col s3 m2 l1">
                        <div class=""><img src="../'.$ligne[3].'" class="imgPadBr z-depth-2" alt="image entreprise"></div>
                      </div>
                    </a>';
            }
          }
          ?>
        </div>
      </div>
      <?php
      include("footerEn.php");
      ?>
    </body>
</html>
