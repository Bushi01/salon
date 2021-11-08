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
      <meta name="description" content="Bboost, backoffice">
      <meta name="keywords" content="Bboost, open source, salon, événement, La Rochelle, programme, 14 octobre, 15 octobre">
      <meta name="author" content="Chlo">
      <title>Bboost, le backoffice</title>
        <?php
        include("headerBack.php");
        ?>
  </head>
  <?php
  session_start();
  // var_dump($_SESSION);
  extract($_POST);
  // var_dump($_POST);
  try{
    /*Affichage des erreurs*/
    // error_reporting(E_ALL);
    // ini_set('display_errors',TRUE);
    // ini_set('display_startup_errors',TRUE);
    /**/
    include_once'Login.php';
    if(isset($verif)){
        $bdd=new Connection();
        $log=new Login($bdd);
        $l=$log->login($_POST["login"],$_POST["mdp"]);
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
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="https://pwa.b-boost.fr/accueil.php">site mobile</a></li>
          <li><a href="https://b-boost.fr/larochelle/">site web</a></li>
        </ul>
      </div>
      <div class="nav-content">
        <ul class="tabs tabs-transparent"><!--class="active"-->
          <li class="tab"><a class="" href="back-entity.php">ENTITES</a></li>
          <li class="tab"><a class="" href="back-pers.php">PERSONNES</a></li>
          <li class="tab"><a class="" href="back-prog.php">PROGRAMME</a></li>
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo"><!--id=data-target-->
      <li><a href="https://pwa.b-boost.fr/accueil.php">site mobile</a></li>
      <li><a href="https://b-boost.fr/larochelle/">site web</a></li>
    </ul>

    <div class="container">
      <div class="row">
        <p class="center-align">
          BACKOFFICE
        </p>
        <p class="center-align">
          <?php
          if(isset($l) && $l==false){
            echo "Les données du log ne sont pas bonnes";
          }
          ?>
        </p>
      <form class="" id="log" name="log" action="index.php" method="post">
        <fieldset>
            <legend class="pink-text">LOGIN</legend>
            <div class="row">
              <div class="input-field col s12">
                <input id="login" name="login" type="text" class="validate" maxlength="25" required>
                <label for="login">Nom*</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="mdp" name="mdp" type="password" class="validate" maxlength="50" required>
                <label for="mdp">Mot de passe*</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m4 l4 offset-m4 offset-l4 center-align">
                <input id="" name="verif" type="submit" class="btn" value="entrer">
              </div>
            </div>
        </fieldset>
      </form>
      </div>
    </div>
  </body>
  <?php
  include("footerBack.php");
  ?>
</html>
