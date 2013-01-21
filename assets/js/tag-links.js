jQuery(document).ready(function ($) {
  var outbound = /^https?:\/\/(.*?)\//i;
  var mailto = /^mailto:(.*)/i;
  $('a').each( function( index ) {
    var m;
    if (this.href.indexOf(location.host) == -1 
        && (m = outbound.exec(this.href))) 
    {
      $(this).click(function() {
        _gaq.push(['_trackEvent', 'Outbound Traffic', m[1], this.href]);
        setTimeout('document.location = "' + this.href + '"', 100);
        return false;
      });
    }
    else if ((m = mailto.exec(this.href))) {
      $(this).click(function() {
        _gaq.push(['_trackEvent', 'Mailto', m[1], this.href]);
        return true;
      });
    }
  });
});
