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
<div class="carousel" data-indicator="true">
    <?php
      $carTab = array();
      $carTab[]= array('assets/images/LOGO-BLUEMIND.png','https://www.bluemind.net/');
      // $carTab[]= array('assets/images/LOGO-EMUNDUS.png','');
      // $carTab[]= array('assets/images/LOGO-AUKFOOD.png','');
      $carTab[]= array('assets/images/LOGO-CITEOS.png','https://www.citeos.fr/');
      // $carTab[]= array('assets/images/LOGO-EKYLIBRE.png','');
      // $carTab[]= array('assets/images/LOGO-UNITEC.png','');
      $carTab[]= array('assets/images/LOGO-WORTEKS.png','https://www.worteks.com/');
      // $carTab[]= array('assets/images/LOGO-IKOMIA.png','');
      // $carTab[]= array('assets/images/LOGO-ELZEARD.png','');
      $carTab[]= array('assets/images/LOGO-YPSI.png','https://www.ypsi.fr/');
      // $carTab[]= array('assets/images/LOGO-FACTORFX.png','');
      // $carTab[]= array('assets/images/LOGO-ERALOG.png','');
      // $carTab[]= array('assets/images/LOGO-NIORTTECH.png','https://www.niort-tech.fr/');
      $carTab[]= array('assets/images/LOGO-LINUXPRATIQUE.jpg','');
      // $carTab[]= array('assets/images/LOGO-HELIOPARC.png','');
      // $carTab[]= array('assets/images/LOGO-FAB.png','https://www.fab-perigord.fr/');
      // $carTab[]= array('assets/images/LOGO-COGNAC.png','');
      // $carTab[]= array('assets/images/LOGO-HIVENTIVE.png','');
      // $carTab[]= array('assets/images/LOGO-FABRIQUEDESMOBILITES.png','https://lafabriquedesmobilites.fr/');
      // $carTab[]= array('assets/images/LOGO-DOLICLOUD.png','');
      // $carTab[]= array('assets/images/LOGO-KAPTOR.png','');
      // $carTab[]= array('assets/images/LOGO-INR.png','https://institutnr.org/');
      // $carTab[]= array('assets/images/LOGO-INNO3.png','');
      // $carTab[]= array('assets/images/LOGO-KNOCKKNOCK.png','');
      // $carTab[]= array('assets/images/LOGO-LRTZC.png','https://www.larochelle-zerocarbone.fr/');
      // $carTab[]= array('assets/images/LOGO-ENDEROCEAN.png','');
      // $carTab[]= array('assets/images/LOGO-LENRA.png','');
      // $carTab[]= array('assets/images/LOGO-LRUNIVERSITE.png','https://www.univ-larochelle.fr/');
      // $carTab[]= array('assets/images/LOGO-AGON.png','');
      // $carTab[]= array('assets/images/LOGO-MEDIASCITE.png','');
      // $carTab[]= array('assets/images/LOGO-SOLURIS.png','https://www.soluris.fr/');
      // $carTab[]= array('assets/images/LOGO-LRT.png','');
      // $carTab[]= array('assets/images/LOGO-PARSEC.png','');
      // $carTab[]= array('assets/images/LOGO-DIGITALBAY.png','https://www.frenchdigitalbay.com/');
      // $carTab[]= array('assets/images/LOGO-PCI.png','');
      // $carTab[]= array('assets/images/LOGO-RUDDER.png','');
      // $carTab[]= array('assets/images/LOGO-OW2.png','https://www.ow2.org/');
      // $carTab[]= array('assets/images/LOGO-NODEA.png','');
      // $carTab[]= array('assets/images/LOGO-STENDHAL.png','');
      // $carTab[]= array('assets/images/LOGO-ADULLACT.png','https://adullact.org/');
      // $carTab[]= array('assets/images/LOGO-ALLIANCELIBRE.png','');
      // $carTab[]= array('assets/images/LOGO-LESIMPACTEURS.png','');
      // $carTab[]= array('assets/images/LOGO-SPN.png','https://www.spn.asso.fr/');
      // $carTab[]= array('assets/images/LOGO-MAPOTEMPO.png','');
      // $carTab[]= array('assets/images/LOGO-ROOMINTOUCH.png','');
      $carTab[]= array('assets/images/LOGO-SUDOUEST.png','https://www.sudouest.fr/');


      $l=count($carTab);
      $rand=rand(0,($l-1));
      $i=$rand;

      /*parcours du tableau à partir du nombre renvoyé par le random*/
      for ($i; $i<$l; $i++) {
          echo '<a class="carousel-item" target="_blank" href="'.$carTab[$i][1].'"><img src="../'.$carTab[$i][0].'" class="imgPadBr white"></a>';
      }
      for ($j=0; $j<$rand; $j++) {
          echo '<a class="carousel-item" target="_blank" href="'.$carTab[$j][1].'"><img src="../'.$carTab[$j][0].'" class="imgPadBr white"></a>';
      }
    ?>
</div>
