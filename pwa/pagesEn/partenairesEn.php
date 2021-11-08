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
        <meta name="description" content="B-boost, partners">
        <meta name="keywords" content="parteners, partenaires, sponsors, entreprises, soutiens, convention, internationale, bienvenue, B-boost, open source, salon, professionel, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost partners</title>
        <?php
        include("headerEn.php");
        ?>
    </head>

    <body>
      <?php
      $a="../partenaires.php";
      include("navbarEn.php");
      try{
        /*Affichage des erreurs*/
        error_reporting(E_ALL);
        ini_set('display_errors',TRUE);
        ini_set('display_startup_errors',TRUE);
        /**/
        include_once'Manager.php';
        $manag = new Manager(new Connection());
      }catch(PDOexception $e){
        die('Erreur :' .$e->getMessage());//arret du script et message
      }
      ?>
            <div>
              <p></p>
            </div>
      <div class="container">
        <div class="center-align">
          <h4 class="center-align">They are partners and sponsors of the B-boost !</h4>
        </div>

        <div class="row">
          <div class="col m6 l6">
            <!--silvers-->
            <div class="card hoverable">
              <div class="card-content partenaire">
                <div class="valign-wrapper hide-on-med-and-down">
                  <div class="row">
                    <div class="col l3 offset-l3"><img class="img90" src="../assets/icons/badgesBboostSilver.png"></div>
                    <div class="col l4"><h3 class="grey-text">Silver sponsor</h3></div>
                  </div>
                </div>
                <div class="valign-wrapper hide-on-large-only">
                  <img class="img25 mr20" src="../assets/icons/badgesBboostSilver.png"><h4 class="grey-text">Silver sponsor</h4>
                </div>
              </div>
              <div class="card-content">
                <div class="row">
                  <?php
                  $allSponTab=$manag->sponsorTab();
                  foreach($allSponTab as $ligne){
                    if($ligne[14]=='s'){
                      echo'
                        <a href="'.$ligne[6].'" target="blank">
                          <div class="col s3 m3 l3">
                            <div class=""><img src="../'.$ligne[3].'" class="imgPadBr z-depth-3" alt="image entreprise"></div>
                            <div class=""><p class="icons center-align">'.strtoupper($ligne[1]).'<p></div>
                          </div>
                        </a>
                      ';
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col m6 l6">
            <!--partenaire privilèges-->
            <div class="card hoverable">
              <div class="card-content partenaire">
                <div class="valign-wrapper hide-on-med-and-down">
                  <div class="row">
                    <div class="col l4 offset-l2"><img class="img90 mb40 mt5 center-align" src="../assets/icons/iconeBb.png"></div>
                    <div class="col l6"><h3 class="pink-text">Privileged partners</h3></div>
                  </div>
                </div>
                <div class="valign-wrapper hide-on-large-only">
                  <img class="img20 mr20 mb20 mt5" src="../assets/icons/iconeBb.png"><h4 class="pink-text">Privileged partners</h4>
                </div>
              </div>
              <div class="card-content">
                <div class="row">
                  <a href="" target="blank">
                    <div class="col s3 m3 l3">
                      <div class=""><img src="../assets/images/LOGO-FAB.png" class="imgPadBr z-depth-3" alt="image FAB"></div>
                      <div class=""><p class="icons center-align">conviviality<p></div>
                    </div>
                  </a>
                  <a href="" target="blank">
                    <div class="col s3 m3 l3">
                      <div class=""><img src="../assets/images/LOGO-COGNAC.png" class="imgPadBr z-depth-3" alt="img Cognac"></div>
                      <div class=""><p class="icons center-align">conviviality<p></div>
                    </div>
                  </a>
                  <a href="" target="blank">
                    <div class="col s3 m3 l3">
                      <div class=""><img src="../assets/images/LOGO-LINUXPRATIQUE.png" class="imgPadBr z-depth-3" alt="image Linux"></div>
                      <div class=""><p class="icons center-align">media<p></div>
                    </div>
                  </a>
                  <a href="" target="blank">
                    <div class="col s3 m3 l3">
                      <div class=""><img src="../assets/images/LOGO-SUDOUEST.png" class="imgPadBr z-depth-3" alt="image SudOuest"></div>
                      <div class=""><p class="icons center-align">presse locale<p></div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!--autres partenaires-->
          <div class="card hoverable">
            <div class="card-content">
              <div class="valign-wrapper hide-on-med-and-down">
                <div class="row">
                  <div class="col l4 offset-l1"><img class="img90" src="../assets/icons/iconeBb.png"></div>
                  <div class="col l7"><h3 class="purple-text">Partenaires</h3></div>
                </div>
              </div>
              <div class="valign-wrapper hide-on-large-only">
                <img class="img15 mr20" src="../assets/icons/iconeBb.png"><h4 class="purple-text">Partenaires</h4>
              </div>
            </div>
            <div class="card-content">
              <div class="row">
                <div class="col s12 m10 l12 offset-m1 offset-l1">
                  <?php
                  $allPartTab=$manag->partnerTab();
                  foreach($allPartTab as $ligne){
                    echo'
                        <div class="col s3 m2 l1">
                          <div class=""><img src="../'.$ligne[3].'" class="imgPadBr z-depth-3" alt="image entreprise"></div>
                          <div class=""><p class="icons center-align">'.strtoupper($ligne[1]).'</p></div>
                        </div>
                      ';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <!--bronzes-->
          <!-- <div class="card hoverable">
            <div class="card-content">
              <div class="valign-wrapper hide-on-med-and-down">
                <div class="row">
                  <div class="col l3 offset-l3"><img class="img65" src="../assets/icons/badgesBboostBronze.png"></div>
                  <div class="col l4"><h3 class="brown-text">Bronze sponsor</h3></div>
                </div>
              </div>
              <div class="valign-wrapper hide-on-large-only">
                <img class="img10 mr20" src="../assets/icons/badgesBboostBronze.png"><h4 class="brown-text">Bronze sponsor</h4>
              </div>
            </div>
            <div class="card-content">
              <div class="row">
                <?php
                // $allSponTab=$manag->sponsorTab();
                // foreach($allSponTab as $ligne){
                //   if($ligne[14]=='b'){
                //     echo'
                //       <a href="'.$ligne[6].'" target="blank">
                //         <div class="col s3 m2 l1">
                //           <div class=""><img src="../'.$ligne[3].'" class="imgPadBr z-depth-3" alt="image entreprise"></div>
                //           <div class=""><p class="icons center-align">'.strtoupper($ligne[1]).'</p></div>
                //         </div>
                //       </a>
                //     ';
                //   }
                // }
                ?>
              </div>
            </div>
          </div> -->
        </div>

      </div><!--container-->

      <?php
      include("footerEn.php");
      ?>
    </body>
</html>
