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
	global $context, $settings, $options, $txt, $scripturl, $modSettings;
  
    echo '<pre>';
    //print_r($context['common_stats']);
    echo '</pre>';
  
    /*
    echo '
    <section class="stats-boxes">
      <div class="box" data-holds="Members">
        <label>Members</label>
        <dl>
          <dt>Total M</dt>
          <dd>' . $context['num_members'] . '</dd>
          <dt>Online Today</dt>
          <dd>' . $context['online_today'] . '</dd>
          <dt>Online Now</dt>
          <dd>' . $context['users_online'] . '</dd>
        </dl>
      </div>
      
      <div class="box" data-holds="Posts">
        <label>Posts</label>
        <dl>
          <dt>Total Posts</dt>
          <dd>' . $context['num_posts'] . '</dd>
          <dt>Avg Per Day</dt>
          <dd>', $context['average_posts'], '</dd>
          <dt>Threads</dt>
          <dd>' . $context['num_topics'] . '</dd>
        </dl>
      </div>
      
      <div class="box" data-holds="Online Today">
        <label>Online Today</label>
        <span class="number">' . $context['online_today'] . '</span>
      </div>
      <div class="box" data-holds="Online Now">
        <label>Online Now</label>
        <span class="number">' . $context['users_online'] . '</span>
      </div>
      <div class="box" data-holds="Latest Member">
        <label>Latest Member</label>
        <span class="name">' . $context['common_stats']['latest_member']['link'] . '</span>
      </div>
      <div class="box" data-holds="Posts">
        <label>Posts</label>
        
      </div>
      <div class="box" data-holds="Threads">
        <label>Threads</label>
        
      </div>
    </section>
    ';
    */

	echo '
	<div class="stats-boxes">
      <!-- <h1>ballp.it Stats</h1> -->
			<div class="stats-box primary">
              <h3>Members</h3>
						<dl class="stats">
							<dt>Total Members</dt>
							<dd>', $context['show_member_list'] ? '<a href="' . $scripturl . '?action=mlist">' . $context['num_members'] . '</a>' : $context['num_members'], '</dd>
                            <dt>Online Today</dt>
                            <dd>' . $context['online_today'] . '</dd>
                            <dt>Online Now</dt>
                            <dd>' . $context['users_online'] . '</dd>
                            <dt>Most Online</dt>
                            <dd>', $context['most_members_online']['number'], '</dd>
                            <dt>Latest Member</dt>
                            <dd>', $context['common_stats']['latest_member']['link'], '</dd>
                            <dt>Registrations Per Day</dt>
							<dd>', $context['average_members'], '</dd>
                            ';
	echo '
						</dl>
			</div>
			<div class="stats-box primary">
              <h3>Posts</h3>
						<dl class="stats">
                            <dt>Total Posts</dt>
                            <dd>' . $context['num_posts'] . '</dd>
                            <dt>Threads</dt>
                            <dd>' . $context['num_topics'] . '</dd>
                            <dt>Posts Per Day</dt>
                            <dd>', $context['average_posts'], '</dd>
                            <dt>Threads Per Day</dt>
							<dd>', $context['average_topics'], '</dd>';
                        if (!empty($modSettings['hitStats']))
		                  echo '
							<dt>Page Views</dt>
							<dd>', $context['num_hits'], '</dd>
                            <dt>Page Views Per Day</dt>
							<dd>', $context['average_hits'], '</dd>';
						echo '</dl>
			</div>
			<div class="stats-box">
				<h3>Chattiest People</h3>
							<dl class="stats">';

	foreach ($context['top_posters'] as $poster)
	{
		echo '
								<dt>
									', $poster['link'], '
								</dt>
								<dd class="statsbar">';

		if (!empty($poster['post_percent']))
			echo '
                <div class="percent-bar">
                  <div class="inside" style="width:', ($poster['post_percent'] * 0.98) , '%"></div>
                  <span>', $poster['num_posts'], '</span>
                </div>
								</dd>';
	}

	echo '
							</dl>
			</div>
			<div class="stats-box">
				<h3>Best Subjects</h3>
                  <dl class="stats">';

	foreach ($context['top_boards'] as $board)
	{
		echo '
								<dt>
									', $board['link'], '
								</dt>
								<dd class="statsbar">';

		if (!empty($board['post_percent']))
			echo '
              <div class="percent-bar">
                  <div class="inside" style="width:', ($board['post_percent'] * 0.98) , '%"></div>
                  <span>', $board['num_posts'], '</span>
                </div>';
		echo '</dd>';
	}

	echo '
              </dl>

			</div>
			<div class="stats-box">
				<h3>Best Threads (by Replies)</h3>
							<dl class="stats">';

	foreach ($context['top_topics_replies'] as $topic)
	{
		echo '
								<dt>
									', $topic['link'], '
								</dt>
								<dd class="statsbar">';
		if (!empty($topic['post_percent']))
			echo '
				  <div class="percent-bar">
                    <div class="inside" style="width:', ($topic['post_percent'] * 0.98) , '%"></div>
                    <span>', $topic['num_replies'], '</span>
                  </div>
                </dd>';
	}
	echo '
							</dl>
			</div>

			<div class="stats-box">
				<h3>Best Threads (by Views)</h3>
                <dl class="stats">';

	foreach ($context['top_topics_views'] as $topic)
	{
		echo '
							<dt>', $topic['link'], '</dt>
							<dd class="statsbar">';

		if (!empty($topic['post_percent']))
			echo '
              <div class="percent-bar">
                    <div class="inside" style="width:', ($topic['post_percent'] * 0.98) , '%"></div>
                    <span>', $topic['num_views'], '</span>
                  </div>
            </dd>';
	}

	echo '
						</dl>
			</div>
			<div class="stats-box">
				<h3>Thread Starters</h3>
						<dl class="stats">';

	foreach ($context['top_starters'] as $poster)
	{
		echo '
							<dt>
								', $poster['link'], '
							</dt>
							<dd class="statsbar">';

		if (!empty($poster['post_percent']))
			echo '
              <div class="percent-bar">
                    <div class="inside" style="width:', ($poster['post_percent'] * 0.98) , '%"></div>
                    <span>', $poster['num_topics'], '</span>
                  </div>
          </dd>';
	}

	echo '
						</dl>
			</div>
			<div class="stats-box">
				<h3>Most Time In The Ball Pit</h3>
						<dl class="stats">';

	foreach ($context['top_time_online'] as $poster)
	{
		echo '
							<dt>
								', $poster['link'], '
							</dt>
							<dd class="statsbar">';

		if (!empty($poster['time_percent']))
			echo '
              <div class="percent-bar">
                <div class="inside" style="width:', ($poster['time_percent']  * 0.98) , '%"></div>
                <span style="opacity:0">', $poster['time_online'], '</span>
              </div>
        </dd>';
	}

	echo '
						</dl>
			</div>
		<div class="stats-table-holder">';

	if (!empty($context['yearly']))
	{
		echo '
		<table border="0" width="100%" cellspacing="1" cellpadding="4" class="table_grid stats-table" id="stats">
      <caption>BALLP.IT IN REVIEW</caption>
			<thead>
				<tr class="titlebg" valign="middle" align="center">
					<th class="first_th lefttext" width="25%"></th>
					<th width="15%">', $txt['stats_new_topics'], '</th>
					<th width="15%">', $txt['stats_new_posts'], '</th>
					<th width="15%">', $txt['stats_new_members'], '</th>
					<th', empty($modSettings['hitStats']) ? ' class="last_th"' : '', ' width="15%">', $txt['smf_stats_14'], '</th>';

		if (!empty($modSettings['hitStats']))
			echo '
					<th class="last_th">', $txt['page_views'], '</th>';

		echo '
				</tr>
			</thead>
			<tbody>';

		foreach ($context['yearly'] as $id => $year)
		{
			echo '
				<tr class="windowbg2" valign="middle" align="center" id="year_', $id, '">
					<th class="lefttext" width="25%">
						<img id="year_img_', $id, '" src="', $settings['images_url'], '/collapse.gif" alt="*" class="useless-icon" /> <a href="#year_', $id, '" id="year_link_', $id, '">', $year['year'], '</a>
					</th>
					<th width="15%">', $year['new_topics'], '</th>
					<th width="15%">', $year['new_posts'], '</th>
					<th width="15%">', $year['new_members'], '</th>
					<th width="15%">', $year['most_members_online'], '</th>';

			if (!empty($modSettings['hitStats']))
				echo '
					<th>', $year['hits'], '</th>';

			echo '
				</tr>';

			foreach ($year['months'] as $month)
			{
				echo '
				<tr class="windowbg2" valign="middle" align="center" id="tr_month_', $month['id'], '">
					<th class="stats_month">
						<img src="', $settings['images_url'], '/', $month['expanded'] ? 'collapse.gif' : 'expand.gif', '" alt="" id="img_', $month['id'], '" class="useless-icon" /> <a id="m', $month['id'], '" href="', $month['href'], '" onclick="return doingExpandCollapse;">', $month['month'], ' ', $month['year'], '</a>
					</th>
					<th width="15%">', $month['new_topics'], '</th>
					<th width="15%">', $month['new_posts'], '</th>
					<th width="15%">', $month['new_members'], '</th>
					<th width="15%">', $month['most_members_online'], '</th>';

				if (!empty($modSettings['hitStats']))
					echo '
					<th>', $month['hits'], '</th>';

				echo '
				</tr>';

				if ($month['expanded'])
				{
					foreach ($month['days'] as $day)
					{
						echo '
				<tr class="windowbg2" valign="middle" align="center" id="tr_day_', $day['year'], '-', $day['month'], '-', $day['day'], '">
					<td class="stats_day">', $day['year'], '-', $day['month'], '-', $day['day'], '</td>
					<td>', $day['new_topics'], '</td>
					<td>', $day['new_posts'], '</td>
					<td>', $day['new_members'], '</td>
					<td>', $day['most_members_online'], '</td>';

						if (!empty($modSettings['hitStats']))
							echo '
					<td>', $day['hits'], '</td>';

						echo '
				</tr>';
					}
				}
			}
		}

		echo '
			</tbody>
		</table>
		</div>
	</div>
	<script type="text/javascript" src="', $settings['default_theme_url'], '/scripts/stats.js"></script>
	<script type="text/javascript"><!-- // --><![CDATA[
		var oStatsCenter = new smf_StatsCenter({
			sTableId: \'stats\',

			reYearPattern: /year_(\d+)/,
			sYearImageCollapsed: \'expand.gif\',
			sYearImageExpanded: \'collapse.gif\',
			sYearImageIdPrefix: \'year_img_\',
			sYearLinkIdPrefix: \'year_link_\',

			reMonthPattern: /tr_month_(\d+)/,
			sMonthImageCollapsed: \'expand.gif\',
			sMonthImageExpanded: \'collapse.gif\',
			sMonthImageIdPrefix: \'img_\',
			sMonthLinkIdPrefix: \'m\',

			reDayPattern: /tr_day_(\d+-\d+-\d+)/,
			sDayRowClassname: \'windowbg2\',
			sDayRowIdPrefix: \'tr_day_\',

			aCollapsedYears: [';

		foreach ($context['collapsed_years'] as $id => $year)
		{
			echo '
				\'', $year, '\'', $id != count($context['collapsed_years']) - 1 ? ',' : '';
		}

		echo '
			],

			aDataCells: [
				\'date\',
				\'new_topics\',
				\'new_posts\',
				\'new_members\',
				\'most_members_online\'', empty($modSettings['hitStats']) ? '' : ',
				\'hits\'', '
			]
		});
	// ]]></script>';
	}
}

?>