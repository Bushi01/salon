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
        <meta name="description" content="B-boost, temps forts">
        <meta name="keywords" content="temps forts,hackaton, conférences, inauguration, bienvenue, B-boost, professionel, salon, événement, open source, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost temps forts</title>
        <?php
        include("header.php");
        ?>
    </head>

    <body>
      <?php
      $a="pagesEn/tempsFortsEn.php";
      include("navbar.php");
      ?>
            <div>
              <p></p>
            </div>
      <div class="container">
        <h3 class="center">Temps forts du B-boost !</h3>
        <div class="col s12 m7">

          <div class="row">
            <div class="col s12 m3 l3 card"><!--Ender Ocean-->
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="assets/images/materiel/robotEnderOcean.jpg">
                 </div>
                 <div class="card-content">
                   <span class="card-title tf activator grey-text text-darken-4">EnderOcéan</span>
                   <p><a href="https://www.enderocean.com/default/home" target="_blank">Le jeu en ligne <i class="fas fa-ellipsis-v fa-xs right"></i></a></p>
                 </div>
                 <div class="card-reveal tf">
                   <span class="card-title tf grey-text text-darken-4">EnderOcéan<i class="fas fa-times fa-xs right"></i></span>
                   <p class="tf">Venez piloter un robot sous-marin depuis le port de La Rochelle !</p>
                   <p class="tf">Le but du jeu « Ender Ocean » est de repérer et récupérer des déchets plastiques ou issus de la pêche au niveau des rivières, des lacs et des littoraux. Pour cela, les joueurs pilotent des robots sous-marins coordonnés en surface par les animateurs.</p>
                 </div>
               </div>
            </div><!--finCard-->
            <!--Tamata Ocean-->
            <!-- <div class="col s12 m3 l3 card">
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="assets/images/materiel/logoTamata.jpg">
                 </div>
                 <div class="card-content">
                   <span class="card-title tf activator grey-text text-darken-4">Tamata Océan</span>
                   <p><a href="http://tamataocean.com/" target="_blank">Voyagez sur le site <i class="fas fa-ellipsis-v fa-xs right"></i></a></p>
                 </div>
                 <div class="card-reveal tf">
                   <span class="card-title tf grey-text text-darken-4">Tamata Océan<i class="fas fa-times fa-xs right"></i></span>
                   <p class="tf">Imaginer, tester et partager des solutions open-source dédiées à l’autonomie en mer et sur terre, et ce de manière écologiquement responsable.
                     Le mot « tamata » signifie « essayer » dans l’archipel des Tuamotu, en Polynésie Française. C’est aussi le surnom donné à Bernard Moitessier, navigateur et figure d’inspiration connu pour sa résilience et son engagement.</p>
                 </div>
               </div>
            </div> -->
            <!--finCard-->
            <!--Fabrique Decarbonation-->
            <!-- <div class="col s12 m3 l3 card">
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="assets/images/materiel/louis-maniquet-.jpg">
                 </div>
                 <div class="card-content">
                   <span class="card-title tf activator grey-text text-darken-4">Fabrique Décarbonation</span>
                   <p><a href="#" target="_blank">C'est parti <i class="fas fa-ellipsis-v fa-xs right"></i></a></p>
                 </div>
                 <div class="card-reveal tf">
                   <span class="card-title tf grey-text text-darken-4">Fabrique Décarbonation<i class="fas fa-times fa-xs right"></i></span>
                   <p class="tf">A venir ...</p>
                 </div>
               </div>
            </div> -->
            <!--finCard-->
            <div class="col s12 m3 l3 card"><!--Side Event Agriculture-->
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="assets/images/materiel/bence-balla-schottner-b1FS5jQrsLo-unsplash-.jpg">
                 </div>
                 <div class="card-content">
                   <span class="card-title tf activator grey-text text-darken-4">Side Event Agriculture</span>
                   <p><a href="#" target="_blank">En route <i class="fas fa-ellipsis-v fa-xs right"></i></a></p>
                 </div>
                 <div class="card-reveal tf">
                   <span class="card-title tf grey-text text-darken-4">Side Event Agriculture<i class="fas fa-times fa-xs right"></i></span>
                   <p><b>Salle Chanchardon</b></p>
                   <p class="tf">Autoguidage centimétrique open source en agriculture</p>
                     <p class="tf">Durée des ateliers&nbsp;: 3h00<br/>
                      <b class="tf">Base RTK 14/10 9H00/12h00&nbsp;: </b> Monter une base RTK avec Centipède animé par Julien ANCELIN et Stéphane PENEAU<br/>
                      <b class="tf">Rover RTK 14/10 14H00/17h00&nbsp;: </b> Monter un rover RTK avec Centipède animé par Julien ANCELIN et Stéphane PENEAU<br/>
                      <b class="tf">Autoguidage RTK 15/10 9H00/12h00&nbsp;: </b> Installer/Monter un autoguidage RTK avec AgOpenGPS animé par Maxime EMPROU, Pierre HAURIGOT<br/>
                      <b class="tf">Logiciel Ekylibre 15/10 13H00/16h00&nbsp;: </b> Installer une solution de gestion avec Ekylibre animé par David JOULIN</p>
                 </div>
               </div>
            </div><!--finCard-->
            <div class="col s12 m3 l3 card"><!--hackathon-->
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="assets/images/materiel/glenn-carstens-peters-npxXWgQ33ZQ-unsplash-.jpg">
                 </div>
                 <div class="card-content">
                   <span class="card-title tf activator grey-text text-darken-4">Hackathon</span>
                   <p><a href="https://www.larochelle-technopole.fr/-/hackathon" target="_blank">En savoir plus <i class="fas fa-ellipsis-v fa-xs right"></i></a></p>
                 </div>
                 <div class="card-reveal tf">
                   <span class="card-title tf grey-text text-darken-4">Hackathon<i class="fas fa-times fa-xs right"></i></span>
                   <p><b>Musée Maritime/Encan</b></p>
                   <p class="tf">Dans le cadre du salon B-Boost, la Rochelle Technopole organise un Hackathon. 2 défis sont proposés autour d’un jeu de données généré par l'application open-source TraceMob pour développer des solutions numériques au service d’une mobilité durable.</p>
                 </div>
               </div>
            </div><!--finCard-->
            <div class="col s12 m3 l3 card"><!--1400 JOURS POUR BÉBÉ-->
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="assets/images/materiel/fe-ngo-bvx3G7RkOts-unsplash-.jpg">
                 </div>
                 <div class="card-content">
                   <span class="card-title tf activator grey-text text-darken-4">1400 jours pour bébé</span>
                   <p><a href="https://b-boost.fr/un-pas-vers-une-maternite-eco-responsable/#" target="_blank">En savoir plus <i class="fas fa-ellipsis-v fa-xs right"></i></a></p>
                 </div>
                 <div class="card-reveal tf">
                   <span class="card-title tf grey-text text-darken-4">1400 jours pour bébé<i class="fas fa-times fa-xs right"></i></span>
                   <p><b>Musée Maritime/Encan</b></p>
                   <p class="tf">À l'occasion du B-Boost, vos déplacements se transforment en donation !
