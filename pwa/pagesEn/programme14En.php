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
        <meta name="description" content="B-boost, the program of October 14">
        <meta name="keywords" content="B-boost, open source, salon,event, La Rochelle, program, 14 october">
        <meta name="author" content="Chlo">
        <title>B-boost, the program of October 14</title>
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
      $manag=new Manager(new Connection());
    }catch(PDOexception $e){
      die('Erreur :' .$e->getTraceAsString());//arret du script et trace
    }
    ?>

    <body>
      <?php
      $a="../programme14.php";
      include("navbarEn.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container" id="begin">
        <div class="row hide-on-small-only">
          <div class="col s8 m4 l2 offset-m4 offset-l5"><h2 class="center-align">October 14</h2></div>
          <div class="col s1 m1 l1 offset-s1 offset-m2 offset-l4">
            <a href="programme15En.php" class="">
              <div class="valign-wrapper">
                <div class=""><h2 class="">15</h2></div>
                <div class=""><i class="fas fa-chevron-right fa-2x"></i></div>
              </div>
            </a>
          </div>
        </div>
        <div class="row hide-on-med-and-up">
          <div class="col s8 m4 l2 offset-m4 offset-l5"><h2 class="">Octobre 14</h2></div>
          <div class="col s1 m1 l1 offset-m2 offset-l3">
            <a href="programme15En.php" class="">
              <div class="valign-wrapper">
                <div class=""><h2>15</h2></div>
                <div class=""><i class="fas fa-chevron-right fa-2x"></i></div>
              </div>
            </a>
          </div>
        </div>
        <div class="card"><h4 class="center-align"><a href="listeConferenciers.php">List of speakers</a></h4></div>
        <div class="row center card linear-gradient">
          <div class="col s3 m3 l3"><p class="center-align"><a class="text-white" href="#s1">SLOT 1</a></p></div>
          <div class="col s3 m3 l3"><p class="center-align"><a class="text-white" href="#s2">SLOT 2</a></p></div>
          <div class="col s3 m3 l3"><p class="center-align"><a class="text-white" href="#s3">SLOT 3</a></p></div>
          <div class="col s3 m3 l3"><p class="center-align"><a class="text-white" href="#s4">SLOT 4</a></p></div>
        </div>

        <table id="s1" class="striped"><!--class="striped centered responsive-table"-->
         <thead>
           <tr>
               <th class="pink-text">Schedules</th>
               <th class="pink-text">Slot 1</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>09h30</td>
             <td>
               <a id="111" href="<?php echo 'programmeEn.php?num=111'; ?>">
                 <?php
                 $slot= $manag->slotTab(111);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>10h30</td>
             <td>
               <a id="121" href="<?php echo 'programmeEn.php?num=121'; ?>">
                  <?php
                  $slot= $manag->slotTab(121);
                  $prog= $manag->progTab($slot[3]);
                  ?>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                    <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                    <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                  </div>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                    <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                  </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>11h30</td>
             <td>
               <a id="131" href="<?php echo 'programmeEn.php?num=131'; ?>">
                 <?php
                 $slot= $manag->slotTab(131);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>14h00</td>
             <td>
               <a id="141" href="<?php echo 'programmeEn.php?num=141'; ?>">
                 <?php
                 $slot= $manag->slotTab(141);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>15h00</td>
             <td>
               <a id="151" href="<?php echo 'programmeEn.php?num=151'; ?>">
                 <?php
                 $slot= $manag->slotTab(151);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>16h00</td>
             <td>
               <a id="161" href="<?php echo 'programmeEn.php?num=161'; ?>">
                 <?php
                 $slot= $manag->slotTab(161);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
         </tbody>
        </table>
        <div class="container center-align"><a href="#begin" class="black-text"><i class="fa fa-angle-up  fa-2x"></i></a></div>
        <table id="s2" class="striped">
          <thead>
            <tr>
                <th class="pink-text">Schedules</th>
                <th class="pink-text">Slot 2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>09h30</td>
              <td>
                <a id="112" href="<?php echo 'programmeEn.php?num=112'; ?>">
                  <?php
                  $slot= $manag->slotTab(112);
                  $prog= $manag->progTab($slot[3]);
                  ?>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                    <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                    <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                  </div>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                    <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                  </div>
                </a>
              </td>
            </tr>
            <tr>
              <td>10h30</td>
              <td>
                <a id="122" href="<?php echo 'programmeEn.php?num=122'; ?>">
                  <?php
                  $slot= $manag->slotTab(122);
                  $prog= $manag->progTab($slot[3]);
                  ?>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                    <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                    <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                  </div>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                    <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                  </div>
                </a>
              </td>
            </tr>
            <tr>
              <td>11h30</td>
              <td>
                <a id="132" href="<?php echo 'programmeEn.php?num=132'; ?>">
                  <?php
                  $slot= $manag->slotTab(132);
                  $prog= $manag->progTab($slot[3]);
                  ?>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                    <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                    <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                  </div>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                    <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                  </div>
                </a>
              </td>
            </tr>
            <tr>
              <td>14h00</td>
              <td>
                <a id="142" href="<?php echo 'programmeEn.php?num=142'; ?>">
                  <?php
                  $slot= $manag->slotTab(142);
                  $prog= $manag->progTab($slot[3]);
                  ?>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                    <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                    <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                  </div>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                    <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                  </div>
                </a>
              </td>
            </tr>
            <tr>
              <td>15h00</td>
              <td>
                <a id="152" href="<?php echo 'programmeEn.php?num=152'; ?>">
                  <?php
                  $slot= $manag->slotTab(152);
                  $prog= $manag->progTab($slot[3]);
                  ?>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                    <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                    <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                  </div>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                    <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                  </div>
                </a>
              </td>
            </tr>
            <tr>
              <td>16h00</td>
              <td>
                <a id="162" href="<?php echo 'programmeEn.php?num=162'; ?>">
                  <?php
                  $slot= $manag->slotTab(162);
                  $prog= $manag->progTab($slot[3]);
                  ?>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                    <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                    <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                  </div>
                  <div class ="row mb0">
                    <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                    <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                  </div>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="container center-align"><a href="#begin" class="black-text"><i class="fa fa-angle-up  fa-2x"></i></a></div>
        <table id="s3" class="striped">
         <thead class="">
           <tr>
               <th class="pink-text">Scheduless</th>
               <th class="pink-text">Slot 3</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>09h30</td>
             <td>
               <a id="113" href="<?php echo 'programmeEn.php?num=113'; ?>">
                 <?php
                 $slot= $manag->slotTab(113);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>10h30</td>
             <td>
               <a id="123" href="<?php echo 'programmeEn.php?num=123'; ?>">
                 <?php
                 $slot= $manag->slotTab(123);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>11h30</td>
             <td>
               <a id="133" href="<?php echo 'programmeEn.php?num=133'; ?>">
                 <?php
                 $slot= $manag->slotTab(133);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>14h00</td>
             <td>
               <a id="143" href="<?php echo 'programmeEn.php?num=143'; ?>">
                 <?php
                 $slot= $manag->slotTab(143);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>15h00</td>
             <td>
               <a id="153" href="<?php echo 'programmeEn.php?num=153'; ?>">
                 <?php
                 $slot= $manag->slotTab(153);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <tr>
             <td>16h00</td>
             <td>
               <a id="163" href="<?php echo 'programmeEn.php?num=163'; ?>">
                 <?php
                 $slot= $manag->slotTab(163);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
         </tbody>
        </table>
        <div class="container center-align"><a href="#begin" class="black-text"><i class="fa fa-angle-up  fa-2x"></i></a></div>
        <table id="s4" class="striped">
         <thead class="">
           <tr>
               <th class="pink-text">Scheduless</th>
               <th class="pink-text">Slot 4</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>09h30</td>
             <td>
               <a id="114" href="<?php echo 'programmeEn.php?num=114'; ?>">
                 <?php
                 $slot= $manag->slotTab(114);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <!-- <tr>
             <td>10h30</td>
             <td>
               <a id="124" href="<?php echo 'programmeEn.php?num=124'; ?>">
                 <?php
                 $slot= $manag->slotTab(124);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr> -->
           <!-- <tr>
             <td>11h30</td>
             <td>
               <a id="134" href="<?php echo 'programmeEn.php?num=134'; ?>">
                 <?php
                 $slot= $manag->slotTab(134);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr> -->
           <!-- <tr>
             <td>14h00</td>
             <td>
               <a id="144" href="<?php echo 'programmeEn.php?num=144'; ?>">
                 <?php
                 $slot= $manag->slotTab(144);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr> -->
           <tr>
             <td>15h00</td>
             <td>
               <a id="154" href="<?php echo 'programmeEn.php?num=154'; ?>">
                 <?php
                 $slot= $manag->slotTab(154);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr>
           <!-- <tr>
             <td>16h00</td>
             <td>
               <a id="164" href="<?php echo 'programmeEn.php?num=164'; ?>">
                 <?php
                 $slot= $manag->slotTab(164);
                 $prog= $manag->progTab($slot[3]);
                 ?>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb5 mt5"><b><?php $manag->titreProgEn($slot[3]); ?></b></p></div>
                   <div class="col s7 m3 l3 offset-m1 offset-l1"><p class="mb5 mt5"><?php if(isset($prog[6])){$manag->prenomSpeak($prog[6]);} echo " "; if(isset($prog[6])){$manag->nomSpeak($prog[6]);} ?></p></div>
                   <div class="col s5 m2 l2"><p class="mb0 mt0 right-align"><img class="responsive-img img40" src="../<?php $manag->themeProg($slot[3]);?>" alt="theme"></p></div>
                 </div>
                 <div class ="row mb0">
                   <div class="col s12 m6 l6"><p class="mb0 mt0"><?php if(!empty($slot[4])){echo "room : ".$slot[4];} ?></p></div>
                   <div class="col s12 m6 l6"><p class="mb5 mt5 right-align"><i><?php $manag->progTypeEn($slot[3]); ?></i></p></div>
                 </div>
               </a>
             </td>
           </tr> -->
         </tbody>
        </table>
        <div class="container center-align"><a href="#begin" class="black-text"><i class="fa fa-angle-up  fa-2x"></i></a></div>
        </div>
        <br/>
        <br/>
      </div>
      <?php
      include("footerEn.php");
      ?>
    </body>
</html>
