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
      <meta name="description" content="Bboost, backoffice programme">
      <meta name="keywords" content="conf, Bboost, open source, salon, événement open source, LaRochelle, programme, 14 octobre">
      <meta name="author" content="Chlo">
      <title>Bboost, le back programme</title>
        <?php
        include("headerBack.php");
        ?>
  </head>

  <?php
    session_start();
    extract($_SESSION);
    if(!isset($login)){header("location:index.php");}
    try{
      /*Affichage des erreurs*/
      error_reporting(E_ALL);
      ini_set('display_errors',TRUE);
      ini_set('display_startup_errors',TRUE);
      /**/
      include_once'Action.php';
      $bdd=new Connection();
      $act=new Action($bdd);
      extract($_POST);
      // var_dump($_POST);
      if(isset($_POST["titreFr"])||isset($_POST["titre3"])){
        $insert=$act->insertProg($_POST);
      }
      if(isset($_POST["progSup"])){
        $delete=$act->deleteProg($_POST);
      }
      if(isset($_POST["slot4"])){
        $insert2=$act->insertSlot($_POST);
      }
      $message1="";
      $message2="";
      $message3="";
      $message4="";
      if(isset($insert) && $insert!=null && !empty($_POST) && isset($_POST["titreFr"])){
        $message1=$insert->toString();
      }
      if(isset($insert) && $insert!=null && !empty($_POST) && isset($_POST["titre3"])){
        $message2=$insert->toString();
      }
      if(isset($delete) && $delete!=null && !empty($_POST) && isset($_POST["progSup"])){
        $message3=$delete->toString();
      }
      if(isset($insert2) && $insert2!=null && !empty($_POST) && isset($_POST["slot4"])){
        $message4=$insert2->toString();
      }
    }catch(PDOexception $e){
      die('Erreur :' .$e->getTraceAsString());//arret du script et trace
    }
 ?>
  <body>
    <nav class="nav-extended linear-gradient" id="begin">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo"><img src="/assets/icons/LogoBBOOST21-Seul-Couleur-FS.png" class="img15 pad10 hide-on-med-and-down" alt="logo"></a>
        <a href="index.php" class="brand-logo center-align"><img src="/assets/icons/LogoBBOOST21-Seul-Couleur-FS.png" class="img55 pad10 hide-on-large-only hide-on-small-only" alt="logo"></a>
        <a href="index.php" class="brand-logo center-align"><img src="/assets/icons/LogoBBOOST21-Seul-Couleur-FS.png" class="img75 pad10 hide-on-med-and-up" alt="logo"></a>
        <!--burger-->
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <?php
          if(isset($login)){
            echo "<li><a href='Logout.php'>DECONNECTION</a></li>";
          }
          ?>
          <li><a href="https://pwa.b-boost.fr/accueil.php" target="_blank">site mobile</a></li>
          <li><a href="https://b-boost.fr/larochelle/" target="_blank">site web</a></li>
        </ul>
        <!--fin burger-->
      </div>
      <div class="nav-content">
        <ul class="tabs tabs-transparent"><!--class="active"-->
          <li class="tab"><a class="" href="back-entity.php">ENTITES</a></li>
          <li class="tab"><a class="" href="back-pers.php">PARTICIPANTS</a></li>
          <li class="tab"><a class="" href="back-prog.php">PROGRAMME</a></li>
        </ul>
      </div>
    </nav>
    <!--INburger-->
    <ul class="sidenav" id="mobile-demo"><!--id=data-target-->
      <?php
      if(isset($login)){
        echo "<li><a href='Logout.php'>DECONNECTION</a></li>";
      }
      ?>
      <li><a href="https://pwa.b-boost.fr/accueil.php" target="_blank">site mobile</a></li>
      <li><a href="https://b-boost.fr/larochelle/" target="_blank">site web</a></li>
    </ul><!--ENDburger-->

    <div class="container">
      <div>
        <h4 class="center-align">back-office des programmes</h4>
        <br/>
        <div class="row center-align">
          <div class="col s12 m3 l3"><a class="pink-text" href="#programme1">AJOUTER UN PROGRAMME</a></div>
          <div class="col s12 m3 l3"><a class="pink-text" href="#programme2" >MODIFIER UN PROGRAMME</a></div>
          <div class="col s12 m3 l3"><a class="pink-text" href="#programme3" >SUPPRIMER UN PROGRAMME</a></div>
          <div class="col s12 m3 l3"><a class="pink-text" href="#programme4" >CONFIGURER UN SLOT</a></div>
        </div>
        <div class="row center-align">
          <div class="col s12 m10 l10 offset-m1 offset-l1">
            <p class="center-align">Chaque salle de conférence a un nom de porte :<b> Richelieu, Chassiron, Ilates, Casoar, Tardone, Chanchardon, Hall Antioche, Grande Halle</b>. </p>
            <p class="center-align">Si la conférence se déroule dans une salle double (Casoar, Tardone) ou triple (Richelieu, Chassiron, Ilates), <u>il faut donner le nom de la porte d'accueil</u>.</p>
            <p class="center-align">Ce choix permet d'utiliser les salles individuellement ou non en fonction du nombre de personnes.</p>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m6 l6 offset-m3 offset-l3">
            <p class="center-align">Dénominations des slots : jour (1 ou 2) / plage horaire / slot (1,2 ou 3)</p>
            <table class="striped">
                    <thead>
                      <tr>
                          <th class="center-align">Plages horaires</th>
                          <th class="center-align">14 octobre - jour 1</th>
                          <th class="center-align">15 octobre - jour 2</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="center-align">9h30 <i>plage 1</i></td>
                        <td class="center-align"><i>slots:</i> 111 - 112 - 113 ...</td>
                        <td class="center-align"><i>slots:</i> 211 - 212 - 213 ...</td>
                      </tr>
                      <tr>
                        <td class="center-align">10h30 <i>plage 2</i></td>
                        <td class="center-align"><i>slots:</i> 121 - 122 - 123 ...</td>
                        <td class="center-align"><i>slots:</i> 221 - 222 - 223 ...</td>
                      </tr>
                      <tr>
                        <td class="center-align">11h30 <i>plage 3</i></td>
                        <td class="center-align"><i>slots:</i> 131 - 132 - 133 ...</td>
                        <td class="center-align"><i>slots:</i> 231 - 232 - 233 ...</td>
                      </tr>
                        <td class="center-align">14h00 <i>plage 4</i></td>
                        <td class="center-align"><i>slots:</i> 141 - 142 - 143 ...</td>
                        <td class="center-align"><i>slots:</i> 241 - 242 - 243 ...</td>
                      </tr>
                        <td class="center-align">15h00 <i>plage 5</i></td>
                        <td class="center-align"><i>slots:</i> 151 - 152 - 153 ...</td>
                        <td class="center-align"><i>slots:</i> 251 - 252 - 253 ...</td>
                      </tr>
                        <td class="center-align">16h00 <i>plage 6</i></td>
                        <td class="center-align"><i>slots:</i> 161 - 162 - 163 ...</td>
                        <td class="center-align"><i>slots:</i> 261 - 262 - 263 ...</td>
                      </tr>
                    </tbody>
            </table>
          </div>
        </div>
      </div>
      <br/>
      <form class="" id="programme1" name="programme1" action="back-prog.php" method="post">
        <fieldset>
          <legend class="pink-text">AJOUTER UN PROGRAMME</legend>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input id="titreFr" name="titreFr" type="text" class="validate" maxlength="100" required>
              <label for="titreFr">Titre du programme*</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12 left-align">
              <span>
                <label class="mr20">
                  <input name="theme" type="radio" value="sou" checked/>
                  <span>Souveraineté numérique et résilience</span>
                </label>
                <label class="mr20">
                  <input name="theme" type="radio" value="sob"/>
                  <span>Numérique responsable et scalabitilé</span>
                </label>
                <label class="mr20">
                  <input name="theme" type="radio" value="dat"/>
                  <span>La donnée</span>
                </label>
                <label  class="mr20">
                  <input name="theme" type="radio" value="bco"/>
                  <span>Communs numériques</span>
                </label>
                <label  class="mr20">
                  <input name="theme" type="radio" value="cyb"/>
                  <span>Cybersécurité</span>
                </label>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m5 l5">
              <select class="icons" name="speaker" required>
                <option value="" disabled selected>Speaker*</option><!--selected-->
                  <?php
                  /*boucle des speakers*/
                  $ent=$act->getPers();
                  ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textFr" name="textFr" type="textarea" class="validate" maxlength="999" size="999" data-length="999" spellcheck="true"></textarea>
              <label for="textFr">Texte de présentation en Français</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input id="titreEn" name="titreEn" type="text" class="validate" maxlength="100">
              <label for="titreEn">Titre ANGLAIS</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textEn" name="textEn" type="textarea" class="validate" maxlength="999" size="999" data-length="999"></textarea>
              <label for="textEn">Texte de présentation en ANGLAIS</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
              <input id="" name="envoi" type="submit" class="btn" value="ajouter programme">
            </div>
          </div>
          <div>
            <p>
              <?php
               echo $message1;
               ?>
            </p>
          </div>
        </fieldset>
      </form><!--ENDform1-->
      <div class="container center-align"><a href="#begin" class="text-black"><i class="fa fa-angle-up  fa-2x"></i></a><br/></div>
      <form class="" id="programme2" name="programme2" action="back-prog.php#programme2" method="post">
        <fieldset>
          <legend class="pink-text">MODIFIER UN PROGRAMME</legend>
          <p class="pink-text">Programme à modifier :</p>
          <div class="row">
            <div class="input-field col s12 m5 l5">
              <select class="icons" name="titre3" size="" required>
                <option value="" disabled selected>Programme*</option>
                <?php
                /*boucle des programmes*/
                $ent=$act->getProg();
                ?>
              </select>
            </div>
            </div>
          <p class="pink-text">Les informations à modifier :</p>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input id="titreFr2" name="titreFr2" type="text" class="validate" maxlength="100">
              <label for="titreFr2">Titre du programme</label>
            </div>
            <div class="input-field col s12 m5 l5 offset-m1 offset-l1">
              <span>
                <label class="mr20">
                  <input name="conf" type="checkbox" value="conf"/>
                  <span>Conférence</span>
                </label>
                <label class="mr20">
                  <input name="keyn" type="checkbox" value="keyn"/>
                  <span>Keynote</span>
                </label>
                <label class="mr20">
                  <input name="atel" type="checkbox" value="atel"/>
                  <span>Atelier</span>
                </label>
                <label  class="mr20">
                  <input name="trde" type="checkbox" value="trde"/>
                  <span>Table ronde</span>
                </label>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12 left-align">
              <span>
                <label class="mr20">
                  <input name="theme2" type="radio" value="sou"/>
                  <span>Souveraineté numérique et résilience</span>
                </label>
                <label class="mr20">
                  <input name="theme2" type="radio" value="sob"/>
                  <span>Numérique responsable et scalabitilé</span>
                </label>
                <label class="mr20">
                  <input name="theme2" type="radio" value="dat"/>
                  <span>La donnée</span>
                </label>
                <label  class="mr20">
                  <input name="theme2" type="radio" value="bco"/>
                  <span>Communs numériques</span>
                </label>
                <label  class="mr20">
                  <input name="theme2" type="radio" value="cyb"/>
                  <span>Cybersécurité</span>
                </label>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m5 l5">
              <select class="icons" name="speaker2">
                <option value="" disabled selected>Speaker</option><!--selected-->
                  <?php
                  /*boucle des speakers*/
                  $ent=$act->getPers();
                  ?>
              </select>
            </div>
            <div class="input-field col s12 m5 l5 offset-m1 offset-l1">
              <select class="icons" name="interv[]" multiple size="">
                <option value="" disabled>Autres participants au programme</option>
                  <?php
                  /*boucle des speakers*/
                  $ent=$act->getPers();
                  ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textFr2" name="textFr2" type="text" class="validate" maxlength="999" size="999" data-length="999" spellcheck="true"></textarea>
              <label for="textFr2">Texte de présentation en Français</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input id="titreEn2" name="titreEn2" type="text" class="validate" maxlength="100">
              <label for="titreEn2">Titre ANGLAIS</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textEn2" name="textEn2" class="validate" maxlength="999" size="999" data-length="999"></textarea>
              <label for="textEn2">Texte de présentation en ANGLAIS</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
              <input id="" name="envoi2" type="submit" class="btn" value="modifier programme">
            </div>
          </div>
          <div>
            <p>
              <?php
              echo $message2;
              ?>
            </p>
          </div>
        </fieldset>
      </form><!--ENDform2-->
      <div class="container center-align"><a href="#begin" class="text-black"><i class="fa fa-angle-up  fa-2x"></i></a><br/></div>
      <form class="" id="programme3" name="programme3" action="back-prog.php#programme3" method="post">
        <fieldset>
          <legend class="pink-text">SUPPRIMER UN PROGRAMME</legend>
          <div class="row">
              <div class="input-field col s12">
                <select class="icons" name="progSup" required>
                  <option value="" disabled selected>Programmes*</option>
                    <?php
                    /*boucle des programmes*/
                    $ent=$act->getProg();
                    ?>
                </select>
              </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
              <input id="" name="envoi3" type="submit" class="btn" value="supprimer programme">
            </div>
          </div>
          <div>
            <p>
              <?php
              // echo $message3;
              ?>
            </p>
          </div>
        </fieldset>
      </form><!--ENDform3-->
      <div class="container center-align"><a href="#begin" class="text-black"><i class="fa fa-angle-up  fa-2x"></i></a><br/></div>
      <form class="" id="programme4" name="programme4" action="back-prog.php#programme4" method="post">
        <fieldset>
          <legend class="pink-text">CONFIGURER UN SLOT</legend>
          <div class="row">
              <div class="input-field col s12">
                <select class="icons" name="slot4" required>
                  <option value="" disabled selected>Slot*</option>
                    <?php
                    /*boucle des speakers*/
                    $ent=$act->getSlot();
                    ?>
                </select>
              </div>
          </div>
          <div class="row">
            <div class="input-field col s12 center-align">
              <span>
                <label class="mr20">
                  <input name="salle4" type="radio" value="Richelieu" checked/>
                  <span>Richelieu</span>
                </label>
                <label class="mr20">
                  <input name="salle4" type="radio" value="Chassiron" />
                  <span>Chassiron</span>
                </label>
                <label class="mr20">
                  <input name="salle4" type="radio" value="Ilates" />
                  <span>Ilates</span>
                </label>
                <label  class="mr20">
                  <input name="salle4" type="radio" value="Chanchardon"/>
                  <span>Chanchardon</span>
                </label>
                <label  class="mr20">
                  <input name="salle4" type="radio" value="L'Eider"/>
                  <span>L'Eider</span>
                </label>
                <label  class="mr20">
                  <input name="salle4" type="radio" value="Hall Antioche"/>
                  <span>Hall Antioche</span>
                </label>
                <label  class="mr20">
                  <input name="salle4" type="radio" value="Grande Halle"/>
                  <span>Grande Halle</span>
                </label>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select class="icons" name="prog4" required>
                <option value="" disabled selected>Programme*</option>
                <option value="none">(Vider le slot)</option>
                  <?php
                  /*boucle des speakers*/
                  $ent=$act->getProg();
                  ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
              <input id="" name="envoi4" type="submit" class="btn" value="configurer slot">
            </div>
          </div>
          <div>
            <p>
              <?php
              echo $message4;
              ?>
            </p>
          </div>
        </fieldset>
      </form><!--ENDform4-->
    </div><!--ENDcontainer-->
  </body>
  <?php
  include("footerBack.php");
  ?>
</html>
