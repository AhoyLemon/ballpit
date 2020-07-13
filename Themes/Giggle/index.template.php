<?php


// Initialize the template... mainly little settings.



function template_init()

{

  global $context, $settings, $options, $txt;



  /* Use images from default theme when using templates from the default theme?

		if this is 'always', images from the default theme will be used.

		if this is 'defaults', images from the default theme will only be used with default templates.

		if this is 'never' or isn't set at all, images from the default theme will not be used. */

  $settings['use_default_images'] = 'never';



  /* What document type definition is being used? (for font size and other issues.)

		'xhtml' for an XHTML 1.0 document type definition.

		'html' for an HTML 4.01 document type definition. */

  $settings['doctype'] = 'xhtml';



  /* The version this template/theme is for.

		This should probably be the version of SMF it was created for. */

  $settings['theme_version'] = '2.0';



  /* Set a setting that tells the theme that it can render the tabs. */

  $settings['use_tabs'] = true;



  /* Use plain buttons - as opposed to text buttons? */

  $settings['use_buttons'] = true;



  /* Show sticky and lock status separate from topic icons? */

  $settings['separate_sticky_lock'] = true;



  /* Does this theme use the strict doctype? */

  $settings['strict_doctype'] = false;



  /* Does this theme use post previews on the message index? */

  $settings['message_index_preview'] = false;



  /* Set the following variable to true if this theme requires the optional theme strings file to be loaded. */

  $settings['require_theme_strings'] = true;

}



// The main sub template above the content.

function template_html_above()

{

  global $context, $settings, $options, $scripturl, $txt, $modSettings;



  // Show right to left and the character set for ease of translating.

  echo '<!DOCTYPE html>

<html>

<head>';
  

  echo '
    <meta charset="iso-8859-1">
    <link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/css/ballpit.css?lastUpdated=2019-09-06" />
    <link rel="stylesheet" type="text/css" href="/Themes/Giggle/css/dark.css?updated=2020-07-12" />';

  echo '
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#4eb85d">
    <meta name="apple-mobile-web-app-title" content="ballpit">
    <meta name="application-name" content="ballpit">
    <meta name="msapplication-TileColor" content="#4eb85d">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#4eb85d">';

  echo '
    <!-- TWITTER -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@TheFPlus" />
    <meta name="twitter:title" content="'.$context['page_title_html_safe'].'" />
    <meta name="twitter:image" content="'.$_SERVER["REQUEST_SCHEME"].'://ballp.it/og-image.png" />
    <meta name="twitter:description" content="ballp.it is the community forum for The F Plus." />
    ';

  echo '
    <!-- OPEN GRAPH -->
    <meta property="og:title" content="'.$context['page_title_html_safe'].'">
    <meta property="og:type" content="website">
    <meta property="og:description" content="ballp.it is the community forum for The F Plus.">
    <meta name="og:image" content="'.$_SERVER["REQUEST_SCHEME"].'://ballp.it/og-image.png" />
    <meta property="og:email" content="lemon@thefpl.us">';

  // RTL languages require an additional stylesheet.

  if ($context['right_to_left']) echo '<link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/css/rtl.css" />';

  // Here comes the JavaScript bits!
  echo '
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/Themes/default/scripts/script.js?fin20"></script>';

  echo '
	<script type="text/javascript"><!-- // --><![CDATA[

		var smf_theme_url = "', $settings['theme_url'], '";

		var smf_default_theme_url = "', $settings['default_theme_url'], '";

		var smf_images_url = "', $settings['images_url'], '";

		var smf_scripturl = "', $scripturl, '";

		var smf_iso_case_folding = ', $context['server']['iso_case_folding'] ? 'true' : 'false', ';

		var smf_charset = "', $context['character_set'], '";', $context['show_pm_popup'] ? '

		var fPmPopup = function ()

		{

			if (confirm("' . $txt['show_personal_messages'] . '"))

				window.open(smf_prepareScriptUrl(smf_scripturl) + "action=pm");

		}

		addLoadEvent(fPmPopup);' : '', '

		var ajax_notification_text = "', $txt['ajax_in_progress'], '";

		var ajax_notification_cancel_text = "', $txt['modify_cancel'], '";

	// ]]></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>';



  echo '
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<meta name="description" content="', $context['page_title_html_safe'], '" />
	<title>', $context['page_title_html_safe'], '</title>';



  // Please don't index these Mr Robot.

  if (!empty($context['robot_no_index']))

    echo '

	<meta name="robots" content="noindex" />';



  // Present a canonical url for search engines to prevent duplicate content in their indices.

  if (!empty($context['canonical_url']))

    echo '

	<link rel="canonical" href="', $context['canonical_url'], '" />';



  // Show all the relative links, such as help, search, contents, and the like.

  echo '

	<link rel="help" href="', $scripturl, '?action=help" />

	<link rel="search" href="', $scripturl, '?action=search" />

	<link rel="contents" href="', $scripturl, '" />';



  // If RSS feeds are enabled, advertise the presence of one.

  if (!empty($modSettings['xmlnews_enable']) && (!empty($modSettings['allow_guestAccess']) || $context['user']['is_logged']))

    echo '

	<link rel="alternate" type="application/rss+xml" title="', $context['forum_name_html_safe'], ' - ', $txt['rss'], '" href="', $scripturl, '?type=rss;action=.xml" />';



  // If we're viewing a topic, these should be the previous and next topics, respectively.

  if (!empty($context['current_topic']))

    echo '

	<link rel="prev" href="', $scripturl, '?topic=', $context['current_topic'], '.0;prev_next=prev" />

	<link rel="next" href="', $scripturl, '?topic=', $context['current_topic'], '.0;prev_next=next" />';



  // If we're in a board, or a topic for that matter, the index will be the board's index.

  if (!empty($context['current_board']))

    echo '

	<link rel="index" href="', $scripturl, '?board=', $context['current_board'], '.0" />';



  // Output any remaining HTML headers. (from mods, maybe?)

  echo $context['html_headers'];
  $colorTheme = "light";
  $dayBegins = false;
  $dayEnds = false;

  /*
  if ( !$options || !$options["cust_colort"] || !$options["cust_colort"] == "Standard (Light Mode)") {
    $colorTheme = "light";
    $dayBegins = false;
    $dayEnds = false;
  } else if ($options["cust_colort"] == "Dark Mode") {
    $colorTheme = "dark";
    $dayBegins = false;
    $dayEnds = false;
    
  } else if  ($options["cust_colort"] == "Time Sensitive") {
    $currentTimeOfDay = date('G:i', strtotime($context['current_time']));
    
    $dayBegins = $options["cust_lightm"];
    $dayEnds = $options["cust_lightm0"];
    if ($currentTimeOfDay < $options["cust_lightm"]) {
      // Too Early for Light Mode
      $colorTheme = "dark";
    } else if ($currentTimeOfDay > $options["cust_lightm0"]) {
      // Too Late for Light Mode
      $colorTheme = "dark";
    } else {
      $colorTheme = "light";
    }
  }

  if ($colorTheme == "dark") {
    echo '<link rel="stylesheet" type="text/css" href="/Themes/Giggle/css/dark.css?updated=2019-09-06" />';
  }
  */

  echo '
</head>';
echo '<body color-theme="' . $colorTheme . '" begins="' . $dayBegins .'" ends="'.$dayEnds.'">
';

include("svgDefinitions.php");
}



