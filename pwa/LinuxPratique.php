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
        <meta name="description" content="B-boost, Linux Pratique">
        <meta name="keywords" content="accueil, bienvenue, B-boost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost Linux Pratique</title>
        <?php
        include("header.php");
        ?>
    </head>

    <body>

      <?php
      $a="pagesEn/LinuxPratiqueEn.php";//utilise dans la navbar pour clic sur bouton
      include("navbar.php");
      /*Affichage des erreurs*/
      // error_reporting(E_ALL);
      // ini_set('display_errors',TRUE);
      // ini_set('display_startup_errors',TRUE);
      /**/
      ?>
      <div>
        <p></p>
      </div>
      <img src="assets/images/banniere-LP-970x90-2.jpg" alt="banniere Linux Pratique" class="hide-on-large-only">
      <div class="container">
        <div class="row hide-on-med-and-down">
          <div class="col s12 m12 l10 offset-l1"><img src="assets/images/banniere-LP-970x90-2.jpg" alt="banniere Linux Pratique"></div>
        </div>
        <div class="row">
          <div class="col s12 m10 l10 offset-m1 offset-l1">
            <h3 class="hide-on-med-and-down">Plus de 25 ans d’expérience dans l’édition de contenus informatiques techniques</h3>
            <h5 class="hide-on-large-only">Plus de 25 ans d’expérience dans l’édition de contenus informatiques techniques</h5>
            <p>Éditeur de presse spécialisé dans l’open source, la programmation, la cybersécurité,
              l’électronique et l’embarqué, les Éditions Diamond ont développé depuis 1995 une offre
              rédactionnelle technique de qualité, basée sur les retours d’expériences de professionnels
              et de passionnés du milieu. Nos magazines offrent une réponse unique aux besoins informationnels :</p>
              <ul class="browser-default">des développeurs avec <b class="orange-text">GNU/Linux Magazine</b></ul>
              <ul class="browser-default">des administrateurs système et réseau avec <b class="orange-text" >Linux Pratique</b></ul>
              <ul class="browser-default">des experts en sécurité informatique avec <b class="orange-text">MISC</b></ul>
              <ul class="browser-default">des professionnels et passionnés d’électronique numérique et d’embarqué avec <b class="orange-text">Hackable</b></ul>
          </div>
          <div class="col s12 m10 l10 offset-m1 offset-l1">
            <h3 class="hide-on-med-and-down">Du papier au numérique avec Connect</h3>
            <h5 class="hide-on-large-only">Du papier au numérique avec Connect</h5>
            <p>Créée dès 2013, la plateforme de documentation numérique Connect accompagne les professionnels de l’IT au travers de plus de 6000 articles techniques rédigés par plus de 1200 experts, et issus de nos publications.
Elle est reconnue comme une référence incontournable en termes de documentation informatique en France, et bénéficie de la confiance de bon nombre de professionnels issus de divers secteurs : services informatiques, collectivités, universités et grandes écoles, banques, ministères, centres de recherche…
Continuellement mise à jour, elle constitue un outil de veille efficace pour les professionnels qui souhaitent s’informer et se former aux dernières technologies dans les domaines suivants :</p>
              <ul class="browser-default">Cybersécurité offensive & défensive</ul>
              <ul class="browser-default">Intelligence artificielle, code, algo, web</ul>
              <ul class="browser-default">Administration système & réseau Linux</ul>
              <ul class="browser-default">Électronique, embarqué, IoT, radio</ul>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m3 l3 offset-m1 offset-l1">
            <div><p class="orange-text"><b>Dirigeant : </b></p></div>
            <p>Arnaud METZLER</p>
          </div>
          <div class="col s12 m5 l5" >
            <div><span class="orange-text"><i class="fas fa-map-marker-alt fa-1x"></i></span> 12 Place du Capitaine Dreyfus 68000 COLMAR</span></div>
          </div>
          <div class="col s12 m3 l3 " >
            <p><b>Suivre</b> <?php if(isset($entTab) && $entTab[1]!=null){echo strtoupper($entTab[1]);} ?> :</p>
            <div class="row center-align">
              <div class="col s4 m2 l3"><a href="https://www.linkedin.com/company/editions-diamond/" target="_blank" class="orange-text"><i class="fab fa-linkedin-in  fa-2x"></i></a></div>
              <div class="col s4 m2 l3 offset-m1"><a href="https://www.facebook.com/linuxpratique/" target="_blank" class="orange-text"><i class="fab fa-twitter  fa-2x"></i></a></div>
              <div class="col s4 m2 l3 offset-m1"><a href="https://twitter.com/linuxpratique" target="_blank" class="orange-text"><i class="fab fa-facebook-f  fa-2x"></i></a></div>
            </div>
          </div>
        </div>
        <div class="row hide-on-med-and-down">
          <div class="col s12 m12 l10 offset-l1"><img src="assets/images/banniere-LP-970x90-2.jpg" alt="banniere Linux Pratique"></div>
        </div>

      </div><!--END container-->
      <img src="assets/images/banniere-LP-970x90-2.jpg" alt="banniere Linux Pratique" class="hide-on-large-only">

      <?php
      include("footer.php");
      ?>
    </body>
</html>
