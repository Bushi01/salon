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
        <meta name="description" content="B-boost, Linux Pratique">
        <meta name="keywords" content="accueil, bienvenue, B-boost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost Linux Pratique</title>
        <?php
        include("headerEn.php");
        ?>
    </head>

    <body>

      <?php
      $a="../LinuxPratique.php";//utilise dans la navbar pour clic sur bouton
      include("navbarEn.php");
      /*Affichage des erreurs*/
      // error_reporting(E_ALL);
      // ini_set('display_errors',TRUE);
      // ini_set('display_startup_errors',TRUE);
      /**/
      ?>
      <div>
        <p></p>
      </div>
      <img src="../assets/images/banniere-LP-970x90-2.jpg" alt="banniere Linux Pratique" class="hide-on-large-only">
      <div class="container">
        <div class="row hide-on-med-and-down">
          <div class="col s12 m12 l10 offset-l1"><img src="../assets/images/banniere-LP-970x90-2.jpg" alt="banniere Linux Pratique"></div>
        </div>
        <div class="row">
          <div class="col s12 m10 l10 offset-m1 offset-l1">
            <h3>More than 25 years of experience in technical IT content publishing</h3>
            <p>As a press publisher specialized in open source, programming, cybersecurity, electronics and embedded systems, Diamond Publishing has developed since 1995 a high quality technical editorial offer, based on the feedback of professionals and enthusiasts in the field. Our magazines offer a unique response to the informational needs of :
            </p>
              <ul class="browser-default">developers with <b class="orange-text">GNU/Linux Magazine</b></ul>
              <ul class="browser-default">system and network administrators <b class="orange-text" >Linux Pratique</b></ul>
              <ul class="browser-default">computer security experts <b class="orange-text">MISC</b></ul>
              <ul class="browser-default">professionals and enthusiasts of digital and embedded electronics with <b class="orange-text">Hackable</b></ul>
          </div>
          <div class="col s12 m10 l10 offset-m1 offset-l1">
            <h3>From paper to digital with Connect</h3>
            <p>Created in 2013, the Connect digital documentation platform supports IT professionals through more than 6,000 technical articles written by more than 1,200 experts and from our publications.
It is recognized as an essential reference in terms of IT documentation in France, and is trusted by a large number of professionals from various sectors: IT departments, local authorities, universities and colleges, banks, ministries, research centers...
            </p>
              <ul class="browser-default">Cybersécurité offensive & défensive</ul>
              <ul class="browser-default">Artificial intelligence, code, algo, web</ul>
              <ul class="browser-default">Administration système & réseau Linux</ul>
              <ul class="browser-default"> Électronique, embarqué, IoT, radio</ul>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m3 l3 offset-m1 offset-l1">
            <div><p class="orange-text"><b>Manager : </b></p></div>
            <p>Arnaud METZLER</p>
          </div>
          <div class="col s12 m5 l5" >
            <div><span class="orange-text"><i class="fas fa-map-marker-alt fa-1x orange-text"></i></span> 12 Place du Capitaine Dreyfus 68000 COLMAR</p></div>
          </div>
          <div class="col s12 m3 l3 " >
            <p><b>Follow</b> <?php if(isset($entTab) && $entTab[1]!=null){echo strtoupper($entTab[1]);} ?> :</p>
            <div class="row center-align">
              <div class="col s4 m2 l3"><a href="https://www.linkedin.com/company/editions-diamond/" target="_blank" class="orange-text"><i class="fab fa-linkedin-in  fa-2x"></i></a></div>
              <div class="col s4 m2 l3 offset-m1"><a href="https://www.facebook.com/linuxpratique/" target="_blank" class="orange-text"><i class="fab fa-twitter  fa-2x"></i></a></div>
              <div class="col s4 m2 l3 offset-m1"><a href="https://twitter.com/linuxpratique" target="_blank" class="orange-text"><i class="fab fa-facebook-f  fa-2x"></i></a></div>
            </div>
          </div>
        </div>
        <div class="row hide-on-med-and-down">
          <div class="col s12 m12 l10 offset-l1"><img src="../assets/images/banniere-LP-970x90-2.jpg" alt="banniere Linux Pratique"></div>
        </div>

      </div><!--END container-->
      <img src="../assets/images/banniere-LP-970x90-2.jpg" alt="banniere Linux Pratique" class="hide-on-large-only">

      <?php
      include("footerEn.php");
      ?>
    </body>
</html>
