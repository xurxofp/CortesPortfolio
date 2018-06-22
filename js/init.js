 (function($){
  $(function(){
    
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.slider').slider();
    $('.scrollspy').scrollSpy();
    $('.tooltipped').tooltip();
    
    }); // end of document ready
  })(jQuery); // end of jQuery name space

var elem = document.querySelector('.fixed-action-btn');
var instance = M.FloatingActionButton.init(elem, {
    direction: 'left'
});