function template_body_above()

{

  global $context, $settings, $options, $scripturl, $txt, $modSettings;

  echo '<!--';
  //echo '$  ';
  //var_dump($options);
  echo '-->';



  echo '

	<div id="top_banner">

		<div class="wrapper">

				<div class="user">
				';



  // If the user is logged in, display stuff like their name, new messages, etc.

  if ($context['user']['is_logged'])

  {

    if (!empty($context['user']['avatar']))

      echo '

						<p class="avatar">', $context['user']['avatar']['image'], '</p>';

    echo '

						<ul class="reset">

                                                        <li class="greeting">', $txt['hello_member_ndt'], ' <span>', $context['user']['name'], '</span> &bull; <a href="', $scripturl, '?action=unread">', $txt['new_posts'], '</a> &bull; <a href="', $scripturl, '?action=unreadreplies">', $txt['replies'], '</a></li>';



    echo '

						</ul>';

  }

  // Otherwise they're a guest - this time ask them to either register or login - lazy bums...

  else

  {

    echo '

							<div class="info" style="padding:5px;"> Welcome, <strong>Guest</strong>. Please <a href="http://ballp.it/index.php?action=login">login</a> or <a href="http://ballp.it/index.php?action=register">register</a>.</div>

							<!-- <script type="text/javascript" src="', $settings['default_theme_url'], '/scripts/sha1.js"></script>

							<form id="guest_form" action="', $scripturl, '?action=login2" method="post" accept-charset="', $context['character_set'], '" ', empty($context['disable_login_hashing']) ? ' onsubmit="hashLoginPassword(this, \'' . $context['session_id'] . '\');"' : '', '>

								<input type="text" name="user" size="17" class="input_text" />

								<input type="password" name="passwrd" size="17" class="input_password" />

								<input type="submit" value="', $txt['login'], '" class="button_submit" />

							</form> -->';

  }



  echo '
			     </div>

		     <div id="time"><span>', $context['current_time'],'</span></div>

		</div>

	</div>

	<div id="header">

		<div class="wrapper">

			<div id="search_box">

				<form action="', $scripturl, '?action=search2" method="post" accept-charset="', $context['character_set'], '">

				<input class="inputbox" type="search" name="search" placeholder="Search..."  />

                                <input id="submit" name="submit" type="submit" value="Search" />';



  // Search within current topic?

  if (!empty($context['current_topic']))

    echo '

					<input type="hidden" name="topic" value="', $context['current_topic'], '" />';

  // If we're on a certain board, limit it to this board ;).

  elseif (!empty($context['current_board']))

    echo '

					<input type="hidden" name="brd[', $context['current_board'], ']" value="', $context['current_board'], '" />';



  echo '</form>

		         </div>

			<a class="hamburger">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
          <path class="circle" id="HamburgerCircle" d="M50 96C24.6 96 4 75.4 4 50S24.6 4 50 4s46 20.6 46 46-20.6 46-46 46zm0-86.2C27.8 9.8 9.8 27.8 9.8 50s18 40.3 40.2 40.3S90.3 72.2 90.3 50 72.2 9.8 50 9.8z" />
          <path class="lines" id="HamburgerLines" d="M67.3 38.5H32.8c-1.6 0-2.9-1.3-2.9-2.9s1.3-2.9 2.9-2.9h34.5c1.6 0 2.9 1.3 2.9 2.9s-1.4 2.9-2.9 2.9zM67.3 52.9H32.8c-1.6 0-2.9-1.3-2.9-2.9s1.3-2.9 2.9-2.9h34.5c1.6 0 2.9 1.3 2.9 2.9s-1.4 2.9-2.9 2.9zM67.3 67.3H32.8c-1.6 0-2.9-1.3-2.9-2.9s1.3-2.9 2.9-2.9h34.5c1.6 0 2.9 1.3 2.9 2.9s-1.4 2.9-2.9 2.9z" />
          <path class="x" id="HamburgerX" d="M54.1 50l10.2-10.2c1.1-1.1 1.1-2.9 0-4.1s-2.9-1.1-4.1 0L50 45.9 39.8 35.8c-1.1-1.1-2.9-1.1-4.1 0s-1.1 2.9 0 4.1L45.9 50 35.8 60.2c-1.1 1.1-1.1 2.9 0 4.1 1.1 1.1 2.9 1.1 4.1 0L50 54.1l10.2 10.2c1.1 1.1 2.9 1.1 4.1 0 1.1-1.1 1.1-2.9 0-4.1L54.1 50z" />
        </svg>
      </a>
			<div id="logo">

				<a href="'.$scripturl.'" title=""></a>

			</div>

		</div>

	</div>';

  global $context, $user_info;

  if ($context['user']['is_guest'])

  {

    echo '

		<div class="statusbar">

			<div class="wrapper">

				<h2>ballp.it is the community forum for The F Plus.</h2>

				<p>You&apos;re only seeing part of the forum conversation. To see more, <a href="http://ballp.it/index.php?action=register">register for an account</a>. This will give you read-only access to nearly all the forums.</p>

			</div>

		</div>

		';

  }

  elseif ($context['user']['is_admin'])

  {

    echo '

		<div class="statusbar hidethis">

			<div class="wrapper">

				<h2>Hi Lemon.</h2>

			</div>

		</div>

		';

  }

  elseif (in_array(9, $user_info['groups']))

  {

    echo '

		<div class="statusbar hidethis">

			<div class="wrapper">

				<h2>Congratulations on being a Ridiculist.</h2>

			</div>

		</div>

		';

  }

  elseif (in_array(10, $user_info['groups']))

  {

    echo '

		<div class="statusbar hidethis">

			<div class="wrapper">

				<h2>I think you are a Paid member.</h2>

			</div>

		</div>

		';

  } else {

    echo '

		<div class="statusbar">

			<div class="wrapper">

				<h2>You do not yet have posting access.</h2>

				<p>As a registered member, you have read-only access to most of the forums. In order to post, you&apos;ll need to pay the <a href="http://ballp.it/index.php?action=profile;area=subscriptions">one-time fee</a>.<br /><a href="http://ballp.it/index.php?topic=16.msg28">Why is it ten bucks?</a></p>

			</div>

		</div>

		';

  }

  echo '

	<div id="bar">

		<div class="wrapper">
			', template_menu(), '
		</div>

	</div>

	<div id="main_body_section">

		<div class="wrapper">

			<div id="main_content_section">';



  // Show the navigation tree.

  theme_linktree();

}