Afin de soutenir la cause "1 400 jours pour bébé", B-Boost reversera des fonds pour chaque aller-retour fait entre l’Espace Encan – où se déroulera l’essentiel des activités du salon (conférences, espace exposants, ateliers, etc.) – et le Musée Maritime – où aura lieu le Hackathon.
300 mètres seulement séparent ces 2 lieux : une distance qui vous permettra de découvrir l’intégralité de nos animations tout en réalisant une bonne action !
                  </p>
                 </div>
               </div>
            </div><!--finCard-->
          </div>

          <div class="row">
            <div class="row">

              <h4 class="center">A la Médiathèque Michel CREPEAU</h4>
              <div class="col s2 m3 l3 offset-s2 offset-m3 offset-l5">
                <div class="valign-wrapper">
                  <i class="fas fa-info-circle fa-1x right"></i>
                  <a href="http://bibliotheques.agglo-larochelle.fr/AgendaCulturel/Portal/Event.aspx?INSTANCE=EXPLOITATION&ID=185" class="target_blank">&nbspInformations</a>
                </div>
              </div>

            </div>
            <div class="col s12 m3 l3 card"><!--Open way for space sciences-->
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="assets/images/materiel/nasa-yZygONrUBe8-unsplash-.jpg">
                 </div>
                 <div class="card-content">
                   <span class="card-title tf truncate activator grey-text text-darken-4">Open way for space sciences</span>
                   <i class="fas fa-ellipsis-v fa-xs right"></i>
                   <p><a href="https://b-boost.fr/conference-espace/" target="_blank">prêt pour le décollage !</a></p>
                 </div>
                 <div class="card-reveal tf">
                   <span class="card-title tf grey-text text-darken-4">Open way for space sciences<i class="fas fa-times fa-xs right"></i></span>
                   <p class="tf">
                    <b>Soirée conquête spatiale et open source</b>
                    <br/>Même si, à ses débuts, la conquête spatiale s’est principalement nourrie d’un besoin des états d’affirmer leur puissance à titre individuel, et a servi de marqueur dans des luttes d’influence géostratégique, l’imaginaire collectif l’a très rapidement considérée comme une aventure commune, se jouant à l’échelle de la planète.
                    <br/>Comme l’affirme Anne Goldenberg, dans son article “L’espace et ses technologies comme biens communs”, et pour correspondre à cet “imaginaire spatial” d’échelle planétaire, l’espace doit être considéré comme un bien commun. De ce fait, les technologies du spatial et leurs besoins constants d’innovations ont toute légitimité, aujourd’hui, a être animés par la collaboration.
                   </p>
                 </div>
               </div>
            </div><!--finCard-->
            <div class="col s12 m3 l3 card"><!--Thymio-->
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="assets/images/materiel/thymio.png">
                 </div>
                 <div class="card-content">
                   <span class="card-title tf truncate activator grey-text text-darken-4">Atelier robot</span>
                   <i class="fas fa-ellipsis-v fa-xs right"></i>
                   <p class="tf"><a href="https://www.thymio.org/fr/actualite-fr/thymio-suite-mobile-2-2-est-disponible-sur-android/" target="_blank">Thymio</a></p>
                 </div>
                 <div class="card-reveal tf">
                   <span class="card-title tf grey-text text-darken-4">Atelier robots<i class="fas fa-times fa-xs right"></i></span>
                   <p class="tf">
                     Thymio II est un robot éducatif open source qui a été créé à l'école polytechnique fédérale de Lausanne en collaboration avec l'école cantonale d'art de Lausanne en 2011.
                     <br/>Le projet Thymio a pour objectif de rendre la découverte de l'informatique et de la technologie accessible à un large public en particulier les enfants.
                   </p>
                 </div>
               </div>
            </div><!--finCard-->
            <div class="col s12 m3 l3 card"><!--Expo Logiciel Libre-->
              <div class="card">
                 <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="assets/images/materiel/mathew-schwartz-NEvS5lHyrlk-unsplash-.jpg">
                 </div>
                 <div class="card-content">
                   <span class="card-title tf truncate activator grey-text text-darken-4">Exposition Logiciel libre</span>
                   <i class="fas fa-ellipsis-v fa-xs right"></i>
                   <p class="tf"><a href="http://bibliotheques.agglo-larochelle.fr/AgendaCulturel/Portal/Event.aspx?INSTANCE=EXPLOITATION&ID=185" target="_blank">En savoir plus</a></p>
                 </div>
                 <div class="card-reveal tf">
                   <span class="card-title tf grey-text text-darken-4">Exposition Logiciel libre<i class="fas fa-times fa-xs right"></i></span>
                   <p class="tf">En parallèle du B-Boost, retrouvez tout au long du mois d’octobre l’exposition “Tout savoir ou presque sur les logiciels libres” à la Médiathèque Michel-Crépeau.
                    <br/>Accessible pour les non-initiés et le grand public, cette exposition vous fera (re)découvrir les logiciels libres. Inspirée de diverses expositions libres de droits créées par April, Les Ordis Libres et Média-Cité, le format choisi est directement en lien avec la thématique du Libre et du partage de ressources.
                    <br/>Au-delà des panneaux présentés pour s’informer sur le logiciel libre, 2 projections sont proposées :
                    <br/>Internet ou la Révolution du partage, film documentaire réalisé par Philippe Borrel – Vendredi 8 octobre à 18h30 – entrée libre
                    Une contre-histoire de l’internet, film documentaire réalisé par Sylvain Bergère – Mardi 5 octobre à 18h30 – entrée libre
                    Située à 500m de l’Espace Encan, la médiathèque Michel-Crépeau est facilement accessible à pied ce qui vous permettra d’aller la découvrir lors de votre passage au salon.
                    <br/>Exposition visible du 1er au 30 octobre</p>
                 </div>
               </div>
            </div><!--finCard-->

          </div>
        </div>

      </div><!--ENDcontainer-->

      <?php
      include("footer.php");
      ?>
    </body>
</html>
