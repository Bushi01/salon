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
        <meta name="description" content="B-boost, the October 15 program">
        <meta name="keywords" content="B-boost, open source, salon, event, La Rochelle, program, 15 october">
        <meta name="author" content="Chlo">
        <title>B-boost, the October 15 program</title>
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
      $a="../programme15.php";
      include("navbarEn.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container" id="begin">
        <div class="row hide-on-small-only">
          <div class="col m1 l1">
            <a href="programme14En.php" class="left-align">
              <div class="valign-wrapper">
                <div class=""><i class="fas fa-chevron-left fa-2x"></i></div>
                <div class=""></><h2 class="">14</h2></div>
              </div>
            </a>
          </div>
          <div class="col m4 l2 offset-s3 offset-m3 offset-l4"><h2 class="center-align">October 15</h2></div>
        </div>
        <div class="row hide-on-med-and-up">
          <div class="col s8"><h2 class="">October 15</h2></div>
          <div class="col s1">
            <a href="programme14en.php" class="">
              <div class="valign-wrapper">
                <div class=""><i class="fas fa-chevron-left fa-2x"></i></div>
                <div class=""><h2 class="">14</h2></div>
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
               <a id="211" href="programmeEn.php?num=211">
                 <?php
                 $slot= $manag->slotTab(211);
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
               <a id="221" href="<?php echo 'programmeEn.php?num=221'; ?>">
                  <?php
                  $slot= $manag->slotTab(221);
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
               <a id="231" href="<?php echo 'programmeEn.php?num=231'; ?>">
                 <?php
                 $slot= $manag->slotTab(231);
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
               <a id="241" href="<?php echo 'programmeEn.php?num=241'; ?>">
                 <?php
                 $slot= $manag->slotTab(241);
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
               <a id="251" href="<?php echo 'programmeEn.php?num=251'; ?>">
                 <?php
                 $slot= $manag->slotTab(251);
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
               <a id="261" href="<?php echo 'programmeEn.php?num=261'; ?>">
                 <?php
                 $slot= $manag->slotTab(261);
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
                <a id="212" href="<?php echo 'programmeEn.php?num=212'; ?>">
                  <?php
                  $slot= $manag->slotTab(212);
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
                <a id="222" href="<?php echo 'programmeEn.php?num=222'; ?>">
                  <?php
                  $slot= $manag->slotTab(222);
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
                <a id="232" href="<?php echo 'programmeEn.php?num=232'; ?>">
                  <?php
                  $slot= $manag->slotTab(232);
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
                <a id="242" href="<?php echo 'programmeEn.php?num=242'; ?>">
                  <?php
                  $slot= $manag->slotTab(242);
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
                <a id="252" href="<?php echo 'programmeEn.php?num=252'; ?>">
                  <?php
                  $slot= $manag->slotTab(252);
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
                <a id="262" href="<?php echo 'programmeEn.php?num=262'; ?>">
                  <?php
                  $slot= $manag->slotTab(262);
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
               <th class="pink-text">Schedules</th>
               <th class="pink-text">Slot 3</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>09h30</td>
             <td>
               <a id="213" href="<?php echo 'programmeEn.php?num=213'; ?>">
                 <?php
                 $slot= $manag->slotTab(213);
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
               <a id="223" href="<?php echo 'programmeEn.php?num=223'; ?>">
                 <?php
                 $slot= $manag->slotTab(223);
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
               <a id="233" href="<?php echo 'programmeEn.php?num=233'; ?>">
                 <?php
                 $slot= $manag->slotTab(233);
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
               <a id="243" href="<?php echo 'programmeEn.php?num=243'; ?>">
                 <?php
                 $slot= $manag->slotTab(243);
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
               <a id="253" href="<?php echo 'programmeEn.php?num=253'; ?>">
                 <?php
                 $slot= $manag->slotTab(253);
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
               <a id="263" href="<?php echo 'programmeEn.php?num=263'; ?>">
                 <?php
                 $slot= $manag->slotTab(263);
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
               <th class="pink-text">Schedules</th>
               <th class="pink-text">Slot 4</th>
           </tr>
         </thead>
         <tbody>
           <!-- <tr>
             <td>09h30</td>
             <td>
               <a id="214" href="<?php echo 'programmeEn.php?num=214'; ?>">
                 <?php
                 $slot= $manag->slotTab(214);
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
             <td>10h30</td>
             <td>
               <a id="224" href="<?php echo 'programmeEn.php?num=224'; ?>">
                 <?php
                 $slot= $manag->slotTab(224);
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
               <a id="234" href="<?php echo 'programmeEn.php?num=234'; ?>">
                 <?php
                 $slot= $manag->slotTab(234);
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
             <td>14h00</td>
             <td>
               <a id="244" href="<?php echo 'programmeEn.php?num=244'; ?>">
                 <?php
                 $slot= $manag->slotTab(244);
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
             <td>15h00</td>
             <td>
               <a id="254" href="<?php echo 'programmeEn.php?num=254'; ?>">
                 <?php
                 $slot= $manag->slotTab(254);
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
             <td>16h00</td>
             <td>
               <a id="264" href="<?php echo 'programmeEn.php?num=264'; ?>">
                 <?php
                 $slot= $manag->slotTab(264);
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
        </div>
        <br/>
        <br/>
      </div>

      <?php
      include("footerEn.php");
      ?>

    </body>
</html>
