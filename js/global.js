// Look for .hamburger
var hamburger = document.querySelector(".hamburger");
// On click
hamburger.addEventListener("click", function() {
// Toggle class "is-active"
hamburger.classList.toggle("is-active");
	$("header .main-menu ul").toggleClass("is-active");
// Do something else, like open/close menu
});


// vertical easy scrolling
$(document).ready(function() {
	$('#fullpage').fullpage();
});