function template_body_below()

{

  global $context, $settings, $options, $scripturl, $txt, $modSettings;



  echo '

			</div>

		</div>

	</div>';



  // Show the "Powered by" and "Valid" logos, as well as the copyright. Remember, the copyright must be somewhere!

  echo '

	<div id="footer">

		<ul class="reset">
			<li class="copyright">ballp.it is owned and operated by <b>The F Plus</b></li>
			<li><a id="button_xhtml" href="https://validator.w3.org/check?uri=referer" target="_blank" class="new_win" title="Valid HTML5"><span>HTML5</span></a></li>
			', !empty($modSettings['xmlnews_enable']) && (!empty($modSettings['allow_guestAccess']) || $context['user']['is_logged']) ? '<li><a id="button_rss" href="' . $scripturl . '?action=.xml;type=rss" class="new_win"><span>' . $txt['rss'] . '</span></a></li>' : '', '
			<li><a id="button_wap2" href="', $scripturl , '?wap2" class="new_win"><span>', $txt['wap2'], '</span></a></li>
			<li class="last"><a href="https://github.com/AhoyLemon/ballpit">GitHub repo</a></li>
		</ul>
        <a class="bottom-left-link" href="https://thefpl.us" title="Visit The F Plus&apos; website">
          <svg class="f-plus-logo logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 102 88">
            <path class="circle" d="M58.3 1.3c-12.6 0-23.9 5.5-31.7 14.2h50.1L73 19.4c-1.8 1.9-1.8 2-3.4 4.4-1.3 2-.9 4.1-.9 4.1l.5 2.5H55.3l1.7-3.5h-9.1l-6.1 15h7.9l4.1-9.1H68L63.9 42h10.8l-5.5 12.8H58.1l-4.3 9.6H39.6l4.3-9.6h-7.7l-6 13.2c-.8 1.7-1.8 3.3-3 4.6 7.7 8.3 18.8 13.5 31 13.5 23.4 0 42.5-19 42.5-42.5S81.8 1.3 58.3 1.3z" fill="#c1282d"/>
            <path class="f" d="M71.6 44H60.7l4.1-9.2h-9.7l-4 9.2H38.8l7.8-19.1 13.8-.1-1.7 3.5h8.1s-.6-2.8 1.2-5.6c1.8-2.8 1.8-2.7 4.1-5.1H14.3s-2.5 1.6-2.5 4S14 25 14 25l19.2-.1L24.8 44c-8.5 3.2-14.5 8.8-18 16.7l-4 9c-.3.7-.5 1.3-.5 1.9 0 1.8 1.2 3.2 3.6 4.2 2 .9 4.1 1.3 6.3 1.3 3.4 0 6.5-.8 9.3-2.4 3.1-1.8 5.4-4.3 6.9-7.5l6.5-14.4h12.2l-4.3 9.6h9.7l4.3-9.6h11.1l3.7-8.8zm-58 25.2c-.5 1-1.2 1.5-2.2 1.5-.9 0-1.3-.3-1.3-.9 0-.1 0-.2.1-.4l3.9-8.6c2-4.7 4.3-7.3 6.8-7.9-3.3 7.3-5.7 12.7-7.3 16.3z" fill="#222" />
          </svg>
        </a>';



  // Show the load time?

  if ($context['show_load_time'])

    echo '

		<p class="smalltext">', $txt['page_created'], $context['load_time'], $txt['seconds_with'], $context['load_queries'], $txt['queries'], '</p>';



  echo '

	</div>';

}



