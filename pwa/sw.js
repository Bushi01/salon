let staticCacheName = 'site-static-v1';
let dynamicCacheName = 'site-dynamic-v1';
/*sw.js:1 Non-recuperation (dans la promesse) TypeError : Impossible d'executer 'Cache' sur 'addAll' : La requête a eschoue*/
let assets = [
  '/',
  '/index.php',
  '/pagesEn/indexEn.php',
  '/accueil.php',
  '/pagesEn/accueilEn.php',
  '/header.php',
  '/pagesEn/headerEn.php',
  '/navbar.php',
  '/pagesEn/navbarEn.php',
  '/carousel.php',
  '/pagesEn/carouselEn.php',
  '/footer.php',
  '/pagesEn/footerEn.php',
  '/app.js',
  '/manifest.json',
  '/js/materialize.js',
  '/css/style.css',
  '/css/materialize.css',
  '/css/all.css',
  '/css/latofonts.css',
  '/fallback.php',
  '/pagesEn/fallback.php',
  '/assets/404.png',
  '/assets/icons/favicon.ico',
  '/assets/icons/badgesBboostBronze.png',
  '/assets/icons/badgesBboostGold.png',
  '/assets/icons/badgesBboostSilver.png',
  '/assets/icons/BCO.png',
  '/assets/icons/CYB.png',
  '/assets/icons/DAT.png',
  '/assets/icons/SOB.png',
  '/assets/icons/SOU.png',
  '/assets/icons/enFlag-100.png',
  '/assets/icons/frFlag-100.png',
  '/assets/icons/BlocEuro-Region.png',
  '/assets/icons/logo_na_horiz_QUADRI_2019.png',
  '/assets/icons/LogoBB21-C-FT-500.png',
  '/assets/icons/logo-cnll-2017.png',
  '/assets/icons/LogoNAOS-C-FB.png',
  '/assets/icons/LR-Technopole.png',
  '/assets/icons/CALR.png',
  '/assets/icons/pwaExplain.png',
  '/assets/images/avatar.jpg',
  '/assets/images/avatarLogo.jpg',
  '/assets/icons/icon-32.png',
  '/assets/icons/icon-48.png',
  '/assets/icons/icon-64.png',
  '/assets/icons/icon-96.png',
  '/assets/icons/icon-128.png',
  '/assets/icons/icon-192.png',
  '/assets/icons/icon-256.png',
  '/assets/icons/icon-512.png',
  '/assets/icons/iconeBb.png',
  '/assets/images/materiel/panoramique900.png'
];

/* fonction qui limite la taille du cache*/
const limitCacheSize = (name, size) => {
  caches.open(name).then(cache => {
    cache.keys().then(keys => {
      if(keys.length > size){
        cache.delete(keys[0]).then(limitCacheSize(name, size));
      }
    });
  });
};

/* install du SW et enregistrement dans le cache des ressources statiques*/
self.addEventListener('install', evt => {
  // console.log('service worker installe avec success');
  evt.waitUntil(
    caches.open(staticCacheName).then((cache) => {
      // console.log('caching shell assets !!');
      return cache.addAll(assets);
      // console.log('apres addAll');
    })
  );
});

/* Fonction qui efface les entrees des caches dont le nom n'est pas celui donné par les constantes staticCacheName et dynamicCacheName pour le versionning*/
self.addEventListener('activate', evt => {
  // console.log('service worker activé');
  evt.waitUntil(
    caches.keys().then(keys => {
      // console.log(keys);
      return Promise.all(keys
        .filter(key => key !== staticCacheName && key !== dynamicCacheName)
        .map(key => caches.delete(key))
      );
    })
  );
});

/*fonction qui intercepte les requetes en direction du serveur.
Renvoie la ressource du cache si elle s'y trouve et dans un meme temps la met à jour via une requete serveur,
sinon renvoie la reponse du serveur et ajoute cette ressource au cache.
Attention, il y a donc toujours une version de cache de retard à l'affichage !*/
self.addEventListener('fetch', evt => {
  if(evt.request.url.indexOf('galerie.php')===-1){//si c'est la page galerie alors pas de mise en cache et pas de recherche ds le cache
    evt.respondWith(
      caches.match(evt.request).then(cacheRes => {
        return cacheRes || fetch(evt.request).then(fetchRes => {
          return caches.open(dynamicCacheName).then(cache => {
            cache.put(evt.request.url, fetchRes.clone());
            // check de la quantite d'item dans le cache
            limitCacheSize(dynamicCacheName, 30);
            return fetchRes;
          })
        });
      }).catch(() => {
        if(evt.request.url.indexOf('.php') > -1){
          return caches.match('fallback.php');
        }
      })
    );
  }else{
    if(evt.request.url.indexOf('.php') > -1){
      return caches.match('fallback.php');
    }
  }
});
