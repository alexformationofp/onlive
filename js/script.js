console.log('Rock n roll');


// RETRECISSEMENT DE LA NAV XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

nav = document.querySelectorAll(".nav-link");
window.addEventListener("scroll", function() {
  
  if (document.documentElement.scrollTop > 100) {
    nav.forEach(element => {
      element.style.paddingTop = ".8rem";
      element.style.paddingBottom = ".8rem";
    });
    document.querySelector('#navigation').style.borderStyle = "none";
    } else {
    nav.forEach(element => {
      element.style.paddingTop = "2.6rem";
      element.style.paddingBottom = "2rem";
    });
    document.querySelector('#navigation').style.borderBottomStyle = "solid";
  }
});

// DEFILEMENT XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

jQuery(document).ready(function() {
  jQuery(".js-scrollTo").on("click", function() {
    var navigaion = jQuery("#navigation");
    var page = jQuery(this).attr("href"); // Page cible
    var speed = 500; // Durée de l'animation (en ms)
    jQuery("html, body").animate({ scrollTop: (jQuery(page).offset().top - navigation.offsetHeight) }, speed); // Go
   
    return false;

  });

});