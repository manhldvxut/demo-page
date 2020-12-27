$(document).ready(function(){
   /* hover add class*/
    $(".js-hover").hover(
      function () {
        $(this).addClass('is-over');
      }, 
      function () {
        $(this).removeClass("is-over");
      }
    );
})

