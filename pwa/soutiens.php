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
        <meta name="description" content="B-boost, soutiens">
        <meta name="keywords" content="soutiens, partenaires, accueil, bienvenue, B-boost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost soutiens</title>
        <?php
        include("header.php");
        ?>
    </head>

    <body>
      <?php
      $a="pagesEn/soutiensEn.php";//utilise dans la navbar pour clic sur bouton
      include("navbar.php");
      ?>
      <div>
        <p></p>
      </div>
      <div class="container">
        <p class="center">Actions financées par :</p>
        <div class="row">
          <div class="col s12 m6 l6"><!--FEDER-->
            <div class="card">
              <div class="">
                <img class="imgSupportCard imgEuroRegion" src="assets/icons/BlocEuro-Region.png">
              </div>
              <div class="card-content soutien">
                <p class="indent">Dans le cadre de son action en Nouvelle-Aquitaine, l’Union européenne a mobilisé plus de 73 M€
                  depuis 2014 pour soutenir des projets sur la thématique du numérique. B-Boost, est soutenu à
                  hauteur de 140 000€ par l’Union européenne, au titre du Fonds Européen pour le Développement
                  Régional (FEDER) afin de favoriser l’accès à l’économie du numérique.
                </p>
              </div>
              <div class="card-action">
                <a href="https://www.europe-en-nouvelle-aquitaine.eu/fr" class="text-black">Union Européenne</a>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l6"><!--NA-->
            <div class="card">
              <div class="">
                <img class="imgSupportCard" src="assets/icons/logo_na_horiz_QUADRI_2019.png">
              </div>
              <div class="card-content soutien">
                <p class="indent">Dans le cadre de sa feuille de route lancée en octobre 2020 pour un “numérique responsable”, c’est-
                  à-dire respectueux de l’environnement, social, éthique et ouvert, la Région entend capitaliser sur cet
                  écosystème afin de changer les comportements, de consolider la filière régionale et de développer
                  l’appropriation de ses solutions ouvertes. Elle a lancé un appel à projets « Logiciels Libres
                  innovants » permanent visant à favoriser la création de nouveaux services basés sur les logiciels
                  libres et à libérer le patrimoine logiciel existant.
                </p>
              </div>
              <div class="card-action">
                <a href="https://www.nouvelle-aquitaine.fr/" class="text-black">Région Nouvelle Aquitaine</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s12 m6 l6"><!--Agglo LR-->
            <div class="card">
              <div class="">
                <img class="imgSupportCard imgAggloLR" src="assets/icons/CALR.png">
              </div>
              <div class="card-content soutien">
                <p class="indent">La Communauté d’agglomération de La Rochelle est engagée depuis de nombreuses années dans l’open data et l’open source.
                  Elle accueille cet événement car il s’inscrit dans les valeurs et la stratégie territoriale « La Rochelle zéro carbone » : éthique, transparence, souveraineté, numérique
                  responsable. Les logiciels libres sont de formidables outils de résilience qui s’inscrivent dans la logique des Communs.
                </p>
              </div>
              <div class="card-action">
                <a href="https://www.agglo-larochelle.fr/" class="text-black">Agglomération de La Rochelle</a>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l6"><!--LRT-->
            <div class="card">
              <div class="">
                <img class="imgSupportCard mb" src="assets/icons/LR-Technopole.png">
              </div>
              <div class="card-content soutien">
                <p class="indent">La Rochelle Technopole est chargée d'accompagner des projets innovants pour faciliter leur
                  création et leur développement. B-Boost a pour ambition d'accélérer le développement de la filière
                  open source en Nouvelle-Aquitaine et intervient déjà depuis plusieurs années en partenariat avec La
                  Rochelle Technopole dans le cadre du dispositif « La Banquiz » qui est un programme
                  d’accélération de start-ups du logiciel et des technologies du libre.
                </p>
              </div>
              <div class="card-action">
                <a href="https://www.larochelle-technopole.fr" class="text-black">La Rochelle Technopole</a>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
      <?php
      include("footer.php");
      ?>
    </body>
</html>
