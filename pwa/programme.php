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
        <meta name="description" content="B-boost, programme">
        <meta name="keywords" content="programme, B-boost, conférence, table ronde, keynote, atelier, open source, salon, événement, La Rochelle, tables rondes, ateliers, keynotes, conférences">
        <meta name="author" content="Chlo">
        <title>B-boost, programme</title>

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

      $num = 111;
      if (isset ($_GET["num"])) {
        $num = strip_tags($_GET["num"]);
        $slot= $manag->slotTab($num);
      }
      if(isset($slot[3])){$prog= $manag->progTab($slot[3]);}
      if(isset($prog[6])){$pers= $manag->persTab($prog[6]);}
      $speak="";
      if(isset($prog[6])){$speak=$prog[6];}
    }catch(PDOexception $e){
      die('Erreur :' .$e->getTraceAsString());//arret du script et trace
    }
    ?>

    <body>
      <?php
      if (isset ($_GET["num"])) {
      $a="pagesEn/programmeEn.php?num=".$num;
      }
      include("navbar.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container">

      	<div class="row"><!--L'intervenant principal-->

          <div class="col s12 m9 l7 offset-l1">
            <h4 class="right-align">
                    <?php
                    if(isset($slot[1])){
                      // echo $slot[1];
                      if($slot[1]=="2021-10-14"){
                        echo "14 octobre";
                      }elseif($slot[1]=="2021-10-15"){
                        echo "15 octobre";
                      }
                    }
                    ?>
            </h4>
            <div class="row">
              <div class="col s m l">
                <p><b><?php if(isset($slot[4])){echo $slot[4];} if(isset($slot[2])){echo"</b> - ".str_replace(":","h",substr($slot[2],0,5));} ?></p>
                <h3 class=""><?php $manag->titreProg($slot[3]); ?></h3>
              </div>
              <div>
                <p class="right-align"><img class="responsive-img img15" src="<?php $manag->themeProg($slot[3]); ?>" alt="theme"></p>
                <p class="right-align"><?php $manag->progType($slot[3]); ?></p>
              </div>
            </div>
            <p class=""><?php if(isset($prog[4])&& !empty($prog[4])){echo $manag->formatting($prog[4]);}else{echo "A venir ...";} ?></p>
          </div>

          <?php echo '<a href="participants.php?speak='.$speak.'">'?>
          <div class="col s10 m3 l2 offset-s1 offset-l1">
            <div class="row">
              <div class="col s12 m11 l11 offset-m1 offset-l1"><img src="<?php if(isset($pers[3])){echo $pers[3];}else{echo "assets/images/avatar.jpg";}  ?>" class="z-depth-3" alt="image participant"></div>
              <div class="col s12 m11 l11 offset-m1 offset-l1"><h5 id="pname"><i><?php $manag->nomSpeak($speak); ?></i></h5></div>
              <div class="col s12 m11 l11 offset-m1 offset-l1"><p class="mt0 mb0"><i><?php $manag->prenomSpeak($speak); ?></i></p></div>
            </div>
          </div>
          <?php echo '</a>'?>
        </div>
        <div class="row"><!--intervenants supplementaires-->
          <div class="col s12 m12 l10 offset-l1">
            <!--Boucle ici-->
            <?php
            if(isset($slot[3])){
              $interPersTab=$manag->interPersTab($slot[3]);
              // print_r($interPersTab);
            }
            $persTab = array();

            if(!empty($interPersTab)){
              foreach($interPersTab as $ligne){
                $inter = $manag->persTab($ligne[0]);
                $srcPhoto = $inter[3];
                $nomSpeak = strtoupper($manag->filtreAccents($inter[1]));
                $prenomSpeak = $manag->majuscule($inter[2]);
                $persTab[]= array('inter'=>$inter,'photo'=>$srcPhoto,'nom'=>$nomSpeak,'prenom'=>$prenomSpeak);
              }
            }
            $persTab=$manag->array_sort($persTab,'nom',SORT_ASC);
            // print_r($persTab);
            foreach($persTab as $key){
              // $id=$key['inter']['0'];
              echo '<a href="participants.php?speak='.$key['inter']['0'].'">
                      <div class="col s6 m2 l2">
                        <div class=""><img src="'.$key['photo'].'" class="z-depth-4" alt="image participant"></div>
                        <div class=""><p><i>'.$key['nom'].'</i></p></div>
                        <div class=""><p class=""><i>'.$key['prenom'].'</i></p></div>
                      </div>
                    </a>';
            }

            ?>
          </div>
        </div>
        <!--intervenants supplementaires non ordonnes-->
        <!-- <div class="row">
          <div class="col s12 m12 l10 offset-l1"> -->
            <?php
            // if(isset($slot[3])){
            //   $interPersTab=$manag->interPersTab($slot[3]);
            // }
            // if(!empty($interPersTab)){
            //   foreach($interPersTab as $ligne){
            //     $inter = $manag->persTab($ligne[0]);
            //     $srcPhoto = $inter[3];
            //     $nomSpeak = strtoupper($manag->filtreAccents($inter[1]));
            //     $prenomSpeak = $manag->majuscule($inter[2]);
            //     echo '<a href="participants.php?speak='.$inter[0].'">
            //             <div class="col s6 m2 l2">
            //               <div class=""><img src="'.$srcPhoto.'" class="z-depth-4" alt="image participant"></div>
            //               <div class=""><p><i>'.$nomSpeak.'</i></p></div>
            //               <div class=""><p class=""><i>'.$prenomSpeak.'</i></p></div>
            //             </div>
            //           </a>';
            //   }
            // }
            ?>
          <!-- </div>
        </div> -->

      </div>
      <?php
      include("footer.php");
      ?>
    </body>
</html>
