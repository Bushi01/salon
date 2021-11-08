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
