
$(document).ready(function () {
$(function(){
    $('.picslider img:gt(0)').hide();
    setInterval(function(){
      $('.picslider :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.picslider');}, 
      3000);
});

});