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
        <meta name="description" content="B-boost, participant">
        <meta name="keywords" content="participant, speaker, intervenant, invité, B-boost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost participant</title>

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
      $speak = "7";
      if (isset ($_GET["speak"])) {
        $speak = strip_tags($_GET["speak"]);
      }
      $persTab=$manag->persTab($speak);
    }catch(PDOexception $e){
      die('Erreur :' .$e->getMessage());//arret du script et message
    }
    ?>

    <body>
      <?php
      $a="pagesEn/participantsEn.php?speak=".$speak;
      include("navbar.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container">
        <div class="row">
          <div class="col s12 m8 l9">
            <h2 class=""><?php echo strtoupper($manag->filtreAccents($persTab[1])); ?></h2>
            <h3 class=""><i><?php echo ucfirst($persTab[2]); ?></i></h3>
            <br/>
            <p class="" >
              <?php if(isset($persTab[5]) && !empty($persTab[5])){echo $manag->formatting($persTab[5]);}else{echo "A venir ...";}?>
            </p>
          </div>
          <div class="col s10 m4 l3 offset-s1">
            <img src="<?php echo $persTab[3]; ?>" class="z-depth-4 imgPad" alt="image participant">
          </div>
        </div>
        <div class="row">
          <div class="col s12 m11 l11">
             <?php
             if(isset($speak)){
               $speakerProgTab=$manag->speakerProgTab($speak);
               // echo"nbr conf :".sizeof($speakerProgTab)."<br/>";
               // var_dump($speakerProgTab);
             }
             if(!empty($speakerProgTab)){
               echo '<h4 class="flow-text">Speaker dans les programmes suivants&nbsp;:</h4>';
             }
             ?>
              <!--boucle ici-->
              <div class="">
                <?php
                if(!empty($speakerProgTab)){
                  foreach($speakerProgTab as $ligne){
                    echo '<p class=""><i class="fas fa-circle fa-xs"></i>&nbsp;'.$ligne[0].'</p>';
                  }
                }
                ?>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m11 l11">
             <?php
             if(isset($speak)){
               $interProgTab=$manag->interProgTab($speak);
               // echo"nbr inter :".sizeof($interProgTab)."<br/>";
               // var_dump($speakerProgTab);
             }
             if(!empty($interProgTab)){
               echo '<h4 class="flow-text">Intervient dans les programmes suivants&nbsp;:</h4>';
             }
             ?>
              <!--boucle ici-->
              <div class="">
                <?php
                if(!empty($interProgTab)){
                  foreach($interProgTab as $ligne){
                    echo '<p class=""><i class="fas fa-circle fa-xs"></i>&nbsp;'.$ligne[0].'</p>';
                  }
                }
                ?>
              </div>
          </div>
        </div>
      </div><!--ENDcontainer-->

      <?php
      include("footer.php");
      ?>
    </body>
</html>
