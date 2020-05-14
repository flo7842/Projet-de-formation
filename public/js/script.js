'use strict';

/* Loader */

function showContent(){
    document.querySelector('.loader-container').classList.add('hidden');
}

setTimeout(showContent, 3000);





/* Menu Hamburger */

let content = document.querySelector('#hamburger-content');
let sidebarBody = document.querySelector('#hamburger-sidebar-body');
let button = document.querySelector('#hamburger-button');
let overlay = document.querySelector('#hamburger-overlay');
let activatedClass = 'hamburger-activated';

sidebarBody.innerHTML = content.innerHTML;

button.addEventListener('click', function(e){
    e.preventDefault();

    this.parentNode.classList.add(activatedClass);
});

button.addEventListener('keydown', function(e){
    if(this.parentNode.classList.contains(activatedClass)){
        if(e.repeat === false && e.which === 27)
            this.parentNode.classList.remove(activatedClass);
    }
})

overlay.addEventListener('click', function(e){
    e.preventDefault();

    this.parentNode.classList.remove(activatedClass);
})

/* User Profil */

let user = document.getElementById('user');
let connexion = document.getElementById('connect');

function onclickUser(){

        connexion.classList.toggle('connexion-none');
        user.classList.toggle('user-color');


}


user.addEventListener('click', onclickUser);





