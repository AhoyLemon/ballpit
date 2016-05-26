<?php

/*

Rough take on Twitter oEmbed for VeloRooms
by L'arri : voici.l.arriviste@gmail.com
27 October 2014

Packaed and modified by SMFHacks.com -vbgamer45

*/

// I used SMF items where possible for database interactions and required includes.



global $ssi_guest_access;
$ssi_guest_access = 1;
require(dirname(__FILE__) . '/SSI.php');


global $smcFunc;

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_NUMBER_INT);
$qv  = $_GET['id'];
if (!empty($qv)) 
{
    check_cache($qv);
} 
else 
{
    echo '{"html":"<p style=\"color: #666; border: 1px dotted #666; padding: 5px; width: 490px;\">' . $txt['autotwitter_blankid'] . '</p>"}';
}

function check_cache($tweet)
{
	global  $smcFunc;
    
    if (!is_numeric($tweet))
        return;
    
 
    
	$request = $smcFunc['db_query']('','SELECT 
        html from 
    {db_prefix}tweet_cache 
    where tweetid = {raw:tweet}', 
    array(
        'tweet' => $tweet
        )
    
    );
    
	if ($smcFunc['db_num_rows']($request) == 0) 
    {

		add_cache($tweet);
	}
	else 
    {
		while ($row = $smcFunc['db_fetch_row']($request))
		  echo '{"html" : "' . $row[0] .'"}';
	}		
	$smcFunc['db_free_result']($request);
	
}

function add_cache($tweet)
{
    global $smcFunc, $txt;
    
    
    if (!function_exists('curl_init'))
        return;
    
	$twitterapi_url = "https://api.twitter.com/1/statuses/oembed.json?id=";
	$twitterapi_url = $twitterapi_url . $tweet;
	

    
	$curl = curl_init($twitterapi_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, FALSE);
	$response = curl_exec($curl);
	curl_close($curl);
	
	$json_content = json_decode($response, true);
	$json_content = preg_replace( "/\r|\n/", "", $json_content );
	
	$html = $json_content['html'];
	if (!empty($html)) {
		$request = $smcFunc['db_insert']('insert',
            	'{db_prefix}tweet_cache',
            	array(
                	'tweetid' => 'raw', 'html' => 'text'
            	),
            	array(
                	$tweet, addslashes($html)
           	),
            	array('tweetid','html')
        	);
		echo '{"html" : "' . addslashes($html) .'"}'; 
	}
	else {
		echo '{"html":"<p style=\"color: #666; border: 1px dotted #666; padding: 5px; width: 490px;\">' . $txt['autotwitter_tweeterror'] . '</p>"}';
	}
	

}


?>