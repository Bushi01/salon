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
      <meta name="description" content="Bboost, backoffice personnes">
      <meta name="keywords" content="Pers, Bboost, open source, salon, événement open source, La Rochelle, programme, 14 octobre">
      <meta name="author" content="Chlo">
      <title>Bboost, le back personnes</title>
      <?php
      include("headerBack.php");
      ?>
  </head>

  <?php
    session_start();
    extract($_SESSION);
    if(!isset($login)){header("location:index.php");}
    try{
      /*Affichage des erreurs - Error display*/
      // error_reporting(E_ALL);
      // ini_set('display_errors',TRUE);
      // ini_set('display_startup_errors',TRUE);
      /****/
      include_once'Action.php';
      $bdd=new Connection();
      $act=new Action($bdd);
      extract($_POST);
      // var_dump($_POST);
      $insert=$act->insertPers($_POST);
      $message="";
      $message2="";
      if(isset($insert) && $insert!=null && !empty($_POST) && isset($_POST["nom"])){
        $message=$insert->toString();
      }elseif(isset($insert) && $insert!=null && !empty($_POST) && isset($_POST["nom3"])){
        $message2=$insert->toString();
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
        <h4 class="center-align">back-office des participants</h4>
        <p><b>Sont susnommés "participants" les personnes pouvant :</b>
          <ul>
            <li><p><i class="material-icons">bubble_chart</i> intervenir au sein d'un programme de type divers (conférence, keynote, table ronde ...)</p></li>
            <li><p><i class="material-icons">bubble_chart</i> détenir un statut de dirigeant au sein d'une entité quelconque</p></li>
          </ul>
        </p>
        <br/>
      </div>
      <div class="row">
        <div class="col s12 m4 l3 offset-m1 offset-l2 center-align"><a class="pink-text" href="#participants1">AJOUTER UN PARTICIPANT</a></div>
        <div class="col s12 m4 l3 offset-m2 offset-l2 center-align"><a class="pink-text" href="#participants2" >MODIFIER UN PARTICIPANT</a></div>
      </div>
      <br/>
      <form class="" id="participants1" name="participants1" action="back-pers.php" method="post">
        <fieldset>
          <legend class="pink-text">AJOUTER UN PARTICIPANT</legend>
          <div class="row">
            <div class="row">
              <div class="input-field col s12 m6">
                <input id="nomPers" name="nom" type="text" class="validate" maxlength="25" required>
                <label for="nomPers">Nom*</label>
              </div>
              <div class="input-field col s12 m6">
                <input id="prenomPers" name="prenom" type="text" class="validate" maxlength="25" required>
                <label for="prenomPers">Prénom*</label>
              </div>
            </div>
            <div class="row">
              <div class="switch">
                <p>Le participant a t'il fourni une photo ?</p>
                <label>
                  non
                  <input id="photoPers" name="photo" type="checkbox">
                  <span class="lever"></span>
                  Oui
                </label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="paysPers" name="pays" type="text" class="validate" maxlength="20">
                <label for="paysPers">Pays</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textFrPers" name="textFr" type="text" class="validate" maxlength="999" size="" data-length="999" spellcheck="true"></textarea>
                <label for="textFrPers">Texte de présentation en Français</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textEnPers" name="textEn" type="text" class="validate" maxlength="999" size="999" data-length="999"></textarea>
                <label for="textEnPers">Texte de présentation en ANGLAIS</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="twitterPers" name="tw" type="url" class="validate" maxlength="199">
                <label for="twitterPers"><i class="fab fa-twitter  fa-1x"></i> Adresse Twitter</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="linkedInPers" name="lin" type="url" class="validate" maxlength="199">
                <label for="linkedInPers"><i class="fab fa-linkedin-in  fa-1x"></i> Adresse LinkedIn</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
                <input id="" name="envoi" type="submit" class="btn" value="ajouter participant">
              </div>
            </div>
            <div>
              <p><?php echo $message; ?></p>
            </div>
          </div>
        </fieldset>
      </form><!--ENDform1-->
      <div class="container center-align"><a href="#begin" class="text-black"><i class="fa fa-angle-up  fa-2x"></i></a><br/></div>
      <form class="" id="participants2" name="participants2" action="back-pers.php#participants2" method="post">
        <fieldset>
            <legend class="pink-text">MODIFIER UN PARTICIPANT</legend>
            <div class="row">
              <div class="row">
                <p class="pink-text">Choix du participant à modifier:</p>
                <div class="input-field col s12 m5 l6">
                  <select class="icons" name="nom3">
                    <option  class="" value="" disabled selected>Participant*</option>
                    <?php
                    /*boucle des personnes disponibles*/
                    $ent=$act->getPers();
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <p class="pink-text">Informations que vous souhaitez modifier :</p>
                <div class="input-field col s12 m6">
                  <input id="nomPers2" name="nom2" type="text" class="validate">
                  <label for="nomPers2">Nom</label>
                </div>
                <div class="input-field col s12 m6">
                  <input id="prenomPers2" name="prenom2" type="text" class="validate">
                  <label for="prenomPers2">Prénom</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="paysPers2" name="pays2" type="text" class="validate">
                  <label for="paysPers2">Pays</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textFrPers2" name="textFr2" type="text" class="validate" maxlength="999" size="999" data-length="999" spellcheck="true"></textarea>
                  <label for="textFrPers2">Texte de présentation en Français</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textEnPers2" name="textEn2" type="text" class="validate" maxlength="999" size="999" data-length="999"></textarea>
                  <label for="textEnPers2">Texte de présentation en ANGLAIS</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="twitterPers" name="tw2" type="url" class="validate" maxlength="199">
                  <label for="twitterPers"><i class="fab fa-twitter  fa-1x"></i> Adresse Twitter</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="linkedInPers" name="lin2" type="url" class="validate" maxlength="199">
                  <label for="linkedInPers"><i class="fab fa-linkedin-in  fa-1x"></i> Adresse LinkedIn</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
                  <input id="" name="envoi2" type="submit" class="btn" value="modifier participant">
                </div>
              </div>
              <div>
                <p><?php echo $message2; ?></p>
              </div>
            </div>
        </fieldset>
      </form><!--ENDform2-->
      <div class="container center-align"><a href="#begin" class="text-black"><i class="fa fa-angle-up  fa-2x"></i></a><br/></div>
    </div><!--ENDcontainer-->
  </body>
  <?php
  include("footerBack.php");
  ?>
</html>
