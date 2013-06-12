<?php
  function get_data($url)
{
  $ch = curl_init();
  $timeout = 5;
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}
$wikiData = get_data('http://en.wikipedia.org/w/api.php?action=query&prop=extracts&format=json&pageids=170318');
$jsonDecodedWike = json_decode($wikiData);
//var_dump(($jsonDecodedWike));
foreach($jsonDecodedWike->query->pages as $page){
  print_r($page->extract);
	print_r($page->title);
	print_r($page->pageid);
	}
	
?>	
</pre>