function template_html_below()

{

  global $context, $settings, $options, $scripturl, $txt, $modSettings;

  include("analyticstracking.php");
  
  echo "<script type='text/javascript' src='", $settings["theme_url"], "/scripts/ballpit.js?updated=06.04.18'></script>
        <script type='text/javascript'>
          if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
              console.log('Service worker registration succeeded:', registration);
        
            }, function(error) {
              console.log('Service worker registration failed:', error);
            });
          } else {
            console.log('Service workers are not supported.');
          }
        </script>
</body></html>";

}



// Show a linktree. This is that thing that shows "My Community | General Category | General Discussion"..

function theme_linktree($force_show = false)

{

  global $context, $settings, $options, $shown_linktree;



  // If linktree is empty, just return - also allow an override.

  if (empty($context['linktree']) || (!empty($context['dont_default_linktree']) && !$force_show))

    return;



  echo '

	<div class="navigate_section">

		<ul>';



  // Each tree item has a URL and name. Some may have extra_before and extra_after.

  foreach ($context['linktree'] as $link_num => $tree)

  {

    echo '

			<li', ($link_num == count($context['linktree']) - 1) ? ' class="last"' : '', '>';



    // Show something before the link?

    if (isset($tree['extra_before']))

      echo $tree['extra_before'];



    // Show the link, including a URL if it should have one.

    echo $settings['linktree_link'] && isset($tree['url']) ? '

				<a href="' . $tree['url'] . '"><span>' . $tree['name'] . '</span></a>' : '<span>' . $tree['name'] . '</span>';



    // Show something after the link...?

    if (isset($tree['extra_after']))

      echo $tree['extra_after'];



    // Don't show a separator for the last one.

    if ($link_num != count($context['linktree']) - 1)

      echo ' &#187;';



    echo '

			</li>';

  }

  echo '

		</ul>

	</div>';



  $shown_linktree = true;

}



