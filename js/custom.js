var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});


// js code to output artisan skills
function showSkills(str){
 if (str == ""){
   document.getElementById("skillset").innerHTML ="";
   return;
 }
 else {
   xttp = new XMLHttpRequest();
   xttp.onreadystatechange = function () {
     if (this.readyState == 4 && this.status ==200 ) {
       document.getElementById("skillset").innerHTML = this.responseText;
     }
   };
   xmlhttp.open("GET","taskers.php?q=" + str,true);
   xmlhttp.send();
 }
}

function alert1(){
  alert("Login successful");
}
