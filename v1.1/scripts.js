var sidebarButton = $('#sidebar-button');
var sidebar = $('#sidebar');
var sidebarPush = $('#sidebar-push');
var overlay = $('#overlay');

sidebarButton.click(function() {
  if (sidebar.hasClass('open')) {
    sidebar.removeClass('open');
    sidebarButton.removeClass('open');
    sidebarPush.removeClass('open');
    overlay.removeClass('open');
  } else {
    sidebar.addClass('open');
    sidebarButton.addClass('open');
    sidebarPush.addClass('open');
    overlay.addClass('open');
  }
});

$('#overlay').click(function() {
  if (sidebarPush.hasClass('open')) {
    sidebar.removeClass('open');
    sidebarButton.removeClass('open');
    sidebarPush.removeClass('open');
    overlay.removeClass('open');
  }
});
$('#close a').click(function() {
  if (sidebarPush.hasClass('open')) {
    sidebar.removeClass('open');
    sidebarButton.removeClass('open');
    sidebarPush.removeClass('open');
    overlay.removeClass('open');
  }
});

$(document).scroll(function() {
  if($(document).scrollTop() > 70) {
    $('.navbar').addClass('hidden-up');
  } else {
    if ($('.navbar').hasClass('hidden-up')) {
      $('.navbar').removeClass('hidden-up');
    }
  }
});
