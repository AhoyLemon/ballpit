<?php

if (!defined('SMF'))

	die('Hacking attempt...');



function BulbMessage()

{

	global $smcFunc, $user_info, $board_info, $context, $modSettings, $txt, $board, $topic;

	

	loadLanguage('Bulb');

	

	// ensure board/topic exist

	if (empty($board_info) || empty($_REQUEST['msg']) || !is_numeric($_REQUEST['msg']))

		fatal_lang_error('bulb_error', false);





	// Check that the message exists and belongs to the sent topic & board

	$message = (int) $_REQUEST['msg'];



	if (empty($message))

		fatal_lang_error('bulb_lacks_msg');

	$request = $smcFunc['db_query']('', '

		SELECT approved, id_member

		FROM {db_prefix}messages

		WHERE id_msg = {int:message}

			AND id_topic = {int:topic}

			AND id_board = {int:board}',

		array(

			'message' => $message,

			'topic' => $topic,

			'board' => $board

		)

	);

	if ($smcFunc['db_num_rows']($request) == 0)

		fatal_lang_error('bulb_msg_not_found', false);

	list ($approved, $id_poster) = $smcFunc['db_fetch_row']($request);

	$smcFunc['db_free_result']($request);



	

	if (empty($approved))

		fatal_lang_error('bulb_msg_not_approved', false);



	

	 //prevent user from bulbing themselves

	if ($id_poster == $user_info['id'])

		fatal_lang_error('bulb_yourself', false);

		





	// check if message has already been bulbed by user

	$request = $smcFunc['db_query']('', '

		SELECT id_voter

		FROM {db_prefix}bulbs

		WHERE id_voter = {int:id_voter}

			AND id_message = {int:id_message}

		LIMIT 1',

		array(

			'id_voter' => $user_info['id'],

			'id_message' => $message

		)

	);

	

	if ($smcFunc['db_num_rows']($request) != 0)	
	{
		if ($user_info['id'] == 3694)
		{
			fatal_lang_error('bulb_already_bulbed_fw',false);
		}
		else
		{
			fatal_lang_error('bulb_already_bulbed', false);
		}		
	}

	$smcFunc['db_free_result']($request);



		

	// add bulb to database 

	$smcFunc['db_insert']('', 

		'{db_prefix}bulbs',

		array(

			'id_message' => 'int', 

			'id_voter' => 'int', 

			'id_poster' => 'int', 

			'id_topic' => 'int', 

			'timestamp' => 'int'

		),

		array(

			$message,

			$user_info['id'], 

			$id_poster,

			$topic,

			time()

		),

		array()

	);

	//$smcFunc['db_free_result']($request);

	

	// update bulb count for message

	$smcFunc['db_query']('', '

		UPDATE {db_prefix}messages

		SET bulbs_total = bulbs_total + 1

		WHERE id_msg = {int:id_message}

		LIMIT 1',

		array(

			'id_message' => $message,

		)

	);

	$smcFunc['db_free_result']($request);

		

	// update bulb count for message

	$smcFunc['db_query']('', '

		UPDATE {db_prefix}members

		SET bulbs_total = bulbs_total + 1

		WHERE id_member = {int:id_poster}

		LIMIT 1',

		array(

			'id_poster' => $id_poster,

		)

	);

	$smcFunc['db_free_result']($request);

	redirectexit('topic=' . $topic . '.msg' . $message . "#msg" . $message);

}

	

function ViewBulbs()

{

	global $smcFunc, $topic, $txt, $context, $modSettings, $scripturl;

	

	if (empty($topic))

		fatal_lang_error('not_a_topic', false);

		

	if (($context['members'] = cache_get_data('bulb_topic_' . $topic, 360)) == null)

	{

		$dbrequest = $smcFunc['db_query']('', '

			SELECT mem.id_member,mem.member_name

			FROM {db_prefix}bulbs AS b

				LEFT JOIN {db_prefix}members AS mem ON {mem.id_member = b.id_member)

			WHERE b.id_topic = {int:topic}',

			array(

				'topic' => $topic,

			)

		);

		while($row = $smcFunc['db_fetch_assoc']($dbrequest))

		{

			$context['members'][] = '<a class="bulb_username" href="' . $scripturl . '?action=profile;u=' . $row['id_member'] . '">' . $row['member_name'] . '</a>';

		}

		$smcFunc['db_free_result']($dbrequest);

		cache_put_data('bulb_topic_' . $topic, $context['members'], 360);

	}

	

	loadTemplate('Bulbs');

}



?>
