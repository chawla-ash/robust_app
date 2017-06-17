
  $('.button-collapse').sideNav({
      menuWidth: 200, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );

    $(document).ready(function() {
    $('input#phone').characterCounter();
  });
        
  $(document).ready(function(){
      $('.parallax').parallax();
    $('.parallax2').parallax();
    });

 $(document).ready(function(){
      $('.carousel').carousel();
    });
        