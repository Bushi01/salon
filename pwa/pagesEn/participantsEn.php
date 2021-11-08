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
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="B-boost, participant">
        <meta name="keywords" content="participant, speaker, intervenant, invité, B-boost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost participant</title>

        <?php
        include("headerEn.php");
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
      $speak = "";
      if (isset ($_GET["speak"])) {
        $speak = strip_tags($_GET["speak"]);
      }
      // echo "participant id :".$speak;
      $persTab=$manag->persTab($speak);
    }catch(PDOexception $e){
      die('Erreur :' .$e->getMessage());//arret du script et message
    }
    ?>

    <body>
      <?php
      $a="../participants.php?speak=".$speak;
      include("navbarEn.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container">
        <div class="row">
          <div class="col s12 m8 l9">
            <h2 class=""><?php echo strtoupper($persTab[1]); ?></h2>
            <h3 class=""><i><?php echo ucfirst($persTab[2]); ?></i></h3>
            <br/>
            <p class="" >
              <?php if(isset($persTab[5]) && !empty($persTab[6])){echo $manag->formatting($persTab[6]);}else{echo "Coming soon ...";}?>
            </p>
          </div>
          <div class="col s10 m4 l3 offset-s1">
            <img src="../<?php echo $persTab[3]; ?>" class="z-depth-4 imgPad" alt="image participant">
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
              echo '<h4 class="flow-text">Speaker in the following programmes&nbsp;:</h4>';
            }
            ?>
             <!--boucle ici-->
             <div class="">
               <?php
               if(!empty($speakerProgTab)){
                 foreach($speakerProgTab as $ligne){
                   echo '<p class=""><i class="fas fa-circle fa-xs"></i>&nbsp;'.$ligne[1].'</p>';
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
                 // echo"nbr inter :".sizeof($sinterProgTab)."<br/>";
                 // var_dump($interProgTab);
               }
               if(!empty($interProgTab)){
                 echo '<h4 class="flow-text">Involved in the following programmess&nbsp;:</h4>';
               }
               ?>
                <!--boucle ici-->
                <div class="">
                  <?php
                  if(!empty($interProgTab)){
                    foreach($interProgTab as $ligne){
                      echo '<p class=""><i class="fas fa-circle fa-xs"></i>&nbsp;'.$ligne[1].'</p>';
                    }
                  }
                  ?>
                </div>
            </div>
          </div>
        </div>
      </div><!--ENDcontainer-->

      <?php
      include("footerEn.php");
      ?>
    </body>
</html>
