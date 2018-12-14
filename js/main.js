
function main() {

(function () {
   'use strict';

  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 50
            }, 900);
            return false;
          }
        }
      });


    $('body').scrollspy({
        target: '.navbar-default',
        offset: 80
    });

	// Hide nav on click
  $(".navbar-nav li a").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });


    // Nivo Lightbox
    $('.portfolio-item a').nivoLightbox({
            effect: 'slideDown',
            keyboardNav: true,
        });

}());

var canvas = document.getElementById("can");
var ctx = canvas.getContext("2d");
var lastend = 0;
var data = [50, 50]; // If you add more data values make sure you add more colors
var myTotal = 0; // Automatically calculated so don't touch
var myColor = ['red', 'white']; // Colors of each slice

for (var e = 0; e < data.length; e++) {
  myTotal += data[e];
}

for (var i = 0; i < data.length; i++) {
  ctx.fillStyle = myColor[i];
  ctx.beginPath();
  ctx.moveTo(canvas.width / 2, canvas.height / 2);
  // Arc Parameters: x, y, radius, startingAngle (radians), endingAngle (radians), antiClockwise (boolean)
  ctx.arc(canvas.width / 2, canvas.height / 2, canvas.height / 2, lastend, lastend + (Math.PI * 2 * (data[i] / myTotal)), false);
  ctx.lineTo(canvas.width / 2, canvas.height / 2);
  ctx.fill();
  lastend += Math.PI * 2 * (data[i] / myTotal);

  canvas.style="border : 2px solid black; border-radius : 25px";
}

}
main();
