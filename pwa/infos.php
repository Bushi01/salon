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
        <meta name="description" content="B-boost, informations générales">
        <meta name="keywords" content="informations générales, tourisme, convention, internationale, bienvenue, B-boost, open source, salon, événement, La Rochelle">
        <meta name="author" content="Chlo">
        <title>B-boost informations générales</title>
        <?php
        include("header.php");
        ?>
    </head>

    <body>
      <?php
      $a="pagesEn/infosEn.php";
      include("navbar.php");
      ?>
      <div>
        <p></p>
      </div>
      <div class="container">
        <H3 class="center-align">Informations générales</H3>
        <div class="row center card linear-gradient">
          <div class="col s6 m3 l3"><p class="center-align"><a class="text-white" href="#info1">Venir au B-boost</a></p></div>
          <div class="col s6 m3 l3"><p class="center-align"><a class="text-white" href="#info2">Consignes</a></p></div>
          <div class="col s6 m3 l3"><p class="center-align"><a class="text-white" href="https://b-boost.fr/inscription/" target="_blank">Billeterie</a></p></div>
          <div class="col s6 m3 l3"><p class="center-align"><a class="text-white" href="https://b-boost.fr/contactez-nous/" target="_blank">Contact</a></p></div>
        </div>
        <div class="card">
          <H3 id="info1" class="center-align">Se déplacer au B-boost</H3>
          <div class="row">
            <div class="col s12 m12 l12 center-align"><a class="" href="http://www.larochelle-evenements.fr/votre-evenement-a-la-rochelle/espaces/l-espace-encan" target="_blank"><b>Espace Encan</b>: Quai Louis Prunier, 17 000 La Rochelle – France</a></div>
            <div class="col s12 m5 l5 offset-m1 offset-l1"><img class="z-depth-3" src="assets/images/materiel/Festival_International_du_Film_et_du_Livre_d_Aventure_29466-450px.jpg"></div>
            <div class="col s12 m5 l5 hide-on-small-only"><img class="z-depth-3" src="assets/images/materiel/Espace_Encan_29197-450px.jpg"></div>
          </div>
          <a href="https://www.larochelle.fr/vie-quotidienne/touristes/default-b9b3604fd0/ci" target="_blank"><h4 class="center-align"><i class="fas fa-address-card fa-1s"></i> La Rochelle city PASS</h4></a>
          <!-- <a href="https://www.larochelle.fr/vie-quotidienne/touristes/default-b9b3604fd0/ci" target="_blank"><h4 class="center-align"><i class="material-icons">card_membership</i> La Rochelle city PASS</h4></a> -->
        </div>
        <div class="row">
          <div class="col s12 m3 l3 card"><!--velo-->
            <div class="card">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/images/materiel/Velos_jaunes_en_libre_service_30116-450px.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">A vélo<i class="fas fa-ellipsis-v fa-xs right"></i></span>
                 <!-- <span class="card-title activator grey-text text-darken-4">A vélo<i class="material-icons right">more_vert</i></span> -->
                 <p><a href="https://yelo.agglo-larochelle.fr/services/libre-service-velos/" target="_blank">En savoir plus sur le fonctionnement</a></p>
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">A vélo<i class="fas fa-times fa-xs right"></i></span>
                 <!-- <span class="card-title grey-text text-darken-4">A vélo<i class="material-icons right">close</i></span> -->
                 <p>Réparties sur l’ensemble de la ville de La Rochelle et ses alentours, les stations libre-service vélos Yélo offrent la possibilité de se déplacer facilement et rapidement d’un endroit à un autre.</p>
               </div>
             </div>
          </div><!--finCard-->
          <div class="col s12 m3 l3 card"><!--bus-->
            <div class="card">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/images/materiel/busLR.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">En bus<i class="fas fa-ellipsis-v fa-xs right"></i></span>
                 <!-- <span class="card-title activator grey-text text-darken-4">En bus<i class="material-icons right">more_vert</i></span> -->
                 <p><a href="https://yelo.agglo-larochelle.fr/services/le-reseau-de-bus/" target="_blank">En savoir plus sur le fonctionnement</a></p>
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">En bus<i class="fas fa-times fa-xs right"></i></span>
                 <!-- <span class="card-title grey-text text-darken-4">En bus<i class="material-icons right">close</i></span> -->
                 <p>Les transports en commun restent un des modes de transport les plus économiques. Les lignes de bus Yélo circulent tout au long de l'année pour faciliter vos déplacements au quotidien.</p>
               </div>
             </div>
          </div><!--finCard-->
          <div class="col s12 m3 l3 card"><!--Taxi-->
            <div class="card">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/images/materiel/taxiLR.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">En taxi<i class="fas fa-ellipsis-v fa-xs right"></i></span>
                 <!-- <span class="card-title activator grey-text text-darken-4">En taxi<i class="material-icons right">more_vert</i></span> -->
                 <p><a href="https://www.larochelle.fr/vie-quotidienne/transports-deplacements/taxis" target="_blank">En savoir plus sur le fonctionnement</a></p>
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">En taxi<i class="fas fa-times fa-xs right"></i></span>
                 <!-- <span class="card-title grey-text text-darken-4">En taxi<i class="material-icons right">close</i></span> -->
                 <p>Besoin d’une solution de transport autre que les transports en commun ? Plus d'une cinquantaine de taxis tournent dans La Rochelle, prêts à vous emmener où bon vous semble.</p>
               </div>
             </div>
          </div><!--finCard-->
          <div class="col s12 m3 l3 card"><!--bateau-->
            <div class="card">
               <div class="card-image waves-effect waves-block waves-light">
                 <img class="activator" src="assets/images/materiel/Passeur_30107-450px.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">Bateau<i class="fas fa-ellipsis-v fa-xs right"></i></span>
                 <!-- <span class="card-title activator grey-text text-darken-4">Bateau<i class="material-icons right">more_vert</i></span> -->
                 <p><a href="https://yelo.agglo-larochelle.fr/services/passeur-bus-de-mer/" target="_blank">En savoir plus sur le fonctionnement</a></p>
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">Bateau<i class="fas fa-times fa-xs right"></i></span>
                 <!-- <span class="card-title grey-text text-darken-4">En bateau<i class="material-icons right">close</i></span> -->
                 <p>Passeur et Bus de Mer :<br/>Les bateaux Yélo fonctionnent exactement comme le bus, avec un simple titre de transport avec ou sans abonnement Yélo.<br/>Vous pouvez même embarquer avec votre vélo !</p>
               </div>
             </div>
          </div><!--finCard-->
        </div>
        <div class="card">
          <a href="https://www.larochelle-tourisme.com/brochures-et-plans-de-ville" target="_blank"><h4 class="center-align"><i class="fas fa-map fa-1s"></i> brochures et plan des villes</h4></a>
          <a href="https://yelo.agglo-larochelle.fr/plan-interactif/" target="_blank"><h4 class="center-align"><i class="fas fa-map-marker-alt fa-1s"></i> plan interactif</h4></a>
        </div>
        <div class="card">
          <div class="row">
            <H3 id="info2" class="center-align">Consignes d'accès</H3>
            <div class="col s12 m12 l9">
              <h4>Maintien des gestes barrière</h4>
              <ul><i class="fas fa-check-circle fa-1s"></i>&nbspLe port du masque est obligatoire !</ul>
              <ul><i class="fas fa-check-circle fa-1s"></i>&nbspDu gel hydroalcoolique est à disposition, utilisez le fréquemment.</ul>
              <ul><i class="fas fa-check-circle fa-1s"></i>&nbspLes espaces de conférences sont aménagés pour conserver la distanciation.</ul>
              <ul><i class="fas fa-check-circle fa-1s"></i>&nbspOrganisation et maîtrise des flux dans les files d’attente.</ul>
              <!-- <ul><i class="material-icons">check_circle</i> Le port du masque est obligatoire !</ul>
              <ul><i class="material-icons">check_circle</i> Du gel hydroalcoolique est à disposition, utilisez le fréquemment.</ul>
              <ul><i class="material-icons">check_circle</i> Les espaces de conférences sont aménagés pour conserver la distanciation.</ul>
              <ul><i class="material-icons">check_circle</i> Organisation et maîtrise des flux dans les files d’attente.</ul> -->
              <h4>Pass sanitaire</h4>
              <p>Le pass sanitaire est obligatoire pour tous les évènements de plus de 50 personnes.
                Pour se rendre dans plusieurs lieux à partir du 21 juillet, les visiteurs doivent présenter un pass sanitaire qui peut être :</p>
              <ul><i class="fas fa-check-circle fa-1s"></i>&nbspUn certificat de vaccination complet (2 doses + 7 jours) en version papier ou numérique sur un smartphone</ul>
              <ul><i class="fas fa-check-circle fa-1s"></i>&nbspUn test PCR ou antigénique de moins de 72h</ul>
              <ul><i class="fas fa-check-circle fa-1s"></i>&nbspLe résultat d’un test PCR ou antigénique positif attestant du rétablissement de la Covid-19 datant d’au moins 15 jours et de moins de 6 mois</ul>
              <!-- <ul><i class="material-icons">check_circle</i> Un certificat de vaccination complet (2 doses + 7 jours) en version papier ou numérique sur un smartphone</ul>
              <ul><i class="material-icons">check_circle</i> Un test PCR ou antigénique de moins de 72h</ul>
              <ul><i class="material-icons">check_circle</i> Le résultat d’un test PCR ou antigénique positif attestant du rétablissement de la Covid-19 datant d’au moins 15 jours et de moins de 6 mois</ul> -->
              <p class="text-purple"><i class="fas fa-minus-circle fa-1s"></i>&nbsp<b>Attention</b>, un autotest n’est pas considéré comme un pass sanitaire valable..</p>
              <a href="https://www.gouvernement.fr/info-coronavirus/pass-sanitaire" target="_blank"><p><i class="fas fa-info-circle fa-1s red-text"></i>&nbspPour plus d'information, consultez : <b>le site du gouvernement</b></p></a>
              <!-- <p class="text-purple"><i class="material-icons">remove_circle</i> <b>Attention</b>, un autotest n’est pas considéré comme un pass sanitaire valable..</p>
              <a href="https://www.gouvernement.fr/info-coronavirus/pass-sanitaire" target="_blank"><p><i class="material-icons red-text">info_outline</i> Pour plus d'information, consultez : <b>le site du gouvernement</b></p></a> -->
            </div>
            <div class="col s12 m6 l3 offset-m3 center-align">
              <img src="assets/icons/Pass-sanitaire-visuel-300x290.png" class="img60" alt="pass sanitaire">
              <div class=" mt40"><a href="https://b-boost.fr/code-de-conduite/" class="waves-effect waves-light z-depth-3 btn">Code de conduite du salon</a></div>
            </div>
          </div>
        </div>

        <div class="container center-align"><a href="#begin" class="black-text"><i class="fa fa-angle-up  fa-2x"></i></a></div>

      </div><!--ENDcontainer-->

      <?php
      include("footer.php");
      ?>
    </body>
</html>
