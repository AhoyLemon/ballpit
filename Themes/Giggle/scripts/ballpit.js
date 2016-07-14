/* jshint -W117 */
$(document).ready(function() {
   $('.hamburger').click(function() {
        $('#bar').slideToggle(150);
   });
  
  // Hide or show nsfw content.
  $('#forumposts').on('click', 'figure.nsfw figcaption a', function() {
    var h = window.location.search.slice(1);
    console.log('nsfw, expanded, '+h);
    ga('send', 'event', { eventCategory: 'nsfw', eventAction: 'expanded', eventLabel:h });
    if ( $(this).hasClass('active') ) {
      $(this).removeClass('active');
      $(this).text('Click to show.');
      $(this).parent().siblings('.holder').slideUp(300);
    } else {
      $(this).addClass('active');
      $(this).text('Click to hide.');
      $(this).parent().siblings('.holder').slideDown(450);
    }
  });
  
  // Same as above, but if you're in preview mode.
  $('#preview_body').on('click', 'figure.nsfw figcaption a', function() {
    if ( $(this).hasClass('active') ) {
      $(this).removeClass('active');
      $(this).text('Click to show.');
      $(this).parent().siblings('.holder').slideUp(300);
    } else {
      $(this).addClass('active');
      $(this).text('Click to hide.');
      $(this).parent().siblings('.holder').slideDown(450);
    }
  });
  
  // Hide or show [spoiler] content.
  $('body').on('click', 'span.spoiler', function() {
    var h = window.location.search.slice(1);
    console.log('spoiler, toggled, '+h);
    ga('send', 'event', { eventCategory: 'spoiler', eventAction: 'toggled', eventLabel:h });
    $(this).toggleClass('spoiled');
  });
});