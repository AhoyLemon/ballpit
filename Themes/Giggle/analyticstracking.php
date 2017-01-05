<?php // PIWIK ?>

<?php global $context, $user_info; ?>

<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.ballp.it"]]);
  <?php if ($context['user']['id'] != 0 && $context['user']['is_guest'] == false) {
    echo "_paq.push(['setUserId', '" . $context['user']['name'] . "']);";
  } ?>

  <?php $userGroup = "Guest"; ?>

  <?php if (in_array(1, $user_info['groups'])) {
    $userGroup = "Admin";
  } else if (in_array(9, $user_info['groups'])) {
    $userGroup = "Ridiculist";
  } else if (in_array(10, $user_info['groups'])) {
    $userGroup = "Paid";
  } else if (in_array(4, $user_info['groups'])) {
    $userGroup = "Unpaid";
  } ?>
  _paq.push(['setCustomVariable', 1, "userGroup", "<?php echo $userGroup; ?>", "visit"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//thefpl.us/analytics/";
    _paq.push(['setTrackerUrl', u+'pwk.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//thefpl.us/analytics/pwk.php?idsite=2" style="border:0;" alt="" /></p></noscript>

<?php /*

  // Google Analytics 

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-15129990-11', 'auto');
    ga('send', 'pageview');
  </script>
/*
?>