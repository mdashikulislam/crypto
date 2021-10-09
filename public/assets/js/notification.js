/*===================================
File Name    : notification.js
Description  : Notifications JS.
Author       : Bestwebcreator.
Template Name: Cryptocash – ICO, Cryptocurrency Website & ICO Landing Page HTML + Dashboard Template
Version      : 1.7
===================================*/

var times = [3120, 4442, 5224, 7510, 8636, 16002, 17222];
var prenom = ['Cecilia', 'Arthur', 'Rayan', 'Alfred', 'Fred', 'Philippe', 'Guillaume', 'Amaury', 'Alex', 'Eric', 'Alicia', 'Lucas', 'Pierre', 'Mohamed', 'Antoine', 'David', 'Theo', 'Guy', 'Ilan', 'Bastien', 'Julien', 'Nawal', 'Mael', 'Céline', 'Imane', 'Benoit', 'Jean-Luc', 'Marine', 'Hugo', 'Quentin', 'Jamel', 'Tom', 'Bryan'];
var countries = ['frn_flage'];
var themeInterval = setInterval('notification()', time());

function time() {
    return   times[parseInt(Math.random()*7)] + 8000;
}
function notification() {
    spop({
        template: '<div class="sale_notification d-flex align-items-center"><img src="assets/images/about_icon.png" alt="" /> <div class="notification_inner"> <h3>'+prenom[Math.floor(Math.random()*33)]+' vient de s\'inscrire</h3><p>Pays : <img src="assets/images/frn_flage.png" alt="" />&nbsp;<a href="/inscription" >S\'inscrire</a>&nbsp;<i class="fa fa-mouse-pointer" aria-hidden="true"></i></p></div></div>',
        group: 'submit-satus',
		style     : 'nav-fixed',// error or success
        position  : 'bottom-left',
        autoclose: 5000,
        icon: false
    });
    clearInterval(themeInterval);
    themeInterval = setInterval('notification()', time());
}