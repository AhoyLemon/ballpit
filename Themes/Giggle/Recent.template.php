<?php
/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines
 * @copyright 2011 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.0
 */

function template_main()
{
	global $context, $settings, $options, $txt, $scripturl;

	echo '
	<div id="recent" class="main_section recent-posts">
		<div class="pagesection">
			<span>', $txt['pages'], ': ', $context['page_index'], '</span>
		</div>';

	foreach ($context['posts'] as $post)
	{
		echo '
			<div class="', $post['alternate'] == 0 ? 'windowbg' : 'windowbg2', '">';
				
				/*
        echo '<pre style="display:none">';
        print_r($post);
				echo '</pre>';
				*/
				
				echo '<div class="single-post">
					<div class="post-summary">
            <div class="count">', $post['counter'], '</div>
            <div class="poster">', $post['poster']['link'], '</div>
            <div class="when">
              <span class="day">', gmdate("M j", $post['timestamp']), '</span>
              <span class="time">', gmdate("h:ia", $post['timestamp']), '</span>
            </div>
          </div>
          <div class="postarea">
					<div class="topic_details">
            <ul class="quickbuttons">';
            
              // BULB POST
    
              //unlit bulb
              if (($post['poster']['id'] == $context['user']['id']) || ($post['icanbulb'] == false)) {
                // echo '<li class="bulb unlit" id = "bulb_unlit_' . $message['id'] . '"><a href="', $scripturl, '?action=bulb;msg=', $message['id'], ';topic=', $context['current_topic'], '" title="Bulb this post as INSIGHTFUL"><svg viewBox="0 0 32 32" ><use xlink:href="#IconBulb"></use></svg></a></li>';
              }
              
              // If they *can* reply?
              if ($post['can_reply'])
                echo '<li class="reply_button"><a href="', $scripturl, '?action=post;topic=', $post['topic'], '.', $post['start'], '"><svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#PostReply"></use></svg></a></li>';
  
              // If they *can* quote?
              if ($post['can_quote'])
                echo '<li class="quote_button"><a href="', $scripturl, '?action=post;topic=', $post['topic'], '.', $post['start'], ';quote=', $post['id'], '"><svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#PostQuote"></use></svg></a></li>';
    
              // Can we request notification of topics?
              if ($post['can_mark_notify'])
                echo '<li class="notify_button"><a href="', $scripturl, '?action=notify;topic=', $post['topic'], '.', $post['start'], '"><svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconNotify"></use></svg></a></li>';
              
              // How about... even... remove it entirely?!
              if ($post['can_delete'])
                echo '<li class="remove_button"><a href="', $scripturl, '?action=deletemsg;msg=', $post['id'], ';topic=', $post['topic'], ';recent;', $context['session_var'], '=', $context['session_id'], '" onclick="return confirm(\'', $txt['remove_message'], '?\');"><svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#PostRemove"></use></svg></a></li>';
    
            echo '
            </ul>
            <h3 class="post-title">
              <span class="title">', $post['link'], '</span>
              <span class="number">(post #', $post['start'] ,')</span>
            </h3>
					</div>
					<div class="post">', $post['message'], '</div>
				</div></div>';

		echo '
				</span></span>
			</div>';

	}

	echo '
		<div class="pagesection">
			<span>', $txt['pages'], ': ', $context['page_index'], '</span>
		</div>
	</div>';
}

function template_unread()
{
	global $context, $settings, $options, $txt, $scripturl, $modSettings;

	echo '
	<div id="recent" class="main_content">';

	$showCheckboxes = !empty($options['display_quick_mod']) && $options['display_quick_mod'] == 1 && $settings['show_mark_read'];

	if ($showCheckboxes)
		echo '
		<form action="', $scripturl, '?action=quickmod" method="post" accept-charset="', $context['character_set'], '" name="quickModForm" id="quickModForm" style="margin: 0;">
			<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '" />
			<input type="hidden" name="qaction" value="markread" />
			<input type="hidden" name="redirect_url" value="action=unread', (!empty($context['showing_all_topics']) ? ';all' : ''), $context['querystring_board_limits'], '" />';

	if ($settings['show_mark_read'])
	{
		// Generate the button strip.
		$mark_read = array(
			'markread' => array('text' => !empty($context['no_board_limits']) ? 'mark_as_read' : 'mark_read_short', 'image' => 'markread.gif', 'lang' => true, 'url' => $scripturl . '?action=markasread;sa=' . (!empty($context['no_board_limits']) ? 'all' : 'board' . $context['querystring_board_limits']) . ';' . $context['session_var'] . '=' . $context['session_id']),
		);

		if ($showCheckboxes)
			$mark_read['markselectread'] = array(
				'text' => 'quick_mod_markread',
				'image' => 'markselectedread.gif',
				'lang' => true,
				'url' => 'javascript:document.quickModForm.submit();',
			);
	}

	if (!empty($context['topics']))
	{
		echo '
			<div class="pagesection">';

		if (!empty($mark_read) && !empty($settings['use_tabs']))
			template_button_strip($mark_read, 'right');

		echo '
				<span>', $txt['pages'], ': ', $context['page_index'], '</span>
			</div>';

		echo '
			<div class="tborder topic_table" id="unread">
				<table class="table_grid" cellspacing="0">
					<thead>
						<tr class="catbg">
							<th scope="col" class="first_th" width="5%" colspan="1">&nbsp;</th>
							<th scope="col">
								<a href="', $scripturl, '?action=unread', $context['showing_all_topics'] ? ';all' : '', $context['querystring_board_limits'], ';sort=subject', $context['sort_by'] == 'subject' && $context['sort_direction'] == 'up' ? ';desc' : '', '">', $txt['subject'], $context['sort_by'] == 'subject' ? '<svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Sort'.$context['sort_direction'].'"></use></svg>' : '', '</a>
							</th>
							<th scope="col" width="14%" align="center">
								<a href="', $scripturl, '?action=unread', $context['showing_all_topics'] ? ';all' : '', $context['querystring_board_limits'], ';sort=replies', $context['sort_by'] == 'replies' && $context['sort_direction'] == 'up' ? ';desc' : '', '">', $txt['replies'], $context['sort_by'] == 'replies' ? '<svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Sort'.$context['sort_direction'].'"></use></svg>' : '', '</a>
							</th>';

		// Show a "select all" box for quick moderation?
		if ($showCheckboxes)
			echo '
							<th scope="col" width="22%">
								<a href="', $scripturl, '?action=unread', $context['showing_all_topics'] ? ';all' : '', $context['querystring_board_limits'], ';sort=last_post', $context['sort_by'] == 'last_post' && $context['sort_direction'] == 'up' ? ';desc' : '', '">', $txt['last_post'], $context['sort_by'] == 'last_post' ? '<svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Sort'.$context['sort_direction'].'"></use></svg>' : '', '</a>
							</th>
							<th class="last_th">
								<input type="checkbox" onclick="invertAll(this, this.form, \'topics[]\');" class="input_check" />
							</th>';
		else
			echo '
							<th scope="col" class="smalltext last_th" width="22%">
								<a href="', $scripturl, '?action=unread', $context['showing_all_topics'] ? ';all' : '', $context['querystring_board_limits'], ';sort=last_post', $context['sort_by'] == 'last_post' && $context['sort_direction'] == 'up' ? ';desc' : '', '">', $txt['last_post'], $context['sort_by'] == 'last_post' ? '<svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#Sort'.$context['sort_direction'].'"></use></svg>' : '', '</a>
							</th>';
		echo '
						</tr>
					</thead>
					<tbody>';

		foreach ($context['topics'] as $topic)
		{
			// Calculate the color class of the topic.
			$color_class = '';
			if (strpos($topic['class'], 'sticky') !== false)
				$color_class = 'stickybg';
			if (strpos($topic['class'], 'locked') !== false)
				$color_class .= 'lockedbg';

			$color_class2 = !empty($color_class) ? $color_class . '2' : '';

			echo '
						<tr>
							<td class="', $color_class, ' icon1 windowbg">
								<svg viewBox="0 0 32 32" >
                                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble"></use>';
                                          if ($topic['is_sticky'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadSticky"></use>';
                                          if ($topic['is_locked'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadLocked"></use>';
                                          if ($topic['is_very_hot'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadVeryHot"></use>';
                                          else if ($topic['is_hot'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadHot"></use>';
                                          else if ($topic['is_poll'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadPollMiddle"></use>';
                                          if ($topic['is_posted_in'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadYouPosted"></use>';
                                        echo '</svg>
							</td>
							<td class="subject ', $color_class2, ' windowbg2">
								<div>
									', $topic['is_sticky'] ? '<strong>' : '', '<span id="msg_' . $topic['first_post']['id'] . '">', $topic['first_post']['link'], '</span>', $topic['is_sticky'] ? '</strong>' : '', '
									<a href="', $topic['new_href'], '" id="newicon', $topic['first_post']['id'], '" class="jump-to-new subject-level" title="Jump to new posts">
                                              <svg viewBox="0 0 32 32" ><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#PostNewOnes"></use></svg>
                                             </a>
									<p>
										', $txt['started_by'], ' <strong>', $topic['first_post']['member']['link'], '</strong>
										', $txt['in'], ' <em>', $topic['board']['link'], '</em>
										<small id="pages', $topic['first_post']['id'], '">', $topic['pages'], '</small>
									</p>
								</div>
							</td>
							<td class="', $color_class, ' stats windowbg">
								', $topic['replies'], ' ', $txt['replies'], '
								<br />
								', $topic['views'], ' ', $txt['views'], '
							</td>
							<td class="', $color_class2, ' lastpost windowbg2">
								<a class="skip" href="', $topic['last_post']['href'], '" title="Skip to last post in this thread">
                                          <svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadSkip"></use></svg>
                                        </a>
								', $topic['last_post']['time'], '<br />
								', $txt['by'], ' ', $topic['last_post']['member']['link'], '
							</td>';

			if ($showCheckboxes)
				echo '
							<td class="windowbg2" valign="middle" align="center">
								<input type="checkbox" name="topics[]" value="', $topic['id'], '" class="input_check" />
							</td>';
			echo '
						</tr>';
		}

		if (!empty($context['topics']) && !$context['showing_all_topics'])
			$mark_read['readall'] = array('text' => 'unread_topics_all', 'image' => 'markreadall.gif', 'lang' => true, 'url' => $scripturl . '?action=unread;all' . $context['querystring_board_limits'], 'active' => true);

		if (empty($settings['use_tabs']) && !empty($mark_read))
			echo '
						<tr class="catbg">
							<td colspan="', $showCheckboxes ? '6' : '5', '" align="right">
								', template_button_strip($mark_read, 'top'), '
							</td>
						</tr>';

		if (empty($context['topics']))
			echo '
					<tr style="display: none;"><td></td></tr>';

		echo '
					</tbody>
				</table>
			</div>
			<div class="pagesection" id="readbuttons">';

		if (!empty($settings['use_tabs']) && !empty($mark_read))
			template_button_strip($mark_read, 'right');

		echo '
				<span>', $txt['pages'], ': ', $context['page_index'], '</span>
			</div>';
	}
	else
		echo '
			<div class="cat_bar">
				<h3 class="catbg centertext">
					', $context['showing_all_topics'] ? $txt['msg_alert_none'] : $txt['unread_topics_visit_none'], '
				</h3>
			</div>';

	if ($showCheckboxes)
		echo '
		</form>';

	echo '<ul class="icon_glossary">', !empty($modSettings['enableParticipation']) && $context['user']['is_logged'] ? '
				' : '', '
                      <li>
                        <svg viewBox="0 0 32 32" alt="normal topic"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble"></use></svg>
                        <span>Thread</span>
                      </li>
                      <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadPoll"></use></svg>
                  <span>with Poll</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadSticky"></use></svg>
                  <span>Sticky</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadLocked"></use></svg>
                  <span>Locked</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadHot"></use></svg>
                  <span>&gt; 40 replies</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadVeryHot"></use></svg>
                  <span>&gt 80 replies</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadYouPosted"></use></svg>
                  <span>You&apos;ve Posted</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadSkip"></use></svg>
                  <span>Skip to End</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="normal topic"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#PostNewOnes"></use></svg>
                  <span>New Posts</span>
                </li>
              </ul>';
}

function template_replies()
{
	global $context, $settings, $options, $txt, $scripturl, $modSettings;

	echo '
	<div id="recent">';

	$showCheckboxes = !empty($options['display_quick_mod']) && $options['display_quick_mod'] == 1 && $settings['show_mark_read'];

	if ($showCheckboxes)
		echo '
		<form action="', $scripturl, '?action=quickmod" method="post" accept-charset="', $context['character_set'], '" name="quickModForm" id="quickModForm" style="margin: 0;">
			<input type="hidden" name="', $context['session_var'], '" value="', $context['session_id'], '" />
			<input type="hidden" name="qaction" value="markread" />
			<input type="hidden" name="redirect_url" value="action=unreadreplies', (!empty($context['showing_all_topics']) ? ';all' : ''), $context['querystring_board_limits'], '" />';

	if (isset($context['topics_to_mark']) && !empty($settings['show_mark_read']))
	{
		// Generate the button strip.
		$mark_read = array(
			'markread' => array('text' => 'mark_as_read', 'image' => 'markread.gif', 'lang' => true, 'url' => $scripturl . '?action=markasread;sa=unreadreplies;topics=' . $context['topics_to_mark'] . ';' . $context['session_var'] . '=' . $context['session_id']),
		);

		if ($showCheckboxes)
			$mark_read['markselectread'] = array(
				'text' => 'quick_mod_markread',
				'image' => 'markselectedread.gif',
				'lang' => true,
				'url' => 'javascript:document.quickModForm.submit();',
			);
	}

	if (!empty($context['topics']))
	{
		echo '
			<div class="pagesection">';

		if (!empty($mark_read) && !empty($settings['use_tabs']))
			template_button_strip($mark_read, 'right');

		echo '
				<span>', $txt['pages'], ': ', $context['page_index'], '</span>
			</div>';

		echo '
			<div class="tborder topic_table" id="messageindex">
				<table class="table_grid" cellspacing="0">
					<thead>
						<tr class="catbg">
							<th scope="col" class="first_th" width="5%" colspan="1">&nbsp;</th>
							<th scope="col">
								<a href="', $scripturl, '?action=unreadreplies', $context['querystring_board_limits'], ';sort=subject', $context['sort_by'] === 'subject' && $context['sort_direction'] === 'up' ? ';desc' : '', '">', $txt['subject'], $context['sort_by'] === 'subject' ? ' <img src="' . $settings['images_url'] . '/sort_' . $context['sort_direction'] . '.gif" alt="" />' : '', '</a>
							</th>
							<th scope="col" width="14%" align="center">
								<a href="', $scripturl, '?action=unreadreplies', $context['querystring_board_limits'], ';sort=replies', $context['sort_by'] === 'replies' && $context['sort_direction'] === 'up' ? ';desc' : '', '">', $txt['replies'], $context['sort_by'] === 'replies' ? ' <img src="' . $settings['images_url'] . '/sort_' . $context['sort_direction'] . '.gif" alt="" />' : '', '</a>
							</th>';

		// Show a "select all" box for quick moderation?
		if ($showCheckboxes)
				echo '
							<th scope="col" width="22%">
								<a href="', $scripturl, '?action=unreadreplies', $context['querystring_board_limits'], ';sort=last_post', $context['sort_by'] === 'last_post' && $context['sort_direction'] === 'up' ? ';desc' : '', '">', $txt['last_post'], $context['sort_by'] === 'last_post' ? ' <img src="' . $settings['images_url'] . '/sort_' . $context['sort_direction'] . '.gif" alt="" />' : '', '</a>
							</th>
							<th class="last_th">
								<input type="checkbox" onclick="invertAll(this, this.form, \'topics[]\');" class="input_check" />
							</th>';
		else
			echo '
							<th scope="col" class="last_th" width="22%">
								<a href="', $scripturl, '?action=unreadreplies', $context['querystring_board_limits'], ';sort=last_post', $context['sort_by'] === 'last_post' && $context['sort_direction'] === 'up' ? ';desc' : '', '">', $txt['last_post'], $context['sort_by'] === 'last_post' ? ' <img src="' . $settings['images_url'] . '/sort_' . $context['sort_direction'] . '.gif" alt="" />' : '', '</a>
							</th>';
		echo '
						</tr>
					</thead>
					<tbody>';

		foreach ($context['topics'] as $topic)
		{
			// Calculate the color class of the topic.
			$color_class = '';
			if (strpos($topic['class'], 'sticky') !== false)
				$color_class = 'stickybg';
			if (strpos($topic['class'], 'locked') !== false)
				$color_class .= 'lockedbg';

			$color_class2 = !empty($color_class) ? $color_class . '2' : '';

			echo '
						<tr>
							<td class="', $color_class, ' icon1 windowbg">
								<svg viewBox="0 0 32 32" >
                                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble"></use>';
                                          if ($topic['is_sticky'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadSticky"></use>';
                                          if ($topic['is_locked'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadLocked"></use>';
                                          if ($topic['is_poll'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadPoll"></use>';
                                          else if ($topic['is_very_hot'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadVeryHot"></use>';
                                          else if ($topic['is_hot'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadHot"></use>';
                                          if ($topic['is_posted_in'])
                                            echo '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadYouPosted"></use>';
                                        echo '</svg>
							</td>
							<td class="subject ', $color_class2, ' windowbg2">
								<div>
									', $topic['is_sticky'] ? '<strong>' : '', '<span id="msg_' . $topic['first_post']['id'] . '">', $topic['first_post']['link'], '</span>', $topic['is_sticky'] ? '</strong>' : '', '
									<a href="', $topic['new_href'], '" id="newicon', $topic['first_post']['id'], '" class="jump-to-new subject-level" alt="new" title="Jump to new posts">
                                              <svg viewBox="0 0 32 32" ><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#PostNewOnes"></use></svg>
                                             </a>
									<p>
										', $txt['started_by'], ' <strong>', $topic['first_post']['member']['link'], '</strong>
										', $txt['in'], ' <em>', $topic['board']['link'], '</em>
										<small id="pages', $topic['first_post']['id'], '">', $topic['pages'], '</small>
									</p>
								</div>
							</td>
							<td class="', $color_class, ' stats windowbg">
								', $topic['replies'], ' ', $txt['replies'], '
								<br />
								', $topic['views'], ' ', $txt['views'], '
							</td>
							<td class="', $color_class2, ' lastpost windowbg2">
								<a class="skip" href="', $topic['last_post']['href'], '">
                                          <svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadSkip"></use></svg>
                                        </a>
								', $topic['last_post']['time'], '<br />
								', $txt['by'], ' ', $topic['last_post']['member']['link'], '
							</td>';

			if ($showCheckboxes)
				echo '
							<td class="windowbg2" valign="middle" align="center">
								<input type="checkbox" name="topics[]" value="', $topic['id'], '" class="input_check" />
							</td>';
			echo '
						</tr>';
		}

		if (empty($settings['use_tabs']) && !empty($mark_read))
			echo '
						<tr class="catbg">
							<td colspan="', $showCheckboxes ? '6' : '5', '" align="right">
								', template_button_strip($mark_read, 'top'), '
							</td>
						</tr>';

		echo '
					</tbody>
				</table>
			</div>
			<div class="pagesection">';

		if (!empty($settings['use_tabs']) && !empty($mark_read))
			template_button_strip($mark_read, 'right');

		echo '
				<span>', $txt['pages'], ': ', $context['page_index'], '</span>
			</div>';
	}
	else
		echo '
			<div class="cat_bar">
				<h3 class="catbg centertext">
					', $context['showing_all_topics'] ? $txt['msg_alert_none'] : $txt['unread_topics_visit_none'], '
				</h3>
			</div>';

	if ($showCheckboxes)
		echo '
		</form>';

	echo '<ul class="icon_glossary">', !empty($modSettings['enableParticipation']) && $context['user']['is_logged'] ? '
				' : '', '
                      <li>
                        <svg viewBox="0 0 32 32" alt="normal topic"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble"></use></svg>
                        <span>Thread</span>
                      </li>
                      <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadPoll"></use></svg>
                  <span>with Poll</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadSticky"></use></svg>
                  <span>Sticky</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadLocked"></use></svg>
                  <span>Locked</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadHot"></use></svg>
                  <span>&gt; 20 replies</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadVeryHot"></use></svg>
                  <span>&gt 40 replies</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadYouPosted"></use></svg>
                  <span>You&apos;ve Posted</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="topic has a poll"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadBubble" alt="Normal Topic"></use><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ThreadSkip"></use></svg>
                  <span>Skip to End</span>
                </li>
              </ul>
              <ul class="icon_glossary">
                <li>
                  <svg viewBox="0 0 32 32" alt="normal topic"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#PostBlank"></use></svg>
                  <span>Post</span>
                </li>
                <li>
                  <svg viewBox="0 0 32 32" alt="normal topic"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#PostNewOnes"></use></svg>
                  <span>is New</span>
                </li>
              </ul>';
}

?>