// Show the menu up top. Something like [home] [help] [profile] [logout]...

function template_menu()

{

  global $context, $settings, $options, $scripturl, $txt;



  echo '

		<div id="navigation">

			<ul>';



  foreach ($context['menu_buttons'] as $act => $button)

  {

    echo '

				<li id="button_', $act, '">

					<a class="', $button['active_button'] ? 'active ' : '', 'firstlevel" href="', $button['href'], '"', isset($button['target']) ? ' target="' . $button['target'] . '"' : '', '>

						<span class="', isset($button['is_last']) ? 'last ' : '', 'firstlevel">', $button['title'], '</span>

					</a>';

    if (!empty($button['sub_buttons']))

    {

      echo '

					<ul>';



      foreach ($button['sub_buttons'] as $childbutton)

      {

        echo '

						<li>

							<a href="', $childbutton['href'], '"', isset($childbutton['target']) ? ' target="' . $childbutton['target'] . '"' : '', '>

								<span', isset($childbutton['is_last']) ? ' class="last"' : '', '>', $childbutton['title'], !empty($childbutton['sub_buttons']) ? '...' : '', '</span>

							</a>';

        // 3rd level menus :)

        if (!empty($childbutton['sub_buttons']))

        {

          echo '

							<ul>';



          foreach ($childbutton['sub_buttons'] as $grandchildbutton)

            echo '

								<li>

									<a href="', $grandchildbutton['href'], '"', isset($grandchildbutton['target']) ? ' target="' . $grandchildbutton['target'] . '"' : '', '>

										<span', isset($grandchildbutton['is_last']) ? ' class="last"' : '', '>', $grandchildbutton['title'], '</span>

									</a>

								</li>';



          echo '

							</ul>';

        }



        echo '

						</li>';

      }

      echo '

					</ul>';

    }

    echo '

				</li>';

  }



  echo '

			</ul>

		</div>';

}



// Generate a strip of buttons.

function template_button_strip($button_strip, $direction = 'top', $strip_options = array())

{

  global $settings, $context, $txt, $scripturl;



  if (!is_array($strip_options))

    $strip_options = array();



  // List the buttons in reverse order for RTL languages.

  if ($context['right_to_left'])

    $button_strip = array_reverse($button_strip, true);



  // Create the buttons...

  $buttons = array();

  foreach ($button_strip as $key => $value)

  {

    if (!isset($value['test']) || !empty($context[$value['test']]))

      $buttons[] = '

				<li><a' . (isset($value['id']) ? ' id="button_strip_' . $value['id'] . '"' : '') . ' class="button_strip_' . $key . (isset($value['active']) ? ' active' : '') . '" href="' . $value['url'] . '"' . (isset($value['custom']) ? ' ' . $value['custom'] : '') . '><span>' . $txt[$value['text']] . '</span></a></li>';

  }



  // No buttons? No button strip either.

  if (empty($buttons))

    return;



  // Make the last one, as easy as possible.

  $buttons[count($buttons) - 1] = str_replace('<span>', '<span class="last">', $buttons[count($buttons) - 1]);



  echo '

		<div class="buttonlist', !empty($direction) ? ' float' . $direction : '', '"', (empty($buttons) ? ' style="display: none;"' : ''), (!empty($strip_options['id']) ? ' id="' . $strip_options['id'] . '"': ''), '>

			<ul>',

  implode('', $buttons), '

			</ul>

		</div>';

}


?>