$(document).ready(function() {
  $("#vote").submit(function(event) {
    $('#form').addClass("hidden");
     if ($('input[name=expansion]:checked').length > 0) {
       var $name = $('input[name=expansion]:checked').val();
       document.getElementById("expPicked").innerHTML = "Response recorded: You voted for " + $name + ".";
    }
    else {
      $('#notRecorded').removeClass("hidden");
    }

    return false;
  });

  $('.trigger').click(function() {
    $('.dropdown-menu').toggleClass('visible');
  });
});



