let popup = document.querySelector('#popup');
let section = document.querySelector('#popup section');

let decompte = function() {
  popup.classList.remove('actif');
};

document.addEventListener('DOMContentLoaded', function(){
section.innerHTML ='Votre message a bien été envoyé.';
popup.classList.add('actif');
setTimeout(decompte,2000);
});
