
jQuery(document).ready(function($) {

const search = document.getElementsByClassName('search-field')[0];
const button = document.getElementsByClassName('search-submit')[0];
const form= document.getElementsByTagName('fieldset')[0];

jQuery('.search-field').addClass('search-animation');

button.addEventListener('click', function(e) {
    if (jQuery('.search-field').className === 'search-field') {
        e.preventDefault();
    jQuery('.search-field').removeClass('search-animation');
    jQuery('.search-field').show();
    }else {
    jQuery('fieldset').submit();
    jQuery('.search-field').className = 'search-field';
    }
    
})


});



