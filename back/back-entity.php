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
      <meta name="description" content="Bboost, backoffice entité">
      <meta name="keywords" content="ent,Bboost, open source, salon, événement open source, La Rochelle, programme, 14 octobre">
      <meta name="author" content="Chlo">
      <title>Bboost, le back entité</title>
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
    // error_reporting(E_ALL);
    // ini_set('display_errors',TRUE);
    // ini_set('display_startup_errors',TRUE);
    /**/
    include_once'Action.php';
    $bdd=new Connection();
    $act=new Action($bdd);
    extract($_POST);
    // var_dump($_POST);

    if(isset($_POST["envoi"])||isset($_POST["envoi"])||isset($_POST["envoi2"])||isset($_POST["envoi2"])){
      $insert=$act->insertEntity($_POST);
    }
    if(isset($_POST["envoi3"])||isset($_POST["envoi3"])){
      $lier=$act->insertStatut($_POST);
      $delete=$act->deleteStatut($_POST);
    }
    if(isset($_POST["envoi4"])||isset($_POST["envoi4"])){
      $associer=$act->insertStand($_POST);
    }
    $message1="";
    $message2="";
    $message3="";
    $message4="";
    if(isset($insert) && $insert!=null && !empty($_POST) && isset($_POST["nom"])){
      $message1=$insert->toString();
    }
    if(isset($insert) && $insert!=null && !empty($_POST) && isset($_POST["nom2"])){
      $message2=$insert->toString();
    }
    if(isset($lier) && $lier!=null && !empty($_POST) && isset($_POST["entity"])){
      $message3=$lier->toString();
    }
    if(isset($delete) && $delete!=null && !empty($_POST)){
      if(isset($tab["sponsor3"]) || isset($tab["partner3"]) || isset($tab["support3"])){
        $message3=$delete->toString();
      }
    }
    if(isset($associer) && $associer!=null && !empty($_POST)){
      if(isset($_POST["stand"]) || isset($_POST["stand4"])){
        $message4=$associer->toString();
      }
    }

  }catch(PDOexception $e){
    die('Erreur :' .$e->getTraceAsString());//arret du script et trace
  }
 ?>
  <script>
    $(document).ready(function() {
      M.updateTextFields();
    });
  </script>
  <body>
    <nav class="nav-extended linear-gradient" id="begin">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo"><img src="/assets/icons/LogoBBOOST21-Seul-Couleur-FS.png" class="img15 pad10 hide-on-med-and-down" alt="logo"></a>
        <a href="index.php" class="brand-logo center-align"><img src="/assets/icons/LogoBBOOST21-Seul-Couleur-FS.png" class="img55 pad10 hide-on-large-only hide-on-small-only" alt="logo"></a>
        <a href="index.php" class="brand-logo center-align"><img src="/assets/icons/LogoBBOOST21-Seul-Couleur-FS.png" class="img75 pad10 hide-on-med-and-up" alt="logo"></a>
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
      </div>
      <div class="nav-content">
        <ul class="tabs tabs-transparent"><!--class="active"-->
          <li class="tab"><a class="" href="back-entity.php">ENTITES</a></li>
          <li class="tab"><a class="" href="back-pers.php">PARTICIPANTS</a></li>
          <li class="tab"><a class="" href="back-prog.php">PROGRAMME</a></li>
        </ul>
      </div>
    </nav><!--INburger-->
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
        <h4 class="center-align">back-office des entités</h4>
        <br/>
      </div>
      <div class="row center-align">
        <div class="col s12 m3 l3"><a class="pink-text" href="#entites1">AJOUTER UNE ENTITE</a></div>
        <div class="col s12 m3 l3"><a class="pink-text" href="#entites2" >MODIFIER UNE ENTITE</a></div>
        <div class="col s12 m3 l3"><a class="pink-text" href="#entites3" >ATTRIBUER UN STATUT</a></div>
        <div class="col s12 m3 l3"><a class="pink-text" href="#entites4" >ATTRIBUER UN STAND</a></div>
      </div>
      <br/>
      <form class="" id="entites1" name="entites1" action="back-entity.php" method="post">
        <fieldset>
          <legend class="pink-text">AJOUTER UNE ENTITE</legend>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input id="nomEnt" name="nom" type="text" class="validate" maxlength="25" required>
              <label for="nomEnt" class="">Nom*</label>
            </div>
            <div class="switch col s12 m6 l6 center-align">
              <p class="center-align">L'entreprise a t'elle fourni un logo ?</p>
              <label>
                non
              <input id="logoEnt" name="logo" type="checkbox">
                <span class="lever"></span>
                Oui
              </label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="adresseEnt" name="adresse" type="text" class="validate" maxlength="100">
              <label for="adresseEnt">Adresse</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12">
              <span>
                <label class="mr20">
                  <input name="type" type="radio" value="compa" checked/>
                  <span>Entreprise</span>
                </label>
                <label class="mr20">
                  <input name="type" type="radio" value="commu" />
                  <span>Collectivité</span>
                </label>
                <label class="mr20">
                  <input name="type" type="radio" value="assoc" />
                  <span>Association</span>
                </label>
                <label  class="mr20">
                  <input name="type" type="radio" value="eeurs"/>
                  <span>EEURS</span>
                </label>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m3 l3">
              <input id="mailEnt" name="mail" type="mail" class="validate" maxlength="50">
              <span class="helper-text">Mail</span>
            </div>
            <div class="input-field col s12 m3 l3">
              <input id="telEnt" name="tel" type="tel" class="validate" maxlength="15" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
              <label for="telEnt">Téléphone</label>
            </div>
            <div class="input-field col s12 m4 l4 offset-m1 offset-l1">
              <select class="icons" name="dir">
                <option  class="" value="" disabled selected>Dirigeant</option>
                <?php
                /*boucle des personnes disponibles*/
                $ent=$act->getPers();
                ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="webEnt" name="web" type="url" class="validate" maxlength="200" required>
              <label for="webent">Site Web*</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12">
              <!-- <input id="textFrEnt" name="textFr" type="textarea" class="validate" maxlength="1899" size=""  row=""  spellcheck="true"> -->
              <textarea id="textFrEnt" name="textFr" type="textarea" class="validate" maxlength="1899" size=""  row=""  spellcheck="true"></textarea>
              <label for="textFrEnt">Texte de présentation en Français</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12">
              <!-- <input id="textEnEnt" name="textEn" type="textarea" class="validate" maxlength="1899" size="" row="" data-length="1899"> -->
              <textarea id="textEnEnt" name="textEn" type="textarea" class="validate" maxlength="1899" size="" row="" data-length="1899"></textarea>
              <label for="textEnEnt">Texte de présentation en ANGLAIS</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input id="twEnt" name="tw" type="url" class="validate" maxlength="199">
              <label for="twEnt"><i class="fab fa-twitter  fa-1x"></i> Adresse Twitter</label>
            </div>
            <div class="input-field col s12 m6 l6">
              <input id="linEnt" name="lin" type="url" class="validate" maxlength="199">
              <label for="linEnt"><i class="fab fa-linkedin-in  fa-1x"></i> Adresse LinkedIn</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
              <input id="" name="envoi" type="submit" class="btn" value="ajouter entité">
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
      <form class="" id="entites2" name="entites2" action="back-entity.php#entites2" method="post">
        <fieldset>
          <legend class="pink-text">MODIFIER UNE ENTITE</legend>
            <div class="row">
              <div class="row">
                <p class="pink-text">Entité à modifier :</p>
                <div class="input-field col s12 m6 l6">
                  <select class="icons" name="entity">
                    <option  class="" value="" disabled selected>Entité</option>
                    <?php
                    /*boucle des entites*/
                    $ent=$act->getEntity();
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <p class="pink-text">Informations que vous souhaitez modifier :</p>
                <div class="input-field col s12 m6 l6">
                  <input id="nomEnt2" name="nom2" type="text" class="validate" maxlength="25">
                  <label for="nomEnt2">Nom</label>
                </div>
                <div class="input-field col s12 m5 l5 offset-m1 offset-l1">
                  <span>
                    <label class="mr20">
                      <input name="type2" type="radio" value="compa"/>
                      <span>Entreprise</span>
                    </label>
                    <label class="mr20">
                      <input name="type2" type="radio" value="commu" />
                      <span>Collectivité</span>
                    </label>
                    <label class="mr20">
                      <input name="type2" type="radio" value="assoc" />
                      <span>Association</span>
                    </label>
                    <label  class="mr20">
                      <input name="type2" type="radio" value="eeurs"/>
                      <span>EEURS</span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l12">
                  <input id="adresseEnt2" name="adresse2" type="text" class="validate" maxlength="100">
                  <label for="adresseEnt2">adresse</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m3 l3">
                  <input id="mailEnt2" name="mail2" type="mail" class="validate">
                  <span class="helper-text">Mail</span>
                </div>
                <div class="input-field col s12 m3 l3">
                  <input id="telEnt2" name="tel2" type="tel" class="validate" maxlength="15">
                  <label for="telEnt2">Telephone</label>
                </div>
                <div class="input-field col s12 m4 l4 offset-m1 offset-l1">
                  <select class="icons" name="dir2">
                    <option  class="" value="" disabled selected>Dirigeant</option>
                    <?php
                    /*boucle des particpants disponibles*/
                    $ent=$act->getPers();
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="webEnt2" name="web2" type="url" class="validate" maxlength="200">
                  <label for="webent2">Site Web</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l12">
                  <!-- <input id="textFrEnt" name="textFr2" type="textarea" class="validate" maxlength="2500" row="50" data-length="2500" spellcheck="true"> -->
                  <textarea id="textFrEnt" name="textFr2" class="validate" maxlength="2500" row="20" data-length="2500" spellcheck="true"></textarea>
                  <label for="textFrEnt2">Texte de présentation en Français</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l12">
                  <!-- <input id="textEnEnt" name="textEn2" type="textarea" class="validate" maxlength="2500" row="20" data-length="2500"> -->
                  <textarea id="textEnEnt" name="textEn2" type="textarea" class="validate" maxlength="2500" row="20" data-length="2500"></textarea>
                  <label for="textEnEnt2">Texte de présentation en ANGLAIS</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input id="twEnt2" name="tw2" type="url" class="validate" maxlength="199">
                  <label for="twEnt2"><i class="fab fa-twitter  fa-1x"></i> Adresse Twitter</label>
                </div>
                <div class="input-field col s12 m6 l6">
                  <input id="linEnt2" name="lin2" type="url" class="validate" maxlength="199">
                  <label for="linEnt2"><i class="fab fa-linkedin-in  fa-1x"></i> Adresse LinkedIn</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
                  <input id="" name="envoi2" type="submit" class="btn" value="modifier entité">
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
      <form class="" id="entites3" name="entites3" action="back-entity.php#entites3" method="post">
        <fieldset>
          <legend class="pink-text">ATTRIBUER UN STATUT</legend>
              <div class="row">
                <p class="pink-text">Choix de l'entité :</p>
                <div class="input-field col s12">
                  <select class="icons" name="entity">
                    <option value="" disabled selected>L'entité à associer</option>
                    <?php
                    /*boucle des entites*/
                    $ent=$act->getEntity();
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <p class="pink-text">Statut à associer :</p>
                <div class="input-field col s12 m6 l6">
                  <span>
                    <label class="mr20">
                      <input name="sponsor" type="checkbox" value="sponsor" checked/>
                      <span>Sponsor</span>
                    </label>
                    <label class="mr20">
                      <input name="partner" type="checkbox" value="partner" />
                      <span>Partenaire</span>
                    </label>
                    <label  class="mr20">
                      <input name="support" type="checkbox" value="support"/>
                      <span>Soutien</span>
                    </label>
                  </span>
                </div>
                <div class="input-field col s6">
                  <span>
                    <span>Badges sponsors : </span>
                    <label class="mr20">
                      <input name="badge" type="radio" value="g" />
                      <span>Gold</span>
                    </label>
                    <label class="mr20">
                      <input name="badge" type="radio" value="s" />
                      <span>Silver</span>
                    </label>
                    <label class="mr20">
                      <input name="badge" type="radio" value="b" />
                      <span>Bronze</span>
                    </label>
                    <label  class="mr20">
                      <input name="badge" type="radio" value="n" checked/>
                      <span>None</span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="row">
                <p class="pink-text">Supprimer une entité de son statut:</p>
                <!-- <div class="input-field col s12 m3 l3 ">
                  <select class="icons" name="exhibitor3">
                    <option value="" disabled selected>Exposants</option>
                    <?php
                    /*boucle des exposants*/
                    $ent=$act->getStandOccupe();
                    ?>
                  </select>
                </div> -->
                <div class="input-field col s12 m4 l4 ">
                  <select class="icons" name="sponsor3">
                    <option value="" disabled selected>Sponsors</option>
                    <?php
                    /*boucle des entites*/
                    $ent=$act->getSponsor();
                    ?>
                  </select>
                </div>
                <div class="input-field col s12 m4 l4 ">
                  <select class="icons" name="partner3">
                    <option value="" disabled selected>Partenaires</option>
                    <?php
                    /*boucle des entites*/
                    $ent=$act->getPartner();
                    ?>
                  </select>
                </div>
                <div class="input-field col s12 m4 l4 ">
                  <select class="icons" name="support3">
                    <option value="" disabled selected>Soutiens</option>
                    <?php
                    /*boucle des entites*/
                    $ent=$act->getSupport();
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
                  <input id="" name="envoi3" type="submit" class="btn" value="attribuer statut">
                </div>
              </div>
              <div>
                <p>
                  <?php
                   echo $message3;
                   ?>
                </p>
              </div>
        </fieldset>
      </form><!--ENDform3-->
      <div class="container center-align"><a href="#begin" class="text-black"><i class="fa fa-angle-up  fa-2x"></i></a><br/></div>
      <form class="" id="entites4" name="entites4" action="back-entity.php#entreprises4" method="post">
        <fieldset>
          <legend class="pink-text">ATTRIBUER UN STAND</legend>
              <div class="row">
                <p class="pink-text">Attribuer un stand :</p>
                <div class="input-field col s12">
                  <select class="icons" name="stand">
                    <option value="" selected>Le stand à attribuer</option>
                    <?php
                    /*boucle des stands disponibles*/
                    for($i=1;$i<36; $i++){
                      if($i>9){
                        $st="0".$i;
                      }else{
                        $st="00".$i;
                      }
                      echo "<option name='stand' value='".$st."'>".$st."</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <select class="icons" name="ent">
                    <option value="" disabled selected>L'entité à associer</option>
                    <?php
                    /*boucle des entreprises*/
                    $ent=$act->getEntity();
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <p class="pink-text">Libérer un stand :</p>
                <div class="input-field col s12">
                  <select class="icons" name="stand4">
                    <option value="" disabled selected>Le stand à libérer</option>
                    <?php
                    /*boucle des stands occupes*/
                    $act->getStandOccupe();
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
                  <input id="" name="envoi4" type="submit" class="btn" value="modifier stand">
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
      <div class="container center-align"><a href="#begin" class="text-black"><i class="fa fa-angle-up  fa-2x"></i></a><br/></div>
      <table class="striped">
        <tbody>
            <tr>
              <?php
              for($i=1;$i<11; $i++){
                if($i==10){
                  $st="0".$i;
                }else{
                  $st="00".$i;
                }
                echo "<td class='center-align'><b>".$st."</b><br/>";
                $act->getEntName($st);
                echo "</td>";
              }
              ?>
            </tr>
            <tr>
              <?php
              for($i=11;$i<21; $i++){
                $st="0".$i;
                echo "<td class='center-align'><b>".$st."</b><br/>";
                $act->getEntName($st);
                echo "</td>";
              }
              ?>
            </tr>
            <tr>
              <?php
              for($i=21;$i<31; $i++){
                $st="0".$i;
                echo "<td class='center-align'><b>".$st."</b><br/>";
                $act->getEntName($st);
                echo "</td>";
              }
              ?>
            </tr>
            <tr>
              <?php
              for($i=31;$i<41; $i++){
                $st="0".$i;
                echo "<td class='center-align'><b>".$st."</b><br/>";
                $act->getEntName($st);
                echo "</td>";
              }
              ?>
            </tr>
          </tbody>
      </table>
    </div><!---?--->
    </div><!--ENDcontainer-->
  </body>
  <?php
  include("footerBack.php");
  ?>
</html>
