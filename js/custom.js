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

// task_dis = skillset
  function loc() {
    var   zones = document.getElementsByName('district');
    var zone;
    for (var i = 0; i <   zones.length; i++) {
      if (  zones[i].checked) {
        zone =   zones[i].value;
      }
    }

    $.ajax({

      url: "includes/taskers.php",
      method: "POST",
      data: {
      zone: zone
      },
      dataType: "text",
      success: function(data) {
        if (data != '') {
          document.getElementById("skillset").innerHTML = data; //response;
        } else {
          alert(zone);
        }
      }
    });

  }

  function find_art(){
    var find = document.getElementById('find_art');



  }
