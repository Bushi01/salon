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
<!--<div class="container" id="begin"--> <!--Nav bar-->
    <nav class="nav-extended linear-gradient" id="begin">
      <div class="nav-wrapper">
        <a href="accueilEn.php" class="brand-logo"><img src="../assets/icons/LogoBB21-C-FT-500.png" class="img45 pad10 hide-on-med-and-down" alt="logo"></a>
        <a href="accueilEn.php" class="brand-logo center-align"><img src="../assets/icons/LogoBB21-C-FT-500.png" class="img55 pad10 hide-on-large-only hide-on-small-only" alt="logo"></a>
        <a href="accueilEn.php" class="brand-logo center-align"><img src="../assets/icons/LogoBB21-C-FT-500.png" class="pad10 hide-on-med-and-up" alt="logo"></a>
        <!--Menu-->
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars fa-lg"></i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="infosEn.php">GENERAL INFORMATION</a></li>
          <li><a href="conventionEn.php">Convention</a></li>
          <li><a href="listeEntreprisesEn.php">Companies</a></li>
          <li><a href="orgaEn.php">Organisation</a></li>
          <li><a href="soutiensEn.php">Sponsors</a></li>
          <li><a href="partenairesEn.php">Partners</a></li>
          <li><a href="../galerie.php">Galery</a></li>
        </ul>
        <!--ENDmenu-->
      </div>
      <!-- <div class="right-align">
      <p id="offline" class="red-text left-align material-icons" hidden> wifi_lock<p>
      <p id="online" class="deep-purple-text left-align material-icons"> wifi<p>
      </div> -->
      <div class="nav-content left-align">
        <ul class="tabs tabs-transparent left-align"><!--class="active"-->
          <li class="tab left-align"><a class="left-align" href="planEn.php">Exhibitors</a></li>
          <?php
          /*affichage de la page programme en fonction du jour - display of the program page according to the day*/
          $date1=time();
          $date2=strtotime("14-10-2021");
          $href= 'href="programme14En.php"';
          if($date1>$date2){$href= 'href="programme15En.php"';}
          ?>
          <li class='tab left-align'><a class='' <?php echo $href; ?>>Program</a></li>
          <li class="tab disable"><a class="" href="tempsFortsEn.php">Highlights</a></li>
          <!-- <li class="en" style="display:none"><a id="enBtn" class="btn-floating btn-small waves-effect waves-light red" href="pagesEn/accueilEn.php"><img class="" src="assets/icons/enFlag-100.png"></a></li> -->
          <li class="fr" style=""><a id="frBtn" class="btn-floating btn-small waves-effect waves-light red" href="<?php echo $a;?>"><img class="" src="../assets/icons/frFlag-100.png"></a></li>
        </ul>
      </div>
    </nav>
  <!--Burger-->
  <ul class="sidenav" id="mobile-demo"><!--id=data-target-->
    <li><a href="infosEn.php"><b>GENERAL INFORMATION</b></a></li>
    <li><a href="conventionEn.php">Convention</a></li>
    <li><a href="listeEntreprisesEn.php">Companies</a></li>
    <li><a href="orgaEn.php">Organisation</a></li>
    <li><a href="soutiensEn.php">Sponsors</a></li>
    <li><a href="partenairesEn.php">Partners</a></li>
    <li><a href="../galerie.php">Galery</a></li>
  </ul>
  <!--ENDburger-->
<!--</div>-->
