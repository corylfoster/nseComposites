 
jQuery(document).ready(function($) {
let page = jQuery(location).attr('href').split('.com/')[1].split('/')[0].toUpperCase();
let menuItems = ['SERVICES', 'PROJECTS', 'CUSTOMERS', 'ABOUT', 'CONTACT'];
if(page === '') return;
if(menuItems.indexOf(page) == -1) page = 'PUBLICATIONS';
jQuery('#primary-menu a:contains(' + page + ')').css({'color': '#438b5f'});
});