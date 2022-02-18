//Sidebar
let sidebar = document.querySelector('.wrapperSidebar')
let menubutton = document.querySelector('.menuButton')
let mainClose = document.querySelector(".contentMain")

menubutton.addEventListener('click', function(e) {
  sidebar.classList.toggle('sidebar-active')
});

mainClose.addEventListener('click', function(e) {
    sidebar.classList.remove('sidebar-active')
});

//Preloader
$(window).on('load', function() {
  $('.wrapperPreloader').fadeOut('slow');
});