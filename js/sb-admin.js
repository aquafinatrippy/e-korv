// Toggle the side navigation
$("#sidebarToggle").on('click', function(e) {
  e.preventDefault();
  $("body").toggleClass("sidebar-toggled");
  $(".sidebar").toggleClass("toggled");
});

// Prevent the content wrapper from scrolling when the fixed side navigation hovered over
$('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
  if ($(window).width() > 768) {
    var e0 = e.originalEvent,
      delta = e0.wheelDelta || -e0.detail;
    this.scrollTop += (delta < 0 ? 1 : -1) * 30;
    e.preventDefault();
  }
});

//Mine üles nupp
$(document).on('scroll', function() {
  var scrollDistance = $(this).scrollTop();
  if (scrollDistance > 100) {
    $('.scroll-to-top').fadeIn();
  } else {
    $('.scroll-to-top').fadeOut();
  }
});

// Smooth scrolling using jQuery easing
$(document).on('click', 'a.scroll-to-top', function(event) {
  var $anchor = $(this);
  $('html, body').stop().animate({
    scrollTop: ($($anchor.attr('href')).offset().top)
  }, 1000, 'easeInOutExpo');
  event.preventDefault();
});

//Esileht paneel
$(document).on('click', '#esileht', function(event) {
  if($('#area').css('display') == 'none'){
    $('#area').css('display', 'block');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'none');
  }else{
    $('#area').css('display', 'block');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'none');
  }
});

//Profiil paneel
$(document).on('click', '#seaded', function(event) {
  if($('#area').css('display') == 'none'){
    $('#area').css('display', 'none');
    $('#area1').css('display', 'block');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'none');
  }else{
    $('#area').css('display', 'none');
    $('#area1').css('display', 'block');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'none');
  }
});

//ostukorv paneel
$(document).on('click', '#koostaKorv', function(event) {
  if($('#area').css('display') == 'none'){
    $('#area').css('display', 'none');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'block');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'none');
  }else{
    $('#area').css('display', 'none');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'block');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'none');
  }
});

//ajalugu paneel
$(document).on('click', '#ajalugu', function(event) {
  if($('#area').css('display') == 'none'){
    $('#area').css('display', 'none');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'block');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'none');
  }else{
    $('#area').css('display', 'none');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'block');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'none');
  }
});

//kontakt paneel
$(document).on('click', '#kontakt', function(event) {
  if($('#area').css('display') == 'none'){
    $('#area').css('display', 'none');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'block');
    $('#area5').css('display', 'none');
  }else{
    $('#area').css('display', 'none');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'block');
    $('#area5').css('display', 'none');
  }
});

//korduma kippuvad küsimused
$(document).on('click', '#kkk', function(event) {
  if($('#area').css('display') == 'none'){
    $('#area').css('display', 'none');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'block');
  }else{
    $('#area').css('display', 'none');
    $('#area1').css('display', 'none');
    $('#area2').css('display', 'none');
    $('#area3').css('display', 'none');
    $('#area4').css('display', 'none');
    $('#area5').css('display', 'block');
  }
});

$(".add-row").click(function(){
  var Toode = $("#Toode").val();
  var Kogus = $("#number").val();
  var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + Toode + "</td><td>" + Kogus + "</td></tr>";
  $("table tbody").append(markup);
});
      
// Find and remove selected table rows
$(".delete-row").click(function(){
  $("table tbody").find('input[name="record"]').each(function(){
  	if($(this).is(":checked")){
      $(this).parents("tr").remove();
    }
  });
});
