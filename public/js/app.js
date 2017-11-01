function sendContact(){
	alert('you hav send a contact');
}

/* off-canvas sidebar toggle */
$('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
    $('span.collapse').toggleClass('in');
});

$('[data-toggle=offcanvas-in]').click(function() {
    $('.row-offcanvas').addClass('active');
    $('span.collapse').addClass('in');
});

$('#electrical').show();

/*content change according to sidebar*/
$(".sidebar-nav a").on('click',function(e) {
   e.preventDefault(); // stops link form loading
   $('.content').hide(); // hides all content divs
   $( $(this).attr('href') ).show(); //get the href and use it find which div to show
});

/*toggle menu*/
$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

/*scrolling smooth*/
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
      
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 162.083
      }, 900);
    } // End if
  });
});