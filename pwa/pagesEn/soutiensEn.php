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
        <meta name="description" content="B-boost, support">
        <meta name="keywords" content="support, soutiens, partners,partenaires, accueil, bienvenue, B-boost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost support</title>
        <?php
        include("headerEn.php");
        ?>
    </head>

    <body>
      <?php
      $a="../soutiens.php";
      include("navbarEn.php");
      ?>
      <div>
        <p></p>
      </div>
      <div class="container">
        <p class="center">Actions financed by :</p>
        <div class="row">
          <div class="col s12 m6 l6"><!--FEDER-->
            <div class="card">
              <div class="">
                <img class="imgSupportCard imgEuroRegion" src="../assets/icons/BlocEuro-Region.png">
              </div>
              <div class="card-content soutien">
                <p class="indent">As part of its action in Nouvelle-Aquitaine, the European Union has mobilized more than €73 million since 2014 to support projects on the theme of digital.
                   B-Boost, is supported by 140 000€ from the European Union, under the Fonds Européen pour le Développement Régional (FEDER) to promote access to the digital economy.
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
                <img class="imgSupportCard" src="../assets/icons/logo_na_horiz_QUADRI_2019.png">
              </div>
              <div class="card-content soutien">
                <p class="indent">As part of its roadmap launched in October 2020 for a “numérique responsable”, which means environmentally friendly,
                   social, ethical and open, the Region wishes to capitalize on this ecosystem in order to change behaviors, consolidate the regional industry and develop the appropriation of its open solutions.
                    It has launched a call for projects « Logiciels Libres innovants », permanent project that aims to foster the creation of new services based on free software and to free up existing software assets.
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
                <img class="imgSupportCard imgAggloLR" src="../assets/icons/CALR.png">
              </div>
              <div class="card-content soutien">
                <p class="indent">La Communauté d’agglomération de La Rochelle has been involved in open data and open source for many years.
                  It is hosting this event because it is in line with the values and territorial strategy « La Rochelle zéro carbone » : ethics, transparency, sovereignty, digital responsible.
                  Open source software is a great tool for resilience and is part of the logic of the Commons.
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
                <img class="imgSupportCard mb" src="../assets/icons/LR-Technopole.png">
              </div>
              <div class="card-content soutien">
                <p class="indent">La Rochelle Technopole is in charge of supporting innovative projects to facilitate
                  their creation and their development. B-Boost's ambition is to accelerate the development of the
                  open source industry in Nouvelle-Aquitaine and has been working for several years in partnership with La Rochelle
                  Technopole in the framework of the « La Banquiz » program, which is a start-ups assistance in the software and open source technologies.
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
      include("footerEn.php");
      ?>
    </body>
</html>
