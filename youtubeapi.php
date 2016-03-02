<?php
/**
 * Youtube
 * 
 * @param str youtube video url
 * @return object || void
 * @copyright w3bees.com
 */
function youtube($id)
{
	# get video id from url
	$urlQ = parse_url( $url, PHP_URL_QUERY );
	parse_str( $urlQ, $query );

	# YouTube api v2 url
	$apiURL = 'http://gdata.youtube.com/feeds/api/videos/'. $id .'?v=2&alt=jsonc';

	# curl options
	$options = array(
		CURLOPT_URL	=> $apiURL,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_BINARYTRANSFER => true,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_TIMEOUT => 5 );

	# connect api server through cURL
	$ch = curl_init();
	curl_setopt_array($ch, $options);
	# execute cURL
	$json = curl_exec($ch) or die( curl_error($ch) );
	# close cURL connect
	curl_close($ch);

	# decode json encoded data
	if ($data = json_decode($json))
		return (object) $data->data;
}

/*
# YouTube video url
$url = 'www.youtube.com/watch?v=q4Ob7OSLUyY';
$youtube = youtube($url);

# title
$youtube->title;
# duration in seconds
$youtube->duration;
#video description
$youtube->description;

# thumbnail url High Quality
$youtube->thumbnail->hqDefault;
# thumbnail url Small Quality
$youtube->thumbnail->sqDefault;
# video rating out of five
$youtube->rating;
# total likes
$youtube->likeCount;
# video category
$youtube->category;
# total view
$youtube->viewCount;
# time upload time
$youtube->uploaded;
# more
var_dump($youtube);
*/
?>