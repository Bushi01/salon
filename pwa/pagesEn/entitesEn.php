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
        <meta name="description" content="B-boost, the companies">
        <meta name="keywords" content="B-boost,companies, entreprises, open source, salon, event, La Rochelle, meetings, business, stand, b to b, professional">
        <meta name="author" content="Chlo">
        <title>B-boost, the companies</title>

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
      $ent='';
      if (isset ($_GET["ent"])) {
        $ent=strip_tags($_GET["ent"]);
        $entTab=$manag->entityTab($ent);
        // var_dump($entTab);
        if(!empty($entTab)){
          $badge=$manag->isSponsor($entTab[0]);
          $stand=$manag->isExhibitor($entTab[0]);
          $persTab=$manag->persTab($entTab[12]);
        }
      }
    }catch(PDOexception $e){
      die('Erreur :' .$e->getTraceAsString());//arret du script et trace
    }
    ?>

    <body>
      <?php
      if(isset($ent)){$a="../entites.php?ent=".$ent;}
      include("navbarEn.php");
      ?>
    <div>
      <p></p>
    </div>
      <div class="container"><!--L'entreprise'-->
        <div class="row">
          <div class="col s12 m8 l8">
            <div class="row">
              <div class="col s9 m9 l9">
                <h3 class=""><?php if(isset($entTab) && $entTab[1]!=null){echo strtoupper($entTab[1]);} ?></h3>
                <p><?php if(isset($stand) && $stand!=null){echo "Booth : ".$stand;}else{echo "Non-exhibitor";}?></p>
              </div>
              <div class="col s3 m2 l2 offset-m1 offset-l1 right-align">
                <img class="" src="
                      <?php
                        if(isset($badge) && $badge=='g'){
                          echo "../assets/icons/badgesBboostGold.png";
                        }else if(isset($badge) && $badge=='s'){
                          echo "../assets/icons/badgesBboostSilver.png";
                        }else{
                          echo "../assets/icons/badgesBboostBronze.png";
                        }
                      ?>
                      " alt="badge"/>
              </div>
            </div>
            <div class="row">
              <p class=""><?php if(isset($entTab) && $entTab[8]!=null){echo $manag->formatting($entTab[8]);}else{echo"Coming soon ...";} ?></p>
            </div>
          </div>
          <div class="col s8 m3 l3 offset-s2 offset-m1 offset-l1">
            <div class="">
              <a href="
                  <?php
                    if(isset($entTab) && $entTab[6]!=null &&!empty($entTab[6])){
                      echo $entTab[6];
                    }else{
                      echo "#";
                    }
                  ?>"
                  <?php
                    if(isset($entTab) && $entTab[6]!=null &&!empty($entTab[6])){
                      echo 'target="_blank"';
                    }
                  ?>>
                    <img class="imgPadBr z-depth-3" src="../<?php if(isset($entTab)){echo $entTab[3];} ?>" alt="logo">
                </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m3 l4">
            <div><p><b>Manager : </b></p></div>
            <p><?php if(isset($persTab) && $persTab[1]!=null && $persTab[2]!=null){echo strtoupper($persTab[1])." ".ucfirst($persTab[2]);} ?></p>
          </div>
          <div class="col s12 m6 l5" >
            <div><p><i class="fas fa-map-marker-alt fa-1x"></i> <?php if(isset($entTab) && $entTab[4]!=null){echo $entTab[4];} ?></p></div>
            <?php
            if(isset($entTab) && $entTab[9]!=0){
              echo '<div><p><i class="fas fa-phone-alt fa-1x"></i> 0'.$entTab[9].'</p></div>';
            }
            ?>
            <div><p><i class="fas fa-globe fa-1x"></i>
              <a class="" href="
                                <?php
                                  if(isset($entTab) && $entTab[6]!=null && !empty($entTab[6])){
                                    echo $entTab[6];
                                  }else{
                                    echo "#";
                                  }
                                ?>"
                                  target="_blank">
                                <?php
                                  if(isset($entTab) && $entTab[6]!=null && !empty($entTab[6])){
                                    echo $entTab[6];
                                  }else{
                                    echo " ";
                                  }
                                ?>
              </a></p>
            </div>
            <?php
            if(isset($entTab) && $entTab[5]!=null){
              echo '<div><p><i class="fas fa-envelope fa-1x"></i> '.$entTab[5].'</p></div>';
            }
            ?>
          </div>
          <div class="col s12 m3 l3 " >
            <p><b>Follow</b> <?php if(isset($entTab) && $entTab[1]!=null){echo strtoupper($entTab[1]);} ?> :</p>
            <div class="row">
              <?php
              if(isset($entTab) && $entTab[11]!=null){
                echo '<div class="col s3 m2 l3 offset-s3"><a href="'.$entTab[11].'" target="_blank"><i class="fab fa-linkedin-in  fa-2x"></i></a></div>';
              }
              if(isset($entTab) && $entTab[10]!=null){
                echo '<div class="col s3 m2 l3 offset-s1 offset-m1"><a href="'.$entTab[10].'" target="_blank"><i class="fab fa-twitter  fa-2x"></i></a></div>';
              }
              ?>
            </div>
          </div>
        </div>
      </div><!--container-->

      <?php
      include("footerEn.php");
      ?>
    </body>
</html>
