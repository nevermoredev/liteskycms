	$(document).ready(function() {
  $('a.slowly-down').click(function(event) {
    var click = $(this).attr('href');
    var dist =  $(click).offset().top - 100; // Отступ от вверха
    $('html, body').animate({scrollTop: dist}, 1000)
  });

});

$('#hellopreloader').delay(2000).fadeOut(600)

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


