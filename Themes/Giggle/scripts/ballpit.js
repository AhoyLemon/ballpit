// jshint -W117

function trackEvent(c, a, l, v) {
  if (v) {
    _paq.push(['trackEvent', c, a, l, v]);
    ga('send', 'event', { eventCategory: c, eventAction: a, eventLabel: l, eventValue:v });
    console.log('CATEGORY: '+c+', ACTION:'+a+', LABEL:'+l+', VALUE:'+v);
  } else if (l) {
    _paq.push(['trackEvent', c, a, l]);
    ga('send', 'event', { eventCategory: c, eventAction: a, eventLabel: l });
    console.log('CATEGORY: '+c+', ACTION:'+a+', LABEL:'+l);
  } else {
    _paq.push(['trackEvent', c, a]);
    ga('send', 'event', { eventCategory: c, eventAction: a });
    console.log('CATEGORY: '+c+', ACTION:'+a);
  }
}

/* jshint -W117 */
$(document).ready(function() {
  $('.hamburger').click(function() {
    $('#bar').slideToggle(150);
  });

  // Hide or show nsfw content.
  $('#forumposts').on('click', 'figure.nsfw figcaption a', function() {
    var h = window.location.search.slice(1);
    trackEvent('nsfw', 'expanded', h);
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
    trackEvent('spoiler', 'toggled', h);
    $(this).toggleClass('spoiled');
  });
});