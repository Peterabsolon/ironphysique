$(document).ready(function(){

  // ------------------------------------------------------------
  // Hamburger icon effect
  // ------------------------------------------------------------   

	var trigger  = $('#hamburger'),
      isClosed = true;

  trigger.click(function(){
    burgerTime();
    $('body').toggleClass('show-sidebar show-main-overlay');
  });

  function burgerTime() {
    if (isClosed == true) {
      trigger.removeClass('is-open');
      trigger.addClass('is-closed');
      isClosed = false;
    } else {
      trigger.removeClass('is-closed');
      trigger.addClass('is-open');
      isClosed = true;
    }
  }	


  // ------------------------------------------------------------
  // Stretches the sidebar to 100% VH; TODO: vh in CSS
  // ------------------------------------------------------------

  var windowHeight = $(window).height();
  var documentHeight = $(document).height();
  $('.sidebar').css({height: documentHeight});  
  $('.sidebar-inner').css({height: windowHeight + 25});

  // ------------------------------------------------------------
  // Text input effect
  // ------------------------------------------------------------

  function fixinputs(){
    $(this).parent('span').addClass('input--filled');
  }
  
  setTimeout(function() {
    $('input').each(function() {
        var elem = $(this);
        if (elem.val()) fixinputs();
        console.log(elem);
    })
  }, 250);    

  $("form").on({
      blur: function() {
        if( this.value ) {
          $(this).parents('span').addClass('input--filled');
        }
      },
      focusout: function() {
        if( !this.value ) {
          $(this).parents('span').removeClass('input--filled');
        }
      },
      change: function() {
        fixinputs();
      }
  }, "input");

  // ------------------------------------------------------------
  // Highlight current menu item in mobile/tablet sidebar
  // ------------------------------------------------------------

  var currentPage = $('body').attr('class');
  $('.sidebar-menu .' + currentPage).addClass('active');

  // ------------------------------------------------------------
  // Homepage redirect confirm
  // ------------------------------------------------------------

  $('.page-index .hero .button').confirmation();

});