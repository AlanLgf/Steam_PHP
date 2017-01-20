$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".mon_scroll").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $("#info_container").hide();
  $("#info_profil_close").hide();
  $("#info_profil").click(function(){
    $("#info_container").show(400);
    $("#info_profil_close").show();
    $("#info_profil").hide();
    $("html, body").animate({
            scrollTop : $("#info_container").offset().top
    }, 400);
  });
  $("#info_profil_close").click(function(){
    $("#info_container").hide(400);
    $("#info_profil_close").hide();
    $("#info_profil").show();
    $("html, body").animate({
            scrollTop : $("#main1").offset().top
    }, 400);
  });
  $(".button-container").hide();
    $(".button_close").hide();
  $(".button_open").click(function(){
    $(".button-container").show(400);
    $(".button_close").show();
    $(".button_open").hide();
    $("html, body").animate({
            scrollTop : $(".button-container").offset().top
    }, 100);
  });


});
jQuery(document).ready(function (){

   $(".nom_jeu").hide();
   //Search fonction
            $('#input_jeu').keyup(function () {
                var input_content = $.trim($(this).val());
                if (!input_content) {
                    $('.container_jeu').show(200);
                }
                else {
                    $('.container_jeu').show().not(':contains(' + input_content  + ')').hide();
                }
            });


});
