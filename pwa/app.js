/*
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
*/

/*Enregistrement du sw*/
if('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/sw.js', { updateViaCache: 'none' })/*URL courante*/
  .then((reg) => console.log('SW enregistre :)', reg))
  .catch((err) => console.log('SW non enregistre :(', err));
}else {
   console.log('Ce navigateur ne supporte pas cette API :(');
}

/*cookie de langue*/
let frBtn = document.getElementById("frBtn");
let enBtn = document.getElementById("enBtn");
let date = new Date(Date.now() + 86400000*4); //86400000ms = 1 jour donc 4 jours
// let date = new Date(Date.now());
date = date.toUTCString();
if(frBtn!=null){
  frBtn.addEventListener("click", function() {
    document.cookie="lang=fr; path=/; expires=' + date;";
  });
}
if(enBtn!=null){
  enBtn.addEventListener("click", function() {
    document.cookie="lang=en; path=/; expires=' + date;";
  });
}

/*Affichage mode offline ou online*/
const offlineBlock = document.getElementById('offline') ;
// const onlineBlock = document.getElementById('online');
if(!navigator.onLine) {
  offlineBlock.setAttribute('hidden', '');
}
if(offlineBlock!=null){
  window.addEventListener('online', evt => {
    offlineBlock.setAttribute('hidden', '');
    // onlineBlock.setAttribute('hidden');
  });
  window.addEventListener('offline', evt => {
    offlineBlock.removeAttribute('hidden');
    // onlineBlock.removeAttribute('hidden', '');
  });
}

/*bouton installation SW */
let addBtn = document.getElementById("addBtn");
let deferredPrompt;
if(addBtn!=null){
  addBtn.style.display = 'none';
  /*Le navigateur declenche un evt beforeinstallprompt*/
  window.addEventListener('beforeinstallprompt', (evt) => {
    evt.preventDefault();
    deferredPrompt = evt;
    // showInstallPromotion();
    addBtn.style.display = 'inline-block';
    addBtn.addEventListener("click", function() {
      // hideInstallPromotion();
      addBtn.style.display = 'none';
      deferredPrompt.prompt();//attention à des compatibilites (firefox pr android, opera pr Android, safari pr iOs)
      deferredPrompt.userChoice.then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the A2HS prompt');
          } else {
            console.log('User dismissed the A2HS prompt');
          }
          deferredPrompt = null;
      });
    });
  });
}

/*evt de detection d installation*/
window.addEventListener('appinstalled', ()=>{
  hideInstallPromotion();
  deferredPrompt=null;
  console.log('la PWA est installée');
});

/*materialize*/
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems,{});
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems,{});//erreur ici, options n'est pas défini, ne pas oublier {}
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(elems,{});
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.autocomplete');
  var instances = M.Autocomplete.init(elems,{});
});

  /*compteur rebour pour les plages de texte*/
$(document).ready(function() {
  $('input#textFrEnt, input#textEnEnt').characterCounter();
});

 /*toast*/
 $(document).ready(function(){
  $('.tooltipped').tooltip({delay: 50});
});

  /*carousel*/
document.addEventListener('DOMContentLoaded', function() {
  var options = {
  duration: 200,
  numVisible: 5
  };
  var elems = document.querySelectorAll('.carousel');
  // console.log(elems);
  var instances = M.Carousel.init(elems,options);
  var elem = document.querySelector('.carousel');
  // console.log(elem);
  var instance = M.Carousel.init(elem,options);

  if(elems.length>0){
    setInterval(function() {
      instance.next();
    }, 2000); // 2 secondes
  }
});
