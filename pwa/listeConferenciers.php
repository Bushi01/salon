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
        <meta name="description" content="B-boost, les conférenciers">
        <meta name="keywords" content="participants, La liste, B-boost, open source, salon, événement open source, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost les conférenciers</title>

        <?php
        include("header.php");
        ?>
    </head>

    <?php
    try{
      /*Affichage des erreurs*/
      error_reporting(E_ALL);
      ini_set('display_errors',TRUE);
      ini_set('display_startup_errors',TRUE);
      /**/
      include_once'Manager.php';
      $manag = new Manager(new Connection());
    }catch(PDOexception $e){
      die('Erreur :' .$e->getTraceAsString());//arret du script et trace
    }
    ?>

    <body>
      <?php
      $a="pagesEn/listeConferenciersEn.php";
      include("navbar.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container">
        <div>
          <h3 class="center-align">Liste des conférenciers</h3>
        </div>
        <div class="row">
          <!--Boucle ici-->
          <?php
          $allSpeakerTab=$manag->allSpeakerTab();
          if(!empty($allSpeakerTab)){
            foreach($allSpeakerTab as $ligne){
              $pers = $manag->persTab($ligne[0]);
              $srcPhoto = $pers[3];
              $nomSpeak = strtoupper($pers[1]);
              $prenomSpeak = $manag->majuscule($pers[2]);
              echo '<a href="participants.php?speak='.$pers[0].'">
                      <div class="col s4 m2 l2">
                        <div class=""><img src="'.$srcPhoto.'" class="z-depth-3" alt="photographie '.$nomSpeak.'"></div>
                        <div class=""><p class="icons"><i>'.$nomSpeak.'</i></p></div>
                        <div class=""><p class="icons"><i>'.$prenomSpeak.'</i></p></div>
